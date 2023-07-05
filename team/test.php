<?php require_once('../private/initialize.php'); 
$page_title = "Our Teams";
$boardList = ["Board of Governors", "Board of Experts", "Board of Advisors", "Board of Financial Trustees", "Executive Management Team"];

// Get the tab ID from the URL parameter
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
?>

<?php include(SHARED_PATH . '/main-header.php'); ?>
    
<section class="section bg-100">
    <div class="container mt-1">
        <div class="fancy-tab p-0">
            <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
            <!-- <ul class="nav nav-pills mb-3" id="myTab" role="tablist"> -->
                <?php foreach ($boardList as $index => $board): ?>
                    <li class="nav-item " >
                        <a class="nav-link <?= $index == $activeTab ? 'active' : '' ?>" onclick="changeTab('', <?= $index ?>)"><?= $board ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="content">
            <!-- Content for the selected tab will be loaded here -->
            <!-- <h3><?php //echo $boardList[$activeTab]; ?></h3> -->

            <div class="container">
                <div class="text-center">
                    <div class="row">
                    <div class="col-sm-6 col-lg-4  mt-4  ">
                        <div class="card h-100"><img class="card-img-top" src="../assets/img/portrait-3.jpg" alt="Reenal Scott" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                            <h5 data-zanim-xs='{"delay":0}'>Reenal Scott</h5>
                            </div>
                            <div class="overflow-hidden">
                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising Consultant</h6>
                            </div>
                            <div class="overflow-hidden">
                            <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </div>
    </div>

</section>
    <input type="hidden" id="input" value="<?php echo url_for_root('/team/index.php?')?>">


    <?php include(SHARED_PATH . '/main-footer.php'); ?>
    
    
    <script>
        const url = $('#input').val();
        function changeTab(url, tabId) {
            // Reload the page with the selected tab ID as a URL parameter
            window.location.href = url + `?tab=${tabId}`;
        }
    </script>
