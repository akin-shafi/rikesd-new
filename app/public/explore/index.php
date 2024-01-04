<?php
require_once('../../../private/initialize.php');

$page = 'Exploration';
$page_title = 'Exploration List';
include(SHARED_PATH . '/admin_header.php');

error_reporting(0);
$errors = [];

$categories = Category::find_by_undeleted();

if (is_post_request()):
  $exploreArgs = $_POST['explore'] ?? '';
  $msg = "";

  $thumbFile = $_FILES["thumbnail"]["name"];
  $thumbTemp = $_FILES["thumbnail"]["tmp_name"];
  $mainFile = $_FILES["main"]["name"];
  $mainTemp = $_FILES["main"]["tmp_name"];

  $thumb_target_file = 'thumb_' . date("dmYhis") . basename($thumbFile);
  $main_target_file = 'main_' . date("dmYhis") . basename($mainFile);
  $thumbFolder = "./uploads/" . $thumb_target_file;
  $mainFolder = "./uploads/" . $main_target_file;

  $exploreArgs['thumbnail'] = $thumb_target_file;
  $exploreArgs['main'] = $main_target_file;

  if (move_uploaded_file($thumbTemp, $thumbFolder) && move_uploaded_file($mainTemp, $mainFolder)) {
    $msg = "File Uploaded Successfully...";
  } else {
    $errors[] = "Failed to Upload File...";
  }
  $explore = new Blog($exploreArgs);

  if (empty($explore->errors)):
    log_action('explore created', "{Admin} .", "explore-create");
    $session->message('explore created successfully!');
    $exploreResult = $explore->save();
    redirect_to(url_for('/'));
  else:
    $errors[] = $explore->errors;
  endif;

else:
  $explore = new Blog();
endif;

$explores = Blog::get_blogs();
?>


<div class="row">

  <div class="col-12 shadow">
    <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
      <h3>List</h3>
      <div class="btn">
        <a href="<?php echo url_for('/public/explore/category/') ?>" class="btn btn-sm btn-outline-primary">Create
          category</a>
        <a href="<?php echo url_for('/public/explore/create.php') ?>" class="btn btn-sm btn-primary">Create Post</a>
      </div>
    </div>
    <div class="table-responsive">
      <button id="postBtn" class="btn btn-primary" style="display:none">Set as Featured Post</button>
      <table class="table table-sm table-bordered table-striped table-hover align-middle">
        <thead>
          <tr>
            <th></th>
            <th>Image</th>
            <th>Topic</th>
            <th>Category</th>
            <th>Summary</th>
            <th>Status</th>
            <th>Created at</th>

            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($explores as $explore):
            $category = Category::find_by_id($explore->category_id)->name;
            $thumbnail = !empty($explore->thumbnail) ? url_for_root('uploads/' . $explore->thumbnail) : url_for_root('uploads/thumbs/image150.png');

            ?>
            <tr>
              <td><input type="radio" class="feature" name="feature" value="<?php echo $explore->id ?>" <?php echo $explore->featured == 1 ? 'checked' : ''; ?> /></td>
              <td style="width:50px">
                <img src="<?php echo $thumbnail ?>" class="img-thumbnail" alt=".." />
              </td>
              <td>
                <span class="d-inline-block text-truncate" style="max-width: 200px;">
                  <?php echo ucfirst($explore->title); ?>
                </span>
              </td>
              <td>
                <?php echo ucfirst($category); ?>
              </td>
              <td>
                <span class="d-inline-block text-truncate" style="max-width: 200px;">
                  <?php echo ucfirst($explore->summary); ?>
                </span>
              </td>

              <td>
                <span class="badge bg-<?php echo $explore->status == 1 ? 'info' : 'success'; ?>">
                  <?php echo $explore->status == 1 ? 'Draft' : 'published'; ?>
                </span>

                <span class="badge bg-<?php echo $explore->featured == 1 ? 'danger' : ''; ?>">
                  <?php echo $explore->featured == 1 ? 'featured' : ''; ?>
                </span>
              </td>
              <td>
                <?php echo date('Y-m-d', strtotime($explore->created_at)); ?>
              </td>

              <td class=" text-center">
                <a href="<?php echo url_for('../exploration/readmore.php?link=' . $explore->link . '&id=' . $explore->id); ?>"
                  class="btn btn-sm btn-outline-primary">Preview</a>
                <a href="<?php echo url_for('/public/explore/edit.php?id=' . $explore->id); ?>"
                  class="btn btn-sm btn-outline-warning">Edit</a>
                <a href="<?php echo url_for('/public/explore/delete.php?id=' . $explore->id); ?>"
                  class="btn btn-sm btn-outline-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<input id="pInput" value="" type="hidden" />
<?php include(SHARED_PATH . '/admin_footer.php'); ?>

<script>
  $(document).on("click", ".feature", function () {
    let postID = $(this).val()
    console.log(postID)
    $("#postBtn").show()
    $("#pInput").val(postID);
  })

  $(document).on("click", "#postBtn", function () {
    let postID = $("#pInput").val();
    $.ajax({
      url: 'inc/articles.php',
      method: "POST",
      data: {
        post: 1,
        id: postID,
      },
      dataType: "json",
      success: function (data) {
        if (data.success == true) {
          successTime(data.msg);
          $("#postBtn").hide()
        } else {
          errorAlert(data.msg);
        }
      }
    })
  })
</script>
<!-- Datatables js -->
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>

<!-- Datatable Init js -->
<script src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>