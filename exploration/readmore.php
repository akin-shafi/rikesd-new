<?php require_once('../private/initialize.php');
// require_login();
$page_title = "Exploration - Read more";

$id = $_GET['id'] ?? "";
$link = $_GET['link'] ?? "";
$blog = Blog::find_by_link($link) ?? Blog::find_by_id($id);
// pre_r($link);


$related = Blog::find_by_category(['category_id' => $blog->category_id, 'limit' => 5]);
// $main = !empty($blog->main) ? url_for_root('uploads/' . $blog->main) :  url_for_root('uploads/thumbs/image150.png');
$main = !empty($blog->main) ? url_for_root('uploads/' . $blog->main) : url_for_root('uploads/thumbs/image150.png');

// pre_r($blog->main);
?>
<!-- Navbar -->
<?php include(SHARED_PATH . '/main-header.php'); ?>
<link href="css/blog.css" rel="stylesheet">

<section class="section w-100 bg-half-100">

  <div class="container mt-lg-1 mt-5 px-5">

    <div class="row">
      <div class="col-12 py-lg-1 py-4 d-flex justify-content-between">
        <div class="">
          <a href="<?php echo url_for_root("/exploration") ?>" class="btn btn-sm btn-outline-primary">
            << Back</a>
        </div>

        <div class="social-share ">
          <button class="btn btn-sm  py-0">Share <iconify-icon icon="uil:share"></iconify-icon></button>
          <button class="btn btn-sm btn-outline-primary py-0 share-button" data-platform="facebook">
            <iconify-icon icon="brandico:facebook"></iconify-icon>
          </button>
          <button class="btn btn-sm btn-outline-primary py-0 share-button" data-platform="twitter">
            <iconify-icon icon="entypo-social:twitter"></iconify-icon>
          </button>
          <button class="btn btn-sm btn-outline-primary py-0 share-button" data-platform="instagram">
            <iconify-icon icon="fontisto:instagram"></iconify-icon>
          </button>
        </div>
      </div>
      <!-- Article Section (full width on small screens) -->
      <div class="col-12 col-lg-9 card">
        <h4 class="mb-1 pt-2 border-bottom">
          <?php echo $blog->title ?>
        </h4>
        <div class="text-muted mb-2"><small>
            <?php echo date("M d, Y", strtotime($blog->created_at)) ?>
          </small></div>
        <div class="p-1">
          <img src="<?php echo $main ?>" class="w-100  rounded featured-img" alt="Banner Image" alt="Blog Image">
        </div>

        <div class="blog-content py-4">
          <p>
            <?php echo $blog->description ?>
          </p>
        </div>
      </div>

      <div class="col-12 col-lg-3 mb-4 mb-lg-0">
        <div class="px-4 border card" style="overflow-y: auto; max-height: 700px;">
          <h4 class="pt-2 border-bottom">Related Article</h4>
          <?php foreach ($related as $key => $value) {
            $category = Category::find_by_id($value->category_id)->name;
            $main = !empty($value->main) ? url_for_root('uploads/' . $value->main) : url_for_root('uploads/thumbs/image150.png');

            ?>
            <?php if ($value->id != $blog->id) { ?>
              <div class="row mb-4 pt-1 pb-4 " style="border-bottom: 1px solid #a49f9f9c">
                <div class="col-lg-12 col-md-3 order-md-1 mb-3 mb-md-0">
                  <img src="<?php echo $main ?>" class="img-fluid rounded shadow-4-strong">
                </div>
                <div class="col-lg-12 col-md-9 order-md-2">
                  <a class="text-dark title-link" href="<?php echo url_for_root('readmore.php?link=' . $blog->link) ?>">
                    <h6 class="mt-2 text-truncate header">
                      <?php echo $value->title ?>
                    </h6>
                    <p class="text-muted"><small>
                        <?php echo date("M d, Y", strtotime($value->created_at)) ?>
                      </small></p>
                    <p class="line-clamp">
                      <?php echo $value->summary ?>
                    </p>
                  </a>
                  <a class="category-label  text-muted">
                    <?php echo $category ?>
                  </a>
                  <small class="ms-1 text-muted">3 min read</small>
                </div>
              </div>
            <?php } ?>
          <?php } ?>
        </div>

      </div>
    </div>

  </div>
</section>
<?php include(SHARED_PATH . '/main-footer.php'); ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script>
  // Get all share buttons
  const shareButtons = document.querySelectorAll('.share-button');

  // Function to open sharing links
  function shareArticle(platform) {
    const articleUrl = window.location.href;
    let shareUrl;

    switch (platform) {
      case 'facebook':
        shareUrl = `https://www.facebook.com/sharer.php?u=${encodeURIComponent(articleUrl)}`;
        break;
      case 'twitter':
        shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(articleUrl)}`;
        break;
      case 'instagram':
        // Replace with your Instagram sharing logic if available
        alert("Instagram sharing not available at the moment.");
        return;
    }

    window.open(shareUrl, '_blank');
  }

  // Attach click event to each share button
  shareButtons.forEach(button => {
    button.addEventListener('click', event => {
      const platform = event.target.getAttribute('data-platform');
      shareArticle(platform);
    });
  });

</script>