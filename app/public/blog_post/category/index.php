<?php 
    require_once('../../../../private/initialize.php');

$page = 'Blog';
$page_title = 'Blog Category';
include(SHARED_PATH . '/admin_header.php'); 

error_reporting(0);
$errors = [];

if (is_post_request()) :
  $categoryArgs = $_POST['category'] ?? '';
  $category = new Category($categoryArgs);
  $category->save();

  if (empty($category->errors)) :
    log_action('Category created', "{Admin} .", "category-create");
    $session->message('Category created successfully!');
    $categoryResult = $category->save();
    redirect_to(url_for('/public/blog_post/category'));
  else :
    $errors[] = $category->errors;
  endif;

else :
  $category = new Category();
endif;

$categories = Category::find_all();
?>

  <div class="container">
  <a href="<?php echo url_for('public/blog_post/') ?>" class="btn btn-outline-primary btn-sm mt-2 mb-2">Back to List</a>

    <div class="row">
      
      <div class="col-6 mx-auto">
        <div class="card shadow">
          <?php if (!empty($errors)) : ?>
          <?php echo display_errors($errors); ?>
          <?php else : ?>
          <?php echo $msg; ?>
          <?php echo display_session_message(); ?>
          <?php endif; ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="card-body">
              <div class="mb-3">
                <label for="category" class="form-label">Category name</label>
                <input type="text" class="form-control" name="category[name]" id="category"
                  placeholder="Enter category name">
              </div>
              <div class="mb-1">
                <button type="submit" class="btn btn-primary d-block ms-auto">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-6 shadow">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Category</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $category) : ?>
            <tr>
              <td><?php echo ucfirst($category->name); ?></td>
              <td class="text-center">
                <a href="<?php echo url_for('/public/blog_post/category/edit.php?id=' . $category->id); ?>"
                  class="btn btn-sm btn-outline-warning">Edit</a>
                <a href="<?php echo url_for('/public/blog_post/category/delete.php?id=' . $category->id); ?>"
                  class="btn btn-sm btn-outline-danger">Delete</a></th>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php include(SHARED_PATH . '/admin_footer.php');?>