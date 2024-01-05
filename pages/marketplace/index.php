<?php require_once('../../private/initialize.php');
$page_title = "Market Place";
$projects = Product::find_by_undeleted(['order' => 'ASC']);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;

?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php
$items = [
  // 1 => [
  //   'item' => 'Profiles',
  //   'count' => 12,
  //   'icon' => 'fa-user',
  // ],
  2 => [
    'item' => 'Research outcome',
    'count' => 1,
    'icon' => 'fa-book-open',
  ],
  // 3 => [
  //   'item' => 'Projects',
  //   'count' => 3,
  //   'icon' => 'fa-box',
  // ],
  // 4 => [
  //   'item' => 'Datasets',
  //   'count' => 190,
  //   'icon' => 'fa-database',
  // ],
  5 => [
    'item' => 'Student theses',
    'count' => 1,
    'icon' => 'fa-graduation-cap',
  ],
  6 => [
    'item' => 'Equipment',
    'count' => 1,
    'icon' => 'fa-cog',
  ],
  7 => [
    'item' => 'Research Institutes',
    'count' => 1,
    'icon' => 'fa-search',
  ],
]
  ?>

<section class="container-fluid" id="advanced-search-form">
  <div class="w-100 search-panel py-5">
    <div class="sub-text">
      Welcome to the RikeSD research marketplace
    </div>


    <form class="row d-flex justify-content-center">

      <div class="col-7 ">
        <div class="row">
          <div class="col-lg-8 col-12 mb-2">
            <input id="topic-search" class="form-control" type="search" placeholder="Search by Topic"
              aria-label="Search by Topic">
          </div>
          <div class="col-lg-4 col-12 mb-2">
            <button class="btn btn-success btn-sm w-100" type="submit">Search</button>
          </div>
        </div>
      </div>

    </form>
  </div>
</section>


<section class="section py-4 bg-100 container-fluid  border-bottom">
  <div class="row d-flex justify-content-center">
    <?php foreach ($items as $key => $value): ?>
      <a href="<?php echo url_for_root('/pages/marketplace/') . str_replace(' ', '-', strtolower($value['item'])); ?>"
        class="col-md-6 col-xl-2">
        <div class="card my-1">
          <div class="card-body p-1">
            <div class="row align-items-center ">
              <div class="col-12  text-center">
                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">
                  <i class="fa <?php echo $value['icon'] ?? '' ?> fa-2x"></i>
                  <sup class="bg-success px-2 text-light rounded">
                    <?php echo $value['count'] ?>
                  </sup>
                </h5>
                <h6 class="my-2 py-1">
                  <?php echo $value['item'] ?>
                </h6>

              </div>
            </div> <!-- end row-->
          </div> <!-- end card-body -->
        </div> <!-- end card -->
      </a> <!-- end col -->
    <?php endforeach ?>
  </div>

</section>


<section class="pt-2">
  <div class="container pb-5">
    <div class="">
      <h5>Explore RikeSD MarketPlace's Research Ecosystem</h5>
      <p>RikeSD MarketPlace is at the forefront of catalyzing impactful research that transforms industries and enhances
        societal well-being. Through our comprehensive portal, you can delve into a wealth of information encompassing
        all research endeavors within the RikeSD community, spanning from funding details to published journal articles.
      </p>

      <p>Utilize the search functionality above to navigate content tailored to your interests. Whether you prefer a
        broad exploration or seek specific information on researchers, expertise areas, organizational units,
        collaborations, projects, and outputs, our portal provides a seamless experience. Uncover the intricate
        connections within our dynamic research landscape.</p>

      <p>Are you eager to collaborate with us? RikeSD MarketPlace empowers organizations to innovate for a competitive
        advantage. This may involve research collaborations, consultations, business incubation, or engagement with our
        students and facilities. Leverage our research portal to identify experts pertinent to your needs or explore
        further details on our business pages.</p>

      <p>Embark on a journey of discovery and collaboration within the thriving research ecosystem of RikeSD
        MarketPlace.</p>

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