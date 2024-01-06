<?php require_once('../../../private/initialize.php');
$page_title = "Signup/Login";
$page = "Market Place";


?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<?php //include('../search.php') ?>

<section class="section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="">R.I.K.E Marketplace Signup</h4>
                        <div class="btn-group">
                            <a href="<?php echo url_for_root('/pages/marketplace/signup') ?>"
                                class="btn btn-success">Signup</a>
                            <a href="<?php echo url_for_root('/pages/marketplace/login') ?>"
                                class=" btn btn-outline-success">Login</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" required>
                                    <option value="researcher">Researcher</option>
                                    <option value="institute">Research Institute</option>
                                </select>
                            </div>
                            <!-- Addional Fields for Research Institute -->
                            <div id="researcherFields">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Enter your full name" required>
                                </div>
                            </div>

                            <div id="instituteFields" style="display:none;">
                                <div class="form-group">
                                    <label for="institutionName">Name of Institution</label>
                                    <input type="text" class="form-control" id="institutionName"
                                        placeholder="Enter the name of your institution">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address"
                                        placeholder="Enter the address">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" placeholder="Enter your country">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword"
                                    placeholder="Confirm your password" required>
                            </div>
                            <button type="submit" class="my-3 btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(SHARED_PATH . '/main-footer.php'); ?>

<script>
    document.getElementById('category').addEventListener('change', function () {
        var category = this.value;

        if (category === 'researcher') {
            document.getElementById('researcherFields').style.display = 'block';
            document.getElementById('instituteFields').style.display = 'none';
        } else if (category === 'institute') {
            document.getElementById('researcherFields').style.display = 'none';
            document.getElementById('instituteFields').style.display = 'block';
        }
    });
</script>