<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Suropriyo Enterprise</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>css/Header.css">
	<!-- fevicon -->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/fevicon/site.webmanifest">
</head>


	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>">
				<img href="<?= base_url(); ?>" src="<?= base_url(); ?>assets/logo.png" alt="Logo" id="logo">
				<span class="ms-2 fw-bold" style="color: #2563eb; font-size: 1.3rem;">Suropriyo Enterprise</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() . ''; ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() . 'AboutUs'; ?>">About
							Us</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() . 'Services'; ?>">Services</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() . 'Careers'; ?>">Careers</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() . 'ContactUs'; ?>">Contact
							Us</a>
					</li>
				</ul>

				<!-- Search Bar -->
				<?= form_open('Services/Searchservice') ?>
				<div class="input-group input-group-sm search-input-wrapper">
					<input type="search" name="ques" class="form-control search-input" placeholder="Search services..."
						aria-label="Search">
					<button class="input-group-text search-icon">
						<i type="submit" class="fas fa-search"></i>
					</button>
				</div>
				<?= form_close() ?>
			</div>
		</div>
	</nav>