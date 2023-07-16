<?php require_once('../private/initialize.php'); 
$page_title = "Available Funding Opportunities";

?>
<?php include(SHARED_PATH . '/main-header.php'); ?>
<?php include(SHARED_PATH . '/page-banner.php'); ?>
<style>
  .active{
    background-color: #fdd428  !important;
    /* border: 1px solid green  !important; */
    color: #000  !important;
  }
  .fab-nav .nav-link{
    text-transform: uppercase;
  }
</style>


  <section class="section bg-100 container-fluid">
    <div class="row"></div>
  </section>


    
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <input type="hidden" id="input" value="<?php echo url_for_root('/services/aim.php')?>">

    <?php include(SHARED_PATH . '/main-footer.php'); ?>
