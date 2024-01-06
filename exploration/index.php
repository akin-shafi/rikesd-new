<?php require_once('../private/initialize.php');
$page_title = "Home";
$featuredPost = Blog::find_featured_post(1);
$featuredThumbnail = !empty($featuredPost->thumbnail) ? url_for_root('uploads/' . $featuredPost->thumbnail) : url_for_root('uploads/thumbs/image150.png');


?>
<?php include(SHARED_PATH . '/main-header.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="css/blog.css" rel="stylesheet">

<section class="section bg-half-100" style="padding-top: 7.5rem !important;padding-bottom: 7.5rem !important;">

  <?php if (!empty($featuredPost)) : ?>
    <div class="container mt-1 px-1">
      <div class="row">
        <div class="col-md-6 featured-post order-md-1 order-2  d-flex justify-content align-items-center">
          <div class="p-5">
            <div class="card-body">
              <h5 class="card-title title truncate-text-2">
                <?php echo $featuredPost->title ?>
              </h5>
              <p class="card-text body truncate-text">
                <?php echo $featuredPost->summary ?>
              </p>
              <p class="card-text"><small class="text-muted">Posted on
                  <?php echo date('M d, Y', strtotime($featuredPost->created_at)) ?>
                </small></p>
              <div>
                <a href="readmore.php?link=<?php echo $featuredPost->link ?>" class="btn btn-sm btn-light">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-0 order-md-2 order-1">
          <img src="<?php echo $featuredThumbnail ?>" class="w-100" height="450" alt="Banner Image">
        </div>
      </div>
    </div>
  <?php endif ?>


  <div class="container">
    <div class="row">

      <!-- Article Section (full width on small screens) -->
      <div class="col-12 col-lg-9">
        <h4 class="mb-4">Explore</h4>
        <div class="list-group d-flex flex-row overflow-auto py-2">
          <a href="#" class="list-group-item list-group-item-action active rounded-pill" aria-current="true" data-id="All Articles">All</a>
          <?php foreach (Category::find_by_undeleted(['order' => "ASC"]) as $key => $value) { ?>
            <a href="#" class="list-group-item list-group-item-action rounded-pill" data-id="<?php echo $value->id ?>">
              <?php echo $value->name . " (" . count(Blog::find_by_category(['category_id' => $value->id])) . ")" ?>
            </a>
          <?php } ?>
        </div>

        <div id="articleList" class="bg-white mt-3 pb-1 container">
          <!-- Article List will be appended here dynamically -->
        </div>
      </div>

      <div class="col-12 col-lg-3 mb-4 mb-lg-0">
        <div class="">
          <div class="card">
            <div class="card-body">
              <div class="card-title text-center border-bottom text-uppercase"><strong>Newsletter</strong></div>
              <p class="card-text" style="font-size:14px; text-align: justify;">Subscribe to our monthly newsletter to
                stay updated on the latest news and events.</p>
              <form>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                </div>
                <div class="">
                  <button type="submit" class="w-100 btn btn-primary rounded-pill">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="mt-5">
          <div class="card">
            <div class="card-body">
              <div class="card-title  text-center border-bottom text-uppercase">
                <strong>Follow us on social media</strong>
              </div>
              <p class="card-text" style="font-size:14px; text-decoration: justify; text-align: justify;">
                Stay connected with us on social media and be the first to know about our latest news and updates.
              </p>
              <div class="d-flex justify-content-between border-top pt-2">
                <a href="https://www.instagram.com/mytonote/" class="btn btn-sm "><i class="fab fa-instagram"></i> </a>
                <a href="https://twitter.com/gettonote?s=11" class="btn btn-sm "><i class="fab fa-twitter"></i> </a>
                <a href="https://www.linkedin.com/company/gettonote" class="btn "><i class="fab fa-linkedin"></i> </a>


              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="px-4 border card d-none">
        <h4 class="">Related Article</h4>
        <div class="row mb-4 py-4 " style="border-bottom: 1px solid #a49f9f9c">
          <div class="col-lg-12 col-md-3 order-md-1 mb-3 mb-md-0">
            <img src="/tonote-landing/uploads/thumb_09052023100450sign.jpg" class="img-fluid rounded shadow-4-strong">
          </div>
          <div class="col-lg-12 col-md-9 order-md-2">
            <a class="text-dark title-link" href="readmore.php?link=21">
              <h6 class="mt-2 text-truncate header">Things to note when notarizing a document</h6>
              <p class="text-muted"><small>9th May, 2023 09:31:am</small></p>
              <p class="line-clamp">It's important to note that the specific requirements for notarizing a document can
                vary depending on the jurisdiction and the type of document being notarized. It's always a good idea to
                consult with a notary public or legal professional if you have</p>
            </a>
            <a class="category-label  text-muted">ThingsToNote</a>
            <small class="ms-1 text-muted">3 min read</small>
          </div>
        </div>

      </div>
    </div>
</section>
<?php include(SHARED_PATH . '/main-footer.php'); ?>

<!-- jQuery and Bootstrap 5.0.2 JS -->

<script>
  $(document).ready(function() {
    // Load the first page of articles
    loadArticles(1);

    // Handle category filter
    $('.list-group-item-action').on('click', function(e) {
      e.preventDefault();
      $(this).addClass('active').siblings().removeClass('active');
      const category = $(this).data('id');
      console.log(category)
      // Fetch articles by category using AJAX and update the list
      $.get('ajax/articles.php', {
        category
      }, function(data) {
        $('#articleList').html(data);
        $('#pagination').hide();
      });
    });
    // Handle pagination
    $(document).on('click', '#pagination .page-link', function(e) {
      e.preventDefault();
      const page = $(this).text();
      // Fetch articles by page using AJAX and update the list
      $.get('ajax/articles.php', {
        page
      }, function(data) {
        $('#articleList').html(data);
      });
    });
  });

  function loadArticles(page) {
    // Fetch articles using AJAX and update the list
    $.get('ajax/articles.php', {
      page
    }, function(data) {
      $('#articleList').html(data);
    });
  }
</script>

</body>

</html>