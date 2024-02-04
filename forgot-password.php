<?php include('./header.php'); ?>
<section class="py-5">
    <div class="container mt-2">
        <div class="card mx-auto col-md-5">
            <div class="card-body">
                <h5 class="card-title text-center">Forget Password</h5>
                <form id="login-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Mobile no.</label>
                        <input type="tel" class="form-control" id="username" name="username" placeholder="10 digit mobile no." required>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary btn-block">Get OTP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('./footer.php'); ?>