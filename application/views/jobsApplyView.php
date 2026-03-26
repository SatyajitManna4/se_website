<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
/* Premium Application Page Styles */
body {
    background-color: #f4f7f6;
    /* Soft, modern off-white background */
}

.apply-hero-section {
    /* A deep, modern corporate gradient */
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    padding: 80px 0 120px 0;
    position: relative;
}

.apply-hero-content {
    position: relative;
    z-index: 2;
}

.form-overlap-container {
    margin-top: -80px;
    /* Pulls the card up over the dark hero background */
    position: relative;
    z-index: 10;
    margin-bottom: 80px;
}

.premium-form-card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    background: #ffffff;
}

.upload-area.dragover {
    background-color: #e9ecef !important;
    border-color: #0d6efd !important;
}

.form-control {
    border-radius: 8px;
    padding: 12px 15px;
    border: 1px solid #dee2e6;
}

.form-control:focus {
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
}

.btn-submit {
    border-radius: 8px;
    padding: 14px;
    background: linear-gradient(135deg, #0d6efd, #0b5ed7);
    border: none;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #0b5ed7, #0a53be);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
}
</style>

<section class="apply-hero-section text-center">
    <div class="container apply-hero-content">
        <a href="<?= base_url('Careers/Jobs') ?>"
            class="text-white-50 text-decoration-none mb-4 d-inline-block custom-hover">
            <i class="fas fa-arrow-left me-2"></i> Back to Job Listings
        </a>
        <h2 class="text-white fw-bold display-5 mb-2">Apply for: <?= htmlspecialchars($job_details->sejob_jobtitle); ?>
        </h2>
        <p class="text-white-50 lead">Join Suropriyo Enterprise and help us build the future.</p>
    </div>
</section>

<section class="form-overlap-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card premium-form-card">
                    <div class="card-body p-4 p-md-5">

                        <div class="d-flex align-items-center mb-4 p-3 rounded-3"
                            style="background-color: #f8f9fa; border-left: 4px solid #0d6efd;">
                            <i class="fas fa-user-circle fs-3 text-primary me-3"></i>
                            <div>
                                <small class="text-muted text-uppercase fw-bold d-block"
                                    style="font-size: 0.75rem;">Applying As</small>
                                <span class="fw-medium text-dark"><?= $candidate_details->email; ?></span>
                            </div>
                        </div>

                        <?= form_open_multipart('Jobs/ApplyStatus/'.$job_details->sejob_id, ['id' => 'jobForm']); ?>

                        <div class="mb-4">
                            <label class="fw-bold text-muted small text-uppercase mb-2">Position</label>
                            <input type="text" class="form-control bg-light text-muted fw-medium"
                                value="<?= $job_details->sejob_jobtitle; ?>" readonly>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="fw-bold text-muted small text-uppercase mb-2">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="full_name"
                                    value="<?= isset($candidate_details->full_name) ? $candidate_details->full_name : ''; ?>"
                                    <?= !empty($candidate_details->full_name) ? 'readonly class="form-control bg-light text-muted fw-medium"' : 'required placeholder="e.g. Biki Singh"'; ?>>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="fw-bold text-muted small text-uppercase mb-2">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" placeholder="e.g. 9876543210"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="fw-bold text-muted small text-uppercase mb-2">Years of Experience <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="experience" min="0" step="0.5"
                                    placeholder="ex: 5" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="fw-bold text-muted small text-uppercase mb-2">Expected Salary (Annual)
                                    <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted">₹</span>
                                    <input type="number" class="form-control border-start-0" name="expected_salary"
                                        placeholder="ex: 300000" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="fw-bold text-muted small text-uppercase mb-2">Resume Upload (PDF ONLY, Max
                                5MB) <span class="text-danger">*</span></label>
                            <div id="uploadArea"
                                class="upload-area p-5 text-center border border-2 border-dashed rounded-3"
                                style="cursor: pointer; background-color: #fafbfc; transition: 0.3s;">
                                <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fas fa-cloud-upload-alt fs-3"></i>
                                </div>
                                <h5 class="text-dark fw-bold mb-1">Click to upload or drag and drop</h5>
                                <p class="text-muted small mb-0">PDF formatting only</p>
                                <input type="file" id="resume-file" class="form-control d-none" name="resume"
                                    accept=".pdf" required>
                            </div>
                            <div id="fileInfo" class="mt-2 text-success small fw-bold"></div>
                        </div>

                        <div class="mb-5">
                            <label class="fw-bold text-muted small text-uppercase mb-2">Cover Letter</label>
                            <textarea class="form-control" name="coverletter" rows="4"
                                placeholder="Briefly explain why you are a great fit for this role..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit w-100 fw-bold fs-5 text-white">
                            Submit Application <i class="fas fa-arrow-right ms-2"></i>
                        </button>

                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const uploadArea = document.getElementById('uploadArea');
const fileInput = document.getElementById('resume-file');
const fileInfo = document.getElementById('fileInfo');

uploadArea.addEventListener('click', () => fileInput.click());

uploadArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadArea.classList.add('dragover');
});

uploadArea.addEventListener('dragleave', () => {
    uploadArea.classList.remove('dragover');
});

uploadArea.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadArea.classList.remove('dragover');
    const files = e.dataTransfer.files;

    if (files.length > 0 && files[0].type === 'application/pdf') {
        fileInput.files = files;
        updateFileInfo();
    } else {
        alert("Please upload a valid PDF file.");
    }
});

fileInput.addEventListener('change', updateFileInfo);

function updateFileInfo() {
    if (fileInput.files[0]) {
        const file = fileInput.files[0];
        const sizeMB = (file.size / 1024 / 1024).toFixed(2);
        fileInfo.innerHTML =
            `<i class="fas fa-check-circle me-1"></i> Attached: <span class="text-dark">${file.name}</span> (${sizeMB} MB)`;
        uploadArea.style.borderColor = '#198754';
        uploadArea.style.backgroundColor = '#f8fffb';
    } else {
        fileInfo.textContent = '';
        uploadArea.style.borderColor = '#dee2e6';
        uploadArea.style.backgroundColor = '#fafbfc';
    }
}
</script>