<?php require_once('../../private/initialize.php');
$page_title = "Members";
$page = $companyName;

include(SHARED_PATH . '/admin_header.php'); ?>


<div class="d-flex justify-content-between">
    <h3>Members</h3>
    <div>
        <a href="<?php echo url_for('/public/members/add') ?>" class="btn btn-danger rounded-pill mb-3"><i
                class="mdi mdi-plus"></i> invite
            member</a>
    </div>
</div>

<!-- <div class="alert alert-danger"> -->
<?php echo display_session_message(); ?>
<!-- </div> -->
<div class="responsive">
    <table class="table table-striped table-centered mb-0">
        <thead>
            <tr>
                <th>User</th>
                <th>Email.</th>
                <th>Designation</th>
                <th>Access</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (Users::find_by_company_id($loggedInAdmin->company_id) as $key => $value) { ?>

                <tr>
                    <td class="table-user">
                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                        <?= $value->full_name() ?>
                    </td>
                    <td>
                        <?= $value->email ?>
                    </td>
                    <td>
                        <?= Users::DESIGNATIONS[$value->designation]; ?>
                    </td>
                    <td>
                        <?= Users::USER_ROLE[$value->user_role]; ?>
                    </td>
                    <td class="table-action">
                        <?php if ($value->user_role != 1 || $value->id != $loggedInAdmin->id) { ?>
                            <a href="<?php echo url_for('public/members/edit?id=') . $value->id ?>" class="action-icon"> <i
                                    class="mdi mdi-pencil"></i></a>
                            <a href="<?php echo url_for('public/members/delete?id=') . $value->id ?>" class="action-icon"> <i
                                    class="mdi mdi-delete"></i></a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



<?php include(SHARED_PATH . '/admin_footer.php'); ?>