<?php include('./header.php'); ?>
<section class="py-5">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">CREATE ACCOUNT</h3>
                    </div>
                    <div class="card-body">
                        <form id="registrationForm" action="your-registration-handler.php" method="post">
                            
                            <div class="mb-3">
                                <br>
                                    <input type="text" class="form-control" id="username" placeholder="Your Name" name="username" required>
                                    <br>
                                </div>
                                <div class="mb-3">
                                
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Repeat Your Password" name="confirmPassword" required>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    
                                    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="Phone Number" required>
                                    <br>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="termsCheckbox" required>
                                    <label class="form-check-label nopad" for="termsCheckbox">I agree to the terms and conditions</label>
                                </div>

                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('./footer.php'); ?>