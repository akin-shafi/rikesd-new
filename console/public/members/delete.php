<?php require_once('../../private/initialize.php');
$page_title = "Delete";
$page = 'Member';


require_login();

if (!isset($_GET['id'])) {
    redirect_to(url_for('/public/members/'));
}
$id = $_GET['id'];
$user = Users::find_by_id($id);
if ($user == false) {
    redirect_to(url_for('/public/members/'));
}

if (is_post_request()) {
    // logfile
    log_action('Delete user', "id: {$user->id}, Deleted by {$loggedInAdmin->full_name()}", "user");

    // Delete user
    $result = $user->deleted($id);
    $session->message('The member was deleted successfully.');
    redirect_to(url_for('/public/members/'));
} else {
    // Display form
}


include(SHARED_PATH . '/admin_header.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h3>
            <?php echo $page_title . " " . $page; ?>
        </h3>

    </section>

    <div class="col-lg-12 ">
        <div id="custom-alerts" style="display:none;">
            <div class="alert alert-dismissable">
                <div class="custom-msg"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="card text-center ">
                    <div class="" style="padding: 10px">
                        <!-- <h1>Delete supplier</h1> -->
                        <p>Are you sure you want to delete this member
                            <b>
                                <?php echo Users::find_by_id($id)->full_name(); ?>
                            </b>?
                        </p>
                        <p class="item">
                            <?php //echo h($user->full_name()); ?>
                        </p>

                        <form action="<?php echo url_for('/public/members/delete?id=' . h(u($id))); ?>" method="post">
                            <div id="operations" class="btn-group">
                                <input type="submit" name="commit" class="btn btn-danger border-0" value="Yes" />
                                <a href="<?php echo url_for('/public/members/'); ?>" class="btn btn-info">No</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>