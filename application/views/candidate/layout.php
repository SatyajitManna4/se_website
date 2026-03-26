<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Candidate Portal | Suropriyo Enterprise' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
    body {
        background-color: #f4f6f9;
        font-family: 'Inter', sans-serif;
    }

    .candidate-navbar {
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg candidate-navbar py-3 mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="<?= base_url('Careers') ?>">
                <i class="fas fa-building me-2"></i>Suropriyo Enterprise
            </a>

            <div class="d-flex align-items-center gap-3">
                <a href="<?= base_url('Careers/Jobs') ?>" class="text-decoration-none text-secondary fw-semibold">Browse
                    Jobs</a>
                <?php if($this->session->userdata('candidate_logged_in')): ?>
                <a href="<?= base_url('Candidate/dashboard') ?>" class="btn btn-sm btn-primary fw-bold">My Dashboard</a>
                <a href="<?= base_url('Candidate/logout') ?>" class="btn btn-sm btn-outline-danger">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="container min-vh-100">

        <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger text-center rounded-3 shadow-sm">
            <?= $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success text-center rounded-3 shadow-sm">
            <?= $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <?= $content ?>

    </main>

    <footer class="text-center text-muted py-4 mt-5 border-top bg-white">
        <small>&copy; <?= date('Y') ?> Suropriyo Enterprise. Candidate Tracking Portal.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>