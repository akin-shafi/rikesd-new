<?php 
    require_once('../../../../private/initialize.php');

$page = 'Blog';
$page_title = 'Delete Category';
include(SHARED_PATH . '/admin_header.php'); 

$id = $_GET['id'];

if ($id == '') redirect_to(url_for('/public/explore/category'));

$category = Category::find_by_id($id);

if (is_post_request()) :
  pre_r($id);
  $category->delete();

  log_action('Category delete', "{Admin} .", "category-delete");
  $session->message('Category deleted successfully!');
 redirect_to(url_for('/public/explore/category'));
endif;

?>


  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <div class="card shadow">
          <form method="post">
            <div class="card-body">
              <div class="mb-3 text-center">
                <h5>
                  Are you sure you want to delete this category?
                </h5>
                <p>You wont be able to revert this.</p>
              </div>
              <div class="mb-1 d-flex justify-content-center">
                <a href="<?php echo url_for('public/explore/category/') ?>" class="btn btn-primary me-2">Go Back</a>
                <button type="submit" class="btn btn-outline-danger">Delete permanently</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include(SHARED_PATH . '/admin_footer.php');?>