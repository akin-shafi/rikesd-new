<?php require_once('../../../../private/initialize.php'); 
$id =  $_POST['id'] ?? 1;
$team = Team::find_by_id($id);
?>
	<input type="hidden" name="id" id="user_id" value="<?php echo $team->id; ?>">
	<div class="row">
		
        <div class="mb-3 col-12">
            <label for="firstname" class="form-label">Fullname</label>
            <input class="form-control" name="first_name"  type="text" id="firstname" required="" value="<?php echo $team->fullname ?>" placeholder="Michael">
        </div>
        

        <div class="mb-3 col-12">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" name="email" type="email" id="emailaddress" required="" value="<?php echo $team->email ?>" placeholder="micheal@deo.com">
        </div>

        <div class="mb-3 col-lg-6 col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" name="phone" type="phone" required="" id="phone" value="<?php echo $team->phone ?>" placeholder="Enter your phone">
        </div>
       
	</div>

<?php ?>
	