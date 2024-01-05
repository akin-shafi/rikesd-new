<?php require_once('../../../private/initialize.php');
$page_title = "Research Outcome";
$projects = Product::find_by_undeleted(['order' => 'ASC']);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;

?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<link href="<?php //echo url_for_root('assets/css/application.css ') 
?>" rel="stylesheet" />

<?php include('../search.php') ?>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3">
        <div class="mb-3">
          <a class="search-all-content text-secondary" style="font-size: 14px;"
            href="<?php echo url_for_root('/pages/marketplace/?search='); ?>">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Search in all content
          </a>
        </div>

        <?php include('aside-left.php') ?>
      </div>
      <div class="col-12 col-md-9">
        <p class="mb-3">
          <span class="border-end text-secondary px-2">1 - 50 out of 5,172 results</span>
          <a href="#!" class="fw-normal text-secondary border-end px-2">Status, start date (descending)</a>
          <a href="#!" class="fw-normal text-secondary px-2">Export search results</a>
        </p>

        <?php include('contents.php') ?>
      </div>
    </div>
  </div>
</section>





<nav aria-label="Result navigation">
  <ul class="pagination pagination-sm justify-content-center">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>
</section>



</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<?php include(SHARED_PATH . '/main-footer.php'); ?>

<script>
  document.getElementById('advanced-search-form').addEventListener('submit', function (event) {
    event.preventDefault();

    // Retrieve the search criteria from the form
    const topic = document.getElementById('topic-search').value;
    const areaOfInterest = document.getElementById('area-of-interest').value;
    const country = document.getElementById('country').value;

    // Perform search or any other actions based on the selected criteria
    // Example: Perform AJAX request or filter/search data based on the selected options
    console.log('Search Criteria:');
    console.log('Topic:', topic);
    console.log('Area of Interest:', areaOfInterest);
    console.log('Country:', country);
  });
</script>