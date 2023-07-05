<?php 
    require_once('../../../private/initialize.php');

$page = 'Blog';
$page_title = 'Delete Post';
include(SHARED_PATH . '/admin_header.php'); 
error_reporting(0);
$id = $_GET['id'];

if ($id == '') redirect_to(url_for('admin/'));

$blog = Blog::find_by_id($id);

if (is_post_request()) :
  pre_r($id);
  $blog->delete();

  log_action('Blog delete', "{Admin} .", "blog-delete");
  $session->message('Blog deleted successfully!');
  redirect_to(url_for('public/blog_post/'));
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
                  Are you sure you want to delete this blog?
                </h5>
                <p>You wont be able to revert this.</p>
              </div>
              <div class="mb-1 d-flex justify-content-center">
                <a href="<?php echo url_for('public/blog_post/') ?>" class="btn btn-primary me-2">Go Back</a>
                <button type="submit" class="btn btn-outline-danger">Delete permanently</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include(SHARED_PATH . '/admin_footer.php');?>