<style>
/* Reset some spacing issues */
html, body {
    height: 100%;
    margin: 0;
}

/* Background */
/* body {
    background: linear-gradient(135deg, #eef2f7, #f8fbff);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
} */

/* Container full height fix */
.container {
    width: 100%;
    max-width: 100%;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: 0.3s ease;
}

.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 40px rgba(0, 0, 0, 0.12);
}

/* Header */
.card-header {
    background: linear-gradient(135deg, #007bff, #0056d2);
    border: none;
    padding: 18px;
}

.card-header h4 {
    font-weight: 600;
    margin: 0;
    font-size: 18px;
}

/* Body */
.card-body {
    padding: 25px;
}

/* Inputs */
.form-control {
    border-radius: 10px;
    padding: 12px;
    border: 1px solid #e0e6ed;
    transition: 0.25s;
    font-size: 14px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
}

/* Labels */
.form-label {
    font-weight: 500;
    font-size: 13px;
}

/* Buttons */
.btn {
    border-radius: 10px;
    padding: 12px;
    font-size: 14px;
}

/* Primary Button */
.btn-primary {
    background: linear-gradient(135deg, #007bff, #0056d2);
    border: none;
    font-weight: 600;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #0056d2, #0041a8);
}

/* Google Button */
.btn-outline-danger {
    border: 1px solid #e0e0e0;
}

.btn-outline-danger:hover {
    background: #db4437;
    color: #fff;
    border-color: #db4437;
}

/* Footer */
.card-footer {
    border-top: none;
    background: #fafbfc;
    font-size: 13px;
    padding: 15px;
}

/* Divider */
hr {
    opacity: 0.1;
}

/* Links */
a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* 📱 MOBILE OPTIMIZATION */
@media (max-width: 768px) {
    
    body {
        align-items: flex-start;
        padding: 20px 10px;
    }

    .col-md-5 {
        width: 100%;
        max-width: 100%;
    }

    .card {
        border-radius: 12px;
    }

    .card-body {
        padding: 20px;
    }

    .btn {
        padding: 14px;
        font-size: 15px;
    }

    .form-control {
        padding: 14px;
    }
}

/* 📱 SMALL DEVICES (phones) */
@media (max-width: 480px) {

    .card-header h4 {
        font-size: 16px;
    }

    .card-body {
        padding: 18px;
    }

    .form-label {
        font-size: 12px;
    }
}

/* Full height fix */
html, body {
    height: 100%;
    margin: 0;
}

/* Background */
body {
    background: linear-gradient(135deg, #eef2f7, #f8fbff);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Center using wrapper instead of body */
.login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Fix row width issue */
.row {
    width: 100%;
    margin: 0;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: 0.3s ease;
}

.card:hover {
    transform: translateY(-3px);
}

/* Header */
.card-header {
    background: linear-gradient(135deg, #007bff, #0056d2);
    border: none;
    padding: 18px;
}

/* Fix double padding issue */
.card-body {
    padding: 25px !important;
}

/* Mobile Fix */
@media (max-width: 768px) {

    .login-wrapper {
        align-items: flex-start;
        padding: 20px 10px;
    }

    .col-md-5 {
        width: 100%;
        max-width: 100%;
        padding: 0;
    }
}
</style>
<div  class="container login-wrapper" >
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card ">
               <div class="card-header text-center">
    <!-- <img src="your-logo.png" style="height:45px; margin-bottom:10px;"> -->
     <img href="<?= base_url(); ?>" src="<?= base_url(); ?>assets/logo.png" alt="Logo" id="logo" style="height:45px; margin-bottom:10px; border-radius: 50%;">
    <h4>Candidate Login</h4>
</div>
                <div class="card-body ">



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