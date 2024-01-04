<?php require_once('../../../../private/initialize.php'); 
$id =  $_POST['id'] ?? 1;
$team = Team::find_by_id($id);
// pre_r($team);
?>
	<input type="hidden" name="id" id="user_id" value="<?php echo $team->id ?? '' ?>">
	<div class="row">
		
        <div class="mb-3 col-12">
            <label for="fullname" class="form-label">Fullname</label>
            <input class="form-control" name="fullname"  type="text" id="fullname" required="" value="<?php echo $team->fullname ?? '' ?>" placeholder="Michael">
        </div>
        

        <div class="mb-3 col-12">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" name="email" type="email" id="emailaddress" required="" value="<?php echo $team->email ?? '' ?>" placeholder="micheal@deo.com">
        </div>

        <div class="mb-3 col-lg-6 col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" name="phone" type="phone" required="" id="phone" value="<?php echo $team->phone ?? '' ?>" placeholder="Enter your phone">
        </div>

        <div class="mb-3 col-lg-6 col-md-6">
            <label for="position" class="form-label">position</label>
            <input class="form-control" name="position" type="position" required="" id="position" value="<?php echo $team->position ?? '' ?>" placeholder="Enter your position">
        </div>

        <div class="mb-3 col-lg-12 col-md-12">
            <label for="brief_biography" class="form-label">Brief Biography</label>
            <textarea class="form-control" name="brief_biography"  required="" id="brief_biography" placeholder="Enter your Briography"><?php echo $team->brief_biography ?? '' ?></textarea>
        </div>
       
	</div>

<?php ?>
	