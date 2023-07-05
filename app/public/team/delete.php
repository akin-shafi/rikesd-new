<?php 
    require_once('../../../private/initialize.php');



if (!isset($_GET['id'])) {
  redirect_to(url_for('public/team/index.php'));
}
$id = $_GET['id'];
$team = Team::find_by_id($id);
if ($team == false) {
  redirect_to(url_for('public/team/index.php'));
}

if (is_post_request()) {

  // logfile
  log_action('Delete team', "id: {$team->id}, Deleted by {$team->fullname}", "team");

  // Delete team
  $result = $team->deleted($id);
  $session->message('The memeber was deleted successfully.');
  redirect_to(url_for('public/team/index.php'));
} else {
  // Display form
}


$page = 'Team';
$page_title = 'Delete Member';
include(SHARED_PATH . '/admin_header.php'); 

?>

<!-- Datatables css -->
<link href="<?php echo url_for('assets/css/vendor/dataTables.bootstrap5.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo url_for('assets/css/vendor/responsive.bootstrap5.css') ?>" rel="stylesheet" type="text/css" />
    
    <div class="row">
         <div class="card text-center p-4">
            <!-- <h1>Delete company</h1> -->
            <p>Are you sure you want to delete this member?</p>
            <p class="item"><?php echo h($team->fullname); ?></p>

            <form action="<?php echo url_for('public/team/delete.php?id=' . h(u($id))); ?>" method="post">
              <div id="operations" class="btn-group">
                <input type="submit" name="commit" class="btn btn-sm btn-danger border-0" value="Yes" />
                <a href="<?php echo url_for('public/team/index.php'); ?>" class="btn btn-sm btn-dark">No</a>
              </div>
            </form>
          </div>
        
    </div>


<?php include(SHARED_PATH . '/admin_footer.php');?>


<!-- Datatables js -->
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>

<!-- Datatable Init js -->
<script src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>