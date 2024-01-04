<?php require_once('../../../private/initialize.php');
$page_title = "Research Outcome";
$projects = Product::find_by_undeleted(['order' => 'ASC']);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;

?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<link href="<?php //echo url_for_root('assets/css/application.css ') ?>" rel="stylesheet" />

<?php include('../search.php') ?>

<div class="container" style="min-height: 1651.33px;">
  <?php include('aside-left.php') ?>
</div>








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