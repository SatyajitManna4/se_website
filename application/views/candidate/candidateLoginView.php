<div class="container" style="margin-top: 50px; margin-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Candidate Login</h4>
                </div>
                <div class="card-body px-4 py-4">



                    <?php echo form_open('Candidate/login'); ?>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Enter the email you applied with" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="login_submit" value="Login" class="btn btn-primary btn-block">
                            Login to Dashboard
                        </button>
                    </div>

                    <?php echo form_close(); ?>

                    <hr class="my-4">

                    <div class="d-grid gap-2 text-center">
                        <p class="text-muted mb-2">Or log in with your Google account</p>
                        <a href="<?php echo base_url('Candidate/google_login'); ?>"
                            class="btn btn-outline-danger btn-block">
                            <i class="fab fa-google mr-2"></i> Sign in with Google
                        </a>
                    </div>

                </div>
                <div class="card-footer text-center bg-light py-3">
                    <small>Don't have an account? <a
                            href="<?php echo base_url('Candidate/register'); ?>">register</a></small>
                </div>
            </div>
        </div>
    </div>
</div>