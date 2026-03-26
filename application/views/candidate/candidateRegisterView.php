<div class="row justify-content-center" style="margin-top: 5vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-header bg-white text-center pt-4 pb-0 border-0">
                <h3 class="fw-bold text-dark">Create an Account</h3>
                <p class="text-muted">Join Suropriyo Enterprise's talent network</p>
            </div>
            <div class="card-body px-4 py-4">

                <?php if(validation_errors()): ?>
                <div class="alert alert-danger rounded-3 p-2 text-center" style="font-size: 0.9em;">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>

                <?= form_open('Candidate/register'); ?>
                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-semibold">Email Address <span
                            class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control form-control-lg bg-light" id="email"
                        placeholder="name@example.com" value="<?= set_value('email'); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label fw-semibold">Password <span
                            class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control form-control-lg bg-light" id="password"
                        placeholder="Minimum 6 characters" required>
                </div>

                <div class="form-group mb-4">
                    <label for="passconf" class="form-label fw-semibold">Confirm Password <span
                            class="text-danger">*</span></label>
                    <input type="password" name="passconf" class="form-control form-control-lg bg-light" id="passconf"
                        placeholder="Re-type your password" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg fw-bold" style="border-radius: 8px;">Create
                        Account</button>
                </div>
                <?= form_close(); ?>

                <div class="position-relative mt-4 mb-4">
                    <hr class="text-muted">
                    <span
                        class="position-absolute top-50 start-50 translate-middle bg-white px-2 text-muted small">OR</span>
                </div>

                <div class="d-grid">
                    <a href="<?= base_url('Candidate/google_login'); ?>" class="btn btn-outline-dark btn-lg fw-semibold"
                        style="border-radius: 8px;">
                        <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="Google"
                            style="width: 20px; margin-right: 8px; margin-top: -2px;">
                        Sign up with Google
                    </a>
                </div>

            </div>
            <div class="card-footer text-center bg-light py-3 border-0 rounded-bottom-4">
                <span class="text-muted">Already have an account?</span> <a href="<?= base_url('Candidate/login'); ?>"
                    class="fw-bold text-primary text-decoration-none">Log in here</a>
            </div>
        </div>
    </div>
</div>