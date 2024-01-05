<?php require_once('../../private/initialize.php');
$page_title = "Members";
$page = $companyName;


$errors = [];

// $user = Users::find_all();

if (is_post_request()):
    // $args = $_POST ?? '';
    // $user = new Users($args);
    // $userResult = $user->save();

    $rand = rand(100, 999);
    $otp = str_pad(1, 3, "0", STR_PAD_LEFT) . $rand;

    $userData = $_POST ?? "";
    $newData = [
        'otp' => $otp,
    ];
    $mergedData = array_merge($userData, $newData);
    $user = new Users($mergedData);
    $output = $user->save();


    if ($output == true):
        log_action("Member Invited by ", $loggedInAdmin->full_name());
        $session->message('Member invited successfully!');
        redirect_to(url_for('/public/members/'));
    else:
        $errors[] = $user->errors;
    endif;

else:
    $user = new Users();
endif;


include(SHARED_PATH . '/admin_header.php'); ?>


<div class="container">
    <h4 class="mb-4 text-uppercase">Invite New Members</h4>

    <?php if (!empty($errors)): ?>
        <?php echo display_errors($errors); ?>
    <?php endif; ?>


    <?php include('form_fields.php') ?>

</div>
<?php include(SHARED_PATH . '/admin_footer.php'); ?>