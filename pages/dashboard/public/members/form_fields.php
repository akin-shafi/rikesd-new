<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="memberName" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?= $user->first_name ?? '' ?>" id="first_name"
                name="first_name" required>
        </div>
        <div class="col-md-6">
            <label for="memberName" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?= $user->last_name ?? '' ?>" id="last_name"
                name="last_name" required>
        </div>

    </div>
    <div class="row mb-3">
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="<?= $user->email ?? '' ?>" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-4">
            <label for="designation" class="form-label">Designation</label>
            <select class="form-select" id="designation" name="designation" required>
                <option value="" disabled selected>Select designation</option>
                <?php foreach (Users::DESIGNATIONS as $key => $value) { ?>
                    <option value="<?php echo $key ?>" <?= $user->designation == $key ? 'selected' : '' ?>>
                        <?php echo $value ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="col-md-4">
            <label for="user_role" class="form-label">Access</label>
            <select class="form-select" id="user_role" name="user_role" required>
                <option value="" disabled selected>Select Role</option>
                <?php foreach (Users::USER_ROLE as $key => $value) { ?>
                    <option value="<?php echo $key ?>" <?= $user->user_role == $key ? 'selected' : '' ?>>
                        <?php echo $value ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="password" class="form-label">Temp Password</label>
            <input type="password" value="<?= $user->password ?? '' ?>" class="form-control" id="password"
                name="password">
        </div>
        <div class="col-md-6">
            <label for="confirm_password" class="form-label">Re-enter Password</label>
            <input type="password" value="<?= $user->confirm_password ?? '' ?>" class="form-control"
                id="confirm_password" name="confirm_password">
        </div>

    </div>

    <input type="hidden" name="company_id" value="<?= $companyInfo->id ?>">
    <button type="submit" class="btn btn-danger rounded-pill mb-3">Send Invitation</button>
</form>