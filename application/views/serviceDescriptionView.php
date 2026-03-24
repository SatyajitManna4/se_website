<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $serv[0]->sesrv_name ?> - Suropriyo Enterprise</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           GLOBAL STYLES & HEADER/FOOTER OVERRIDES
           ========================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Safely overrides Header.css !important rules */
        body {
            font-family: 'Inter', sans-serif !important;
            background: #F8FAFC !important; 
            color: #475569 !important; 
            padding-top: 85px !important;
            overflow-x: hidden !important; /* Prevents horizontal wiggle */
            min-height: 100vh !important;
            display: flex !important;
            flex-direction: column !important;
        }

        /* --- Section Titles --- */
        .section-title {
            font-weight: 800;
            color: #0F172A !important;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 50px;
            font-size: clamp(2rem, 5vw, 2.5rem);
            letter-spacing: -0.5px;
            display: inline-block;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: #2563eb;
            border-radius: 2px;
        }

        /* =========================================
           HERO SECTION (Premium Navy)
           ========================================= */
        .premium-hero-section {
            background: #0F172A !important;
            color: white !important;
            padding: 140px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        /* Subtle glowing orb in the background */
        .hero-glow {
            position: absolute;
            top: -50%;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(37,99,235,0.15) 0%, rgba(15,23,42,0) 70%);
            z-index: 1;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .premium-service-badge {
            display: inline-flex;
            background: rgba(37, 99, 235, 0.2);
            color: #60a5fa !important;
            border: 1px solid rgba(59, 130, 246, 0.3);
            padding: 8px 24px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2rem;
            align-items: center;
            gap: 8px;
        }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: #FFFFFF !important;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .hero-description {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            color: #94A3B8 !important;
        }

        /* =========================================
           MAIN CONTENT & FEATURES
           ========================================= */
        .content-section {
            padding: 80px 0;
            background: #F8FAFC !important;
            flex-grow: 1 !important; /* Pushes the footer to the bottom */
        }

        .features-grid {
            display: grid;
            /* Shrunk min-width from 320px to 280px to fit on small mobile screens */
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .premium-feature-card {
            background: #FFFFFF !important;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.05);
            border: 1px solid #E2E8F0;
            border-top: 5px solid #2563eb; 
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .premium-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -12px rgba(37, 99, 235, 0.2);
        }

        .feature-icon-wrapper {
            width: 65px;
            height: 65px;
            background: rgba(37, 99, 235, 0.08);
            color: #2563eb !important;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 25px;
            border: 1px solid rgba(37, 99, 235, 0.1);
        }

        .premium-feature-card h3 {
            font-size: 1.35rem;
            font-weight: 800;
            color: #0F172A !important;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .premium-feature-card p {
            color: #64748B !important;
            line-height: 1.7;
            margin: 0;
            font-size: 0.95rem;
        }

        /* =========================================
           BENEFITS GRID
           ========================================= */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .premium-benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 30px;
            background: #FFFFFF !important;
            border-radius: 20px;
            box-shadow: 0 10px 25px -10px rgba(15, 23, 42, 0.05);
            border: 1px solid #E2E8F0;
            transition: all 0.3s ease;
        }

        .premium-benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px -10px rgba(37, 99, 235, 0.15);
            border-color: rgba(37, 99, 235, 0.3);
        }

        .benefit-icon {
            width: 55px;
            height: 55px;
            background: rgba(16, 185, 129, 0.1);
            color: #10B981 !important;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .premium-benefit-item:nth-child(even) .benefit-icon {
            background: rgba(37, 99, 235, 0.1); 
            color: #2563eb !important;
        }

        .benefit-content h5 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0F172A !important;
            margin-bottom: 8px;
        }

        .benefit-content p {
            color: #64748B !important;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        /* =========================================
           CTA SECTION
           ========================================= */
        .premium-cta-section {
            background: #2563eb !important;
            color: white !important;
            text-align: center;
            padding: 80px 40px;
            border-radius: 32px;
            margin: 40px 0 0px; /* FIXED: Removed 80px bottom margin */
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px -10px rgba(37, 99, 235, 0.3);
        }

        .premium-cta-section::after {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
            pointer-events: none;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 20px;
            color: #FFFFFF !important;
            letter-spacing: -0.5px;
        }

        .cta-description {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.9) !important;
            margin-bottom: 35px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-cta-premium {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #FFFFFF !important;
            color: #2563eb !important;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .btn-cta-premium:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            color: #1d4ed8 !important;
        }

        /* =========================================
           MOBILE RESPONSIVENESS
           ========================================= */
        @media (max-width: 768px) {
            .premium-hero-section {
                padding: 100px 15px 60px;
            }
            .content-section {
                padding: 60px 0;
            }
            .premium-cta-section {
                padding: 60px 20px;
                border-radius: 20px;
                margin: 40px 15px 40px;
            }
            .premium-feature-card, .premium-benefit-item {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="premium-hero-section">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="hero-content">
                <div class="premium-service-badge">
                    <i class="fas fa-layer-group"></i>
                    <?= $serv[0]->sesrv_name ?>
                </div>
                <h1 class="hero-title">Transform Your Vision<br>Into Digital Reality</h1>
                <p class="hero-description">We craft modern, responsive applications using cutting-edge technologies and best practices for optimal performance across all devices.</p>
            </div>
        </div>
    </div>

    <div class="content-section">
        <div class="container">
            
            <div class="text-center">
                <h2 class="section-title">Comprehensive <?= $serv[0]->sesrv_name ?> Solutions</h2>
            </div>
            
            <p style="font-size: 1.15rem; color: #64748b; text-align: center; max-width: 800px; margin: 0 auto 60px; line-height: 1.8;">
                <?= $serv[0]->sesrv_desc ?>
            </p>
            
            <div class="features-grid">
                <?php foreach(json_decode($serv[0]->sesrv_majdesc) as $item){ ?>
                <div class="premium-feature-card">
                    <div class="feature-icon-wrapper">
                        <i class="fab fa-react"></i> 
                    </div>
                    <h3><?= $item[1]?></h3>
                    <p><?= $item[2] ?></p>
                </div>
                <?php } ?>
            </div>

            <div class="text-center mt-5">
                <h2 class="section-title">Why Choose Us</h2>
            </div>
            
            <div class="benefits-grid">
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>Lightning Fast Delivery</h5>
                        <p>Agile methodology ensures rapid development cycles without compromising quality.</p>
                    </div>
                </div>
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>Enterprise Grade Security</h5>
                        <p>OWASP Top 10 compliance, encryption, secure authentication, and regular security audits.</p>
                    </div>
                </div>
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>Scalable Architecture</h5>
                        <p>Built to handle millions of users with microservices, load balancing, and cloud-native design.</p>
                    </div>
                </div>
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>24/7 Expert Support</h5>
                        <p>Dedicated support team with SLA-backed response times and proactive monitoring.</p>
                    </div>
                </div>
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>Performance Optimized</h5>
                        <p>Lighthouse scores 95+, Core Web Vitals compliant, CDN integration, and image optimization.</p>
                    </div>
                </div>
                <div class="premium-benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="benefit-content">
                        <h5>Future Ready</h5>
                        <p>Latest frameworks, Web3 ready, AI integration capable, and continuous improvement roadmap.</p>
                    </div>
                </div>
            </div>

            <div class="premium-cta-section">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Build Something Amazing?</h2>
                    <p class="cta-description">Let's discuss your web development project and create a custom solution that drives your business forward.</p>
                    <a href="<?= base_url() ?>Contactus#contactForm" class="btn-cta-premium">
                        Start Your Project <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>