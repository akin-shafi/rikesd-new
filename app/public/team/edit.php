<?php require_once('../../../private/initialize.php');

$page = 'Team';
$page_title = 'Edit Team';
include(SHARED_PATH . '/admin_header.php');
// error_reporting(0);
$errors = [];
$id = $_GET['id'];

if ($id == '')
    redirect_to(url_for('public/team'));

$team = Team::find_by_id($id);

$main = !empty($team->photo) ? url_for_root('assets/img/leaders/' . $team->photo) : url_for_root('uploads/thumbs/image150.png');

if (is_post_request()):
    $teamArgs = $_POST['team'] ?? '';
    $teamArgs['created_at'] = date('Y-m-d');

    $msg = "";

    $mainFile = $_FILES["photo"]["name"];
    $mainTemp = $_FILES["photo"]["tmp_name"];

    $main_target_file = 'photo_' . date("dmYhis") . basename($mainFile);
    $mainFolder = '../../../assets/img/leaders/' . $main_target_file;

    // pre_r($mainFolder);
    if ($thumbFile = $_FILES["photo"]["name"] != null) {
        if (file_exists($team->photo)) {
            unlink('../../../assets/img/leaders/' . $team->photo);
        }
        $teamArgs['photo'] = $main_target_file;
        if (move_uploaded_file($mainTemp, $mainFolder)) {
            $msg = "File Uploaded Successfully...";
        } else {
            $errors[] = "Failed to Upload File...";
        }
    }

    $team->merge_attributes($teamArgs);
    // pre_r($team);
    $team->save();

    if (empty($team->errors)):
        log_action('team updated', "{Admin} .", "team-edit");
        $session->message('team updated successfully!');
        $team->save();
        redirect_to(url_for('public/team/'));
    else:
        $errors[] = $team->errors;
    endif;

endif;


?>
<link rel="stylesheet" href="<?php echo url_for('assets/editor/froala_editor.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/froala_style.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/code_view.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/image_manager.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/image.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/table.css') ?>">
<link rel="stylesheet" href="<?php echo url_for('assets/editor/plugins/video.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


<div class="card shadow">
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="mb-3">
                <label for="category" class="form-label">Board:</label>
                <select id="category" name="team[category]" class="form-control" required>
                    <option value="">select </option>
                    <?php foreach (TeamCategory::find_by_undeleted() as $key => $value) { ?>
                        <option value="<?= $value->id ?>" <?= ($team->category == $value->id) ? 'selected' : '' ?>><?= $value->name ?></option>
                    <?php } ?>
                </select>
                <!-- <input type="number" id="category" name="category" class="form-control" required> -->
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name:</label>
                <input type="text" id="fullname" value="<?= $team->fullname ?>" name="team[fullname]"
                    class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select id="gender" name="team[gender]" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="personality" class="form-label">Personality:</label>
                <input type="text" id="personality" value="<?= $team->personality ?>" name="team[personality]"
                    class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position:</label>
                <input type="text" id="position" value="<?= $team->position ?>" name="team[position]"
                    class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="head" class="form-label">Chairman of Board:</label>
                <select id="head" name="team[head]" class="form-control" required>
                    <option value="0">False </option>
                    <option value="1">True </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" value="<?= $team->email ?>" name="team[email]" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" id="phone" value="<?= $team->phone ?>" name="team[phone]" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label for="brief_biography" class="form-label">Brief Biography:</label>
                <textarea name="team[brief_biography]" class="form-control" style="height: 500px;" id="editor" rows="5"
                    placeholder="Enter Brief Biography"><?= $team->brief_biography ?></textarea>
            </div>

            <div class="row d-flex align-items-center">

                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <p>
                        <img src="<?php echo $main ?>" class="img-thumb" width="90" alt="main">
                    </p>
                    <div class="input-group">
                        <input type="file" class="form-control" name="photo" id="main">
                        <label class="input-group-text" for="main">Header image</label>
                    </div>
                </div>
            </div>




            <div class="mb-1">
                <button type="submit" class="btn btn-primary d-block ms-auto">Submit</button>
            </div>
        </div>
    </form>
</div>


<?php include(SHARED_PATH . '/admin_footer.php'); ?>
<!-- Datatables js -->
<script src="<?php echo url_for('assets/js/vendor/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.bootstrap5.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo url_for('assets/js/vendor/responsive.bootstrap5.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>


<script type="text/javascript" src="<?php echo url_for('assets/editor/js/froala_editor.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/align.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/code_beautifier.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/code_view.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/draggable.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/image.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/image_manager.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/link.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/lists.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/paragraph_format.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/paragraph_style.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/table.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/video.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/url.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url_for('assets/editor/js/plugins/entities.min.js') ?>"></script>


<!-- Datatable Init js -->
<script type="text/javascript" src="<?php echo url_for('assets/js/pages/demo.datatable-init.js') ?>"></script>



<script>
    (function () {
        const editorInstance = new FroalaEditor('#editor', {
            enter: FroalaEditor.ENTER_P,
            placeholderText: null,
            imageUploadURL: 'upload_image.php',
            events: {
                initialized: function () {
                    const editor = this
                    this.el.closest('form').addEventListener('submit', function (e) {
                        console.log(editor.$oel.val())
                        // e.preventDefault()
                    })
                }
            }
        })
    })()
</script>

</html>