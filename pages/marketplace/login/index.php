<?php require_once('../../../private/initialize.php');
$page_title = "Signup/Login";
$page = "Market Place";


?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<?php //include('../search.php') ?>

<section class="section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="">Rike Research Marketplace</h4>
                        <div class="btn-group">
                            <a href="<?php echo url_for_root('/pages/marketplace/signup') ?>"
                                class="btn btn-outline-success">Signup</a>
                            <a href="<?php echo url_for_root('/pages/marketplace/login') ?>"
                                class=" btn btn-success">Login</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>

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

                            <button type="submit" class="my-3 btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(SHARED_PATH . '/main-footer.php'); ?>