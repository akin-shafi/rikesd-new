<?php require_once('../../private/initialize.php');
$page_title = "Edit Member";
$page = $companyName;



$id = $_GET['id'] ?? $loggedInAdmin->id;
$user = Users::find_by_id($id);
if ($user == false) {
    redirect_to(url_for('/public/members/'));
}

if (is_post_request()) {

    // Save record using post parameters
    $args = $_POST;
    $user->merge_attributes($args);
    $result = $user->save();

    if ($result === true) {

        // logfile
        log_action('Edited member', "whose id is : {$user->id}, Edited by {$loggedInAdmin->full_name()}", "user");

        $session->message('The member profile was updated successfully.');
        redirect_to(url_for('/public/members/'));
    } else {
        // show errors
    }
} else {

    // display the form
}

include(SHARED_PATH . '/admin_header.php'); ?>


<div class="container">
    <h4 class="mb-4 text-uppercase">Invite New Members</h4>

    <?php if (!empty($errors)): ?>
        <?php echo display_errors($errors); ?>
    <?php endif; ?>


    <?php include('form_fields.php') ?>

</div>
<?php include(SHARED_PATH . '/admin_footer.php'); ?>