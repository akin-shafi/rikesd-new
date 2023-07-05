<?php require_once('../../../private/initialize.php');

$page = 'Blog';
$page_title = 'Edit Blog';
include(SHARED_PATH . '/admin_header.php'); 
error_reporting(0);
$errors = [];
$id = $_GET['id'];

if ($id == '') redirect_to(url_for_root('blog/'));

$blog = Blog::find_by_id($id);
$categories = Category::find_all();


$thumbnail = !empty($blog->thumbnail) ? url_for_root('uploads/' . $blog->thumbnail) :  url_for_root('uploads/thumbs/image150.png');
$main = !empty($blog->main) ? url_for_root('uploads/thumbs/' . $blog->main) :  url_for_root('uploads/thumbs/image150.png');


if (is_post_request()) :
  $blogArgs = $_POST['blog'] ?? '';
  $msg = "";

  $thumbFile = $_FILES["thumbnail"]["name"];
  $thumbTemp = $_FILES["thumbnail"]["tmp_name"];
  $mainFile = $_FILES["main"]["name"];
  $mainTemp = $_FILES["main"]["tmp_name"];

  $thumb_target_file = 'thumb_' . date("dmYhis") . basename($thumbFile);
  $main_target_file = 'main_' . date("dmYhis") . basename($mainFile);
  $thumbFolder = "../../../uploads/" .  $thumb_target_file;
  $mainFolder = "../../../uploads/" . $main_target_file;

  

  if ($thumbFile = $_FILES["thumbnail"]["name"] != null) {
    if (file_exists($blog->thumbnail)) {
      unlink("../../../uploads/" . $blog->thumbnail);
    }
    $blogArgs['thumbnail'] = $thumb_target_file;
    if (move_uploaded_file($thumbTemp, $thumbFolder)) {
      $msg = "File Uploaded Successfully...";
    } else {
      $errors[] = "Failed to Upload File...";
    }
  }
  if ($thumbFile = $_FILES["main"]["name"] != null) {
    if (file_exists($blog->main)) {
      unlink(url_for_root('uploads/') . $blog->main);
    }
    $blogArgs['main'] = $main_target_file;
    if (move_uploaded_file($mainTemp, $mainFolder)) {
      $msg = "File Uploaded Successfully...";
    } else {
      $errors[] = "Failed to Upload File...";
    }
  }

  $blog->merge_attributes($blogArgs);
  $blog->save();

  if (empty($blog->errors)) :
    log_action('Blog updated', "{Admin} .", "blog-edit");
    $session->message('Blog updated successfully!');
    $blog->save();
    redirect_to(url_for('public/blog_post/'));
  else :
    $errors[] = $blog->errors;
  endif;

endif;


?>
<link rel="stylesheet" href="<?php echo url_for('assets/editor/froala_editor.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/froala_style.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/code_view.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/image_manager.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/image.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/table.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/video.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  

  <div class="card shadow">
    <form method="post" enctype="multipart/form-data">
      <div class="card-body">

        <main class="row">
          <div class=" col-lg-4 col-md-4 border p-2 mb-3">
              <label for="duration" class="form-label">Reading Duration</label>
              <input type="text" class="form-control"  name="blog[duration]" id="duration" value="<?php echo $blog->duration; ?>" placeholder="Enter duration" >
            </div>
          <div class=" col-lg-4 col-md-4 border p-2 mb-3 d-flex align-items-center">
            <div class="form-check me-3">
              <input class="form-check-input" type="radio" name="blog[status]" value="1" <?php echo $blog->status == 1 ? 'checked' : ''; ?> id="draft" checked>
              <label class="form-check-label" for="draft">
                Draft
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="blog[status]" value="2" <?php echo $blog->status == 2 ? 'checked' : ''; ?> id="publish">
              <label class="form-check-label" for="publish">
                Publish
              </label>
            </div>
          </div>
          <div class=" col-lg-4 col-md-4 border p-2 mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="blog[category_id]" id="category">
              <option value="">Select category</option>
              <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>" <?php echo ($blog->category_id ==  $category->id) ? 'selected' : '' ?>>
                  <?php echo ucfirst($category->name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </main>
        <div class="mb-3">
          <label for="title" class="form-label">Topic</label>
          <input type="text" class="form-control" name="blog[title]" value="<?php echo $blog->title; ?>" id="title" placeholder="Enter topic">
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-6 col-12 mb-3">
              <p>
                <img src="<?php echo $thumbnail ?>" class="img-thumb" width="90" alt="thumb">
              </p>
              <div class="input-group">
                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                <label class="input-group-text" for="thumbnail">Thumbnail image</label>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-3">
              <p>
                <img src="<?php echo $main ?>" class="img-thumb" width="90" alt="main">
              </p>
              <div class="input-group">
                <input type="file" class="form-control" name="main" id="main">
                <label class="input-group-text" for="main">Header image</label>
              </div>
            </div>
        </div>
        
        <div class="mb-3">
          <label for="summary" class="form-label">summary</label>
          <input type="text" class="form-control" name="blog[summary]" value="<?php echo $blog->summary; ?>" id="summary" placeholder="Enter summary">
        </div>
        <div class="mb-3">
          <label for="editor" class="form-label">Description</label>
          <textarea class="form-control" name="blog[description]" id="editor" rows="5" placeholder="Enter Description"><?php echo $blog->description; ?></textarea>
        </div>
        
        <div class="mb-1">
          <button type="submit" class="btn btn-primary d-block ms-auto">Submit</button>
        </div>
      </div>
    </form>
  </div>
      

  <?php include(SHARED_PATH . '/admin_footer.php');?>
<!-- Datatables js -->
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
 

  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/froala_editor.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/align.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/code_beautifier.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/code_view.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/draggable.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/image.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/image_manager.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/link.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/lists.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/paragraph_format.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/paragraph_style.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/table.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/video.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/url.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/entities.min.js') ?>"></script>


<!-- Datatable Init js -->
  <script type="text/javascript" src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>



  <script>
    (function () {
      const editorInstance = new FroalaEditor('#editor', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        imageUploadURL: 'upload_image.php',
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              // e.preventDefault()
            })
          }
        }
      })
    })()
  </script>

</html>
