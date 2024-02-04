<?php include('./header.php'); ?>
<section class="py-5">
    <div class="container mt-2">
        <div class="card mx-auto col-md-5">
            <div class="card-body">
                <h5 class="card-title text-center">Sign In</h5>
                <form id="login-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Mobile no.</label>
                        <input type="tel" class="form-control" id="username" name="username"
                            placeholder="10 digit mobile no." required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Your password" required>
                    </div>
                    <div class=" text-end mt-3">
                        <a href="forgot-password.php">Forgot Password?</a><br>
                    </div><br>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </div>
    </div>
</section>
<?php include('./footer.php'); ?>