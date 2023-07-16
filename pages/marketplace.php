<?php require_once('../private/initialize.php'); 
$page_title = "Market Place";
$projects = Product::find_by_undeleted(['order' => 'ASC']);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;

?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>
<style>
    /* Additional CSS for responsive search panel */
    @media (max-width: 767px) {
      .search-panel {
        justify-content: center;
      }
    }
    .line-clamp {
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      display: -webkit-box;
    }
    
    #advanced-search-form {
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .input-group {
      flex: 1;
      margin-right: 10px;
    }

    .form-control,
    .form-select {
      width: 100%;
      border: none;
      border-radius: 5px;
      padding: 8px;
    }

    .form-control:focus,
    .form-select:focus {
      outline: none;
      box-shadow: 0 0 5px #719ECE;
    }

    .form-select option {
      padding: 8px;
    }

    


  </style>

<section class="section pt-4 bg-100 container-fluid">
    <div class="row">
      <div class="col-md-9 col-lg-12 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <h4 class="text-uppercase fs-0 fs-md-1 text-center">Explore</h4>
        <!-- Search panel (responsive for all screen sizes) -->
        <div class="row d-flex justify-content-center search-panel">
          <div class="col-12 col-md-9">
          <form id="advanced-search-form" class="d-flex">
            <div class="input-group me-2">
              <input id="topic-search" class="form-control" type="search" placeholder="Search by Topic" aria-label="Search by Topic">
            </div>

            <div class="input-group me-2">
              <select id="area-of-interest" class="form-select select2">
                <option value="" selected disabled>Select Area of Interest</option>
                <option value="field1">Field 1</option>
                <option value="field2">Field 2</option>
                <!-- Populate the dropdown with more than 30 professional fields -->
                <!-- Add more options as needed -->
              </select>
            </div>

            <div class="input-group me-2">
              <select id="country" class="form-select select2">
                <option value="" selected disabled>Select Country</option>
                <!-- Populate the dropdown with countries categorized by continent -->
                <optgroup label="Africa">
                  <option value="country1">Country 1</option>
                  <option value="country2">Country 2</option>
                  <!-- Add more African countries as needed -->
                </optgroup>
                <optgroup label="Asia">
                  <option value="country3">Country 3</option>
                  <option value="country4">Country 4</option>
                  <!-- Add more Asian countries as needed -->
                </optgroup>
                <!-- Add optgroups for other continents with their respective countries -->
              </select>
            </div>

            <button class="btn btn-primary btn-sm border-2  ms-auto my-3 my-lg-0" type="submit">Search</button>
          </form>

          </div>
        </div>
        <div class="card mt-5" data-zanim-xs='{"delay":0.1,"duration":1}'>
          <div class="card-body p-md-5" id="formbody">
            <div id="content">
              <!-- Sample product cards -->
              <div class="row">
              <?php foreach ($projects as $value) { ?>
                <div class="col-md-4 my-4">
                  <div class="card">
                    <img src="<?php echo url_for_root('assets/img/product/'.  $value->image )?>" width="200" height="250" class="card-img-top" alt="Product 1">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $value->project_title ?></h5>
                      <p class="card-text line-clamp text-justify ">
                        <?php echo $value->description ?>
                      </p>
                      <div class="r">
                        <a href="#" class="btn btn-primary">Explore</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              

               

                <!-- Add more product cards here -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  


    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include(SHARED_PATH . '/main-footer.php'); ?>

    <script>
       document.getElementById('advanced-search-form').addEventListener('submit', function(event) {
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