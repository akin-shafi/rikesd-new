<?php require_once('../private/initialize.php'); 
$page_title = "Our Teams";
$boardList = TeamCategory::find_by_undeleted(['order' => 'ASC']);
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$teams = Team::find_by_category([
    'category' => $activeTab, 'nda_status' => 1, 'head' => 1
]);
$members = Team::find_by_category(['category' => $activeTab, 'nda_status' => 1, 'head' => 0]);
?>
<style>
.line-clamp {
    -webkit-line-clamp: 4 !important;
    -webkit-box-orient: vertical  !important;
    overflow: hidden  !important;
    display: -webkit-box;
}
@media(min-width: 768px){
    .sub-img{
        width: 318px !important;
        height: 200px !important;
    }
}
    
</style>
<?php include(SHARED_PATH . '/main-header.php'); ?>
    
<section class="section bg-100">
    <div class="container mt-1">
        <div class="fancy-tab p-0">
            <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
            <!-- <ul class="nav nav-pills mb-3" id="myTab" role="tablist"> -->
                <?php foreach ($boardList as $index => $board): ?>
                    <li class="nav-item " >
                        <a class="nav-link <?= $board->id == $activeTab ? 'active' : '' ?>" onclick="changeTab('', <?= $board->id ?>)"><?= $board->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="content">
            <div class="container">
                <div class="text-center">
                    <div class="row mt-4">
                    
                    <?php foreach ($teams as $key => $value): ?>
                      <div class="col-sm-6 col-lg-3    ">
                          <div class="card h-100">
                                <?php if (empty($value->photo) && $value->gender == 'male'): ?>
                                    <img class="card-img-top img-fluid" src="<?php echo url_for_root('assets/img/leaders/profile-male.jpg') ?>" alt="<?php echo $value->fullname ?>" />
                                <?php elseif (!empty($value->photo) && $value->gender == 'female'): ?>
                                    <img class="card-img-top img-fluid" src="<?php echo url_for_root('assets/img/leaders/profile-woman-1.jpg') ?>" alt="<?php echo $value->fullname ?>" />
                                <?php else: ?>
                                    <img class="card-img-top img-fluid" src="<?php echo url_for_root('assets/img/leaders/'). $value->photo; ?>" alt="<?php echo $value->fullname ?>" />
                                <?php endif; ?>
                            
                                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                    <div class="overflow-hidden">
                                        <h5 data-zanim-xs='{"delay":0}'><?php echo $value->fullname ?></h5>
                                       
                                    </div>
                                    
                                    <div class="overflow-hidden ">
                                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'><?php echo $value->personality ?></h6>
                                    </div>
                                    <div class="overflow-hidden border-top border-bottom">
                                        <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'><?php echo $value->position ?></h6>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="py-3 mb-0 line-clamp" data-zanim-xs='{"delay":0.2}'>
                                            <?php echo $value->brief_biography ?>
                                        </p>
                                    </div>
                                    <div class="btn-group mt-2">
                                        <a href="<?php echo url_for_root('team/profile?id='. $value->id) ?>" class="btn btn-sm btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                      </div>
                    <?php endforeach; ?>
                    
                    
                      <div class="col-sm-6 col-lg-9 row">
                        <?php foreach ($members as $key => $value): ?>
                            <div class="col-sm-6 col-lg-3   mb-2  ">
                              <div  class="card">
                                <?php if (empty($value->photo) && $value->gender == 'male'): ?>
                                    <img class="card-img-top img-fluid sub-img" src="<?php echo url_for_root('assets/img/leaders/profile-male.jpg') ?>" alt="<?php echo $value->fullname ?>" />
                                <?php elseif (empty($value->photo) && $value->gender == 'female'): ?>
                                    <img class="card-img-top img-fluid sub-img" src="<?php echo url_for_root('assets/img/leaders/female.png') ?>" alt="<?php echo $value->fullname ?>" />
                                <?php else: ?>
                                    <img class="card-img-top img-fluid sub-img" src="<?php echo url_for_root('assets/img/leaders/'). $value->photo; ?>" alt="<?php echo $value->fullname ?>" />
                                <?php endif; ?>
                                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                        
                                        <div class="">
                                            <h6 data-zanim-xs='{"delay":0}'><?php echo $value->fullname ?></h6>
                                        </div>

                                        <div class=" ">
                                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'><?php echo $value->personality ?></h6>
                                        </div>

                                        <div class="my-2 border-top border-bottom">
                                            <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'><?php echo $value->position ?></h6>
                                        </div>

                                        <div class="">
                                            <a href="<?php echo url_for_root('team/profile?id='. $value->id) ?>" class="btn btn-sm btn-primary">Read more</a>
                                        </div>
                                    
                                        
                                        
                                    </div>
                                </div>
                            </div>
                       <?php endforeach; ?>
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

