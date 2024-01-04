<?php 
    require_once('../../../../private/initialize.php');

$page = 'Blog';
$page_title = 'Edit Category';
include(SHARED_PATH . '/admin_header.php'); 

error_reporting(0);
$errors = [];
$id = $_GET['id'];

if ($id == '') redirect_to(url_for('/public/explore/category'));

$category = Category::find_by_id($id);

if (is_post_request()) :
  $categoryArgs = $_POST['category'] ?? '';

  $category->merge_attributes($categoryArgs);
  $category->save();

  if (empty($category->errors)) :
    log_action('Category updated', "{Admin} .", "category-edit");
    $session->message('Category updated successfully!');
    $category->save();
    redirect_to(url_for('/public/explore/category'));
  else :
    $errors[] = $category->errors;
  endif;

endif;

?>


  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <div class="card shadow">
          <form method="post">
            <div class="card-body">
              <div class="mb-3">
                <label for="category" class="form-label">Category name</label>
                <input type="text" class="form-control" name="category[name]" value="<?php echo $category->name; ?>" id="category" placeholder="Enter category name">
              </div>
             

              <div class="mb-1 d-flex justify-content-between">
                <a href="<?php echo url_for('public/explore/category/') ?>" class="btn btn-outline-primary me-2">Go Back</a>

                <button type="submit" class="btn btn-primary d-block ms-auto">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include(SHARED_PATH . '/admin_footer.php');?>