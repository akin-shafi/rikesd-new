<?php require_once('../private/initialize.php');  
// require_login();
$page_title = "Blog - Read more";

$id = $_GET['id'] ?? "";
$blog = Blog::find_by_id($id);
$categories = Category::find_all();

$thumbnail = !empty($bold->thumbnail) ? url_for('/admin/uploads/thumbs/' . $bold->thumbnail) :  url_for('/admin/uploads/thumbs/image150.png');
$main = !empty($bold->main) ? url_for('/admin/uploads/thumbs/' . $bold->main) :  url_for('/admin/uploads/thumbs/image150.png');
// $main = $blog->main === "" ? "https://via.placeholder.com/150" : url_for('admin/uploads/'.$bold->main);
  
?>
  <!-- Navbar -->
  <?php include ("header.php") ?>
  
  <section class="w-100 mt-5">
    <div class="banner ">
        <img src="https://images.unsplash.com/photo-1606146485652-75b352ce408a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Banner Image" class="banner-image">
        <div class="banner-text">
            <h1 class="blog-title">Article</h1>
            <div><a class="text-light text-decoration-underline" href="<?php echo url_for_root('blog/') ?>">Blog</a></div>
            <?php if(isset($loggedInAdmin->id)){?>
              <div><a class="text-light text-decoration-underline" href="<?php echo url_for('public/explore/') ?>">Edit Blog</a></div>
            <?php }?>
        </div>
    </div>
    <main class="container mt-4 ">
      <!-- <div class="container mt-4"> -->
        <div class="row">
          <div class="col-lg-10 offset-md-1">
            <h2 class="mb-3"><?php echo $blog->title ?></h2>
            <p class="text-muted mb-2"><?php echo date("M d, Y", strtotime($blog->created_at)) ?></p>
            <!-- <img src="https://via.placeholder.com/600x400" class="img-fluid mb-4"> -->
            <div class="mb-3">
              <?php echo $blog->description ?>
            </div>
          </div>
        </div>
      <!-- </div> -->
    </main>
  </section>
  <?php include ("footer.php") ?>
 
</body>

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
<style>



.banner {
  position: relative;
  height: 200px; /* set the height of your banner */
}

.banner-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* make sure the image covers the entire area */
  opacity: 0.7; /* adjust opacity to your liking */
}

.banner-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}

.banner-text h1 {
  font-weight: bold;
  margin-bottom: 0;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* add a subtle text shadow for contrast */

  text-align: center;
  font-size: 2.5em;
}

@media only screen and (max-width: 768px) {
  .banner-text  h1 {
    font-size: 2em;
  }
}

@media only screen and (max-width: 576px) {
  .banner-text  h1 {
    font-size: 1.5em;
  }
}

</style>
</html>
