<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suropriyo Enterprise | Premium Digital Solutions</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>css/Home.css">

</head>

<body>

    <section class="hero-section" id="home">
        <div class="hero-content container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="hero-title">Digital Solutions Engineered<br>for Modern Businesses</h1>
                    <p class="hero-description">
                        We design and build high-performance websites, mobile applications, and scalable software
                        systems. From idea to deployment — we deliver reliable digital infrastructure tailored to your
                        business.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="<?= base_url() ?>ContactUs#contactForm" class="btn-premium-primary">
                            Start Your Project
                        </a>
                        <a href="<?= base_url() ?>Services#ourServices" class="btn-premium-outline">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container stats-wrapper">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-primary">300+</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number" style="color: #0ea5e9;">99.9%</div>
                        <div class="stat-label">System Uptime</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-primary">60%</div>
                        <div class="stat-label">Faster Deployment</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number" style="color: #0ea5e9;">24/7</div>
                        <div class="stat-label">Support Active</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-white-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our Core Services</h2>
                <p class="section-subtitle">Custom websites and business applications built for performance,
                    scalability, and user experience. From corporate platforms to complex systems, we deliver reliable
                    solutions.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Mobile App Development</h3>
                        <p>iOS and Android applications designed for speed and usability. From customer-facing apps to
                            enterprise mobility solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-desktop"></i></div>
                        <h3>Web Development</h3>
                        <p>Custom websites and business applications built for performance, scalability, and user
                            experience. Reliable platforms for your business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-cloud"></i></div>
                        <h3>Cloud Management</h3>
                        <p>Secure hosting, server optimization, and infrastructure management. Ensuring high
                            availability, performance, and data security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-bold mb-3">TECHNOLOGY
                    LEADERSHIP</span>
                <br>
                <h2 class="section-title">Technology That Drives Growth</h2>
                <p class="section-subtitle">We combine modern architecture, intelligent workflows, and data-driven
                    systems to help businesses operate faster, smarter, and more efficiently.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-cogs"></i></div>
                        <h3>Custom Business Systems</h3>
                        <p>Tailored solutions like CRM, ERP, and internal tools to streamline operations and improve
                            productivity across your organization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-database"></i></div>
                        <h3>Data & Analytics</h3>
                        <p>Real-time dashboards, reporting systems, and data processing tools to help you make informed
                            business decisions instantly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                        <h3>Secure Infrastructure</h3>
                        <p>Robust architecture with security-first design, ensuring your applications and data remain
                            protected and highly scalable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-section">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold text-dark opacity-75">Trusted by Businesses Across Industries</h3>
            </div>
            <div class="row align-items-center justify-content-center text-center g-4">
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g1.png" class="client-logo"
                        alt="Client 1"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g2.png" class="client-logo"
                        alt="Client 2"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g3.png" class="client-logo"
                        alt="Client 3"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g4.png" class="client-logo"
                        alt="Client 4"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g5.png" class="client-logo"
                        alt="Client 5"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g6.png" class="client-logo"
                        alt="Client 6"></div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="premium-cta-section" id="contact">
            <div class="cta-content">
                <h2 class="cta-title">Let’s Build Something Powerful</h2>
                <p class="cta-description">Whether you're launching a new idea or upgrading your existing systems, we
                    deliver scalable, high-quality digital solutions designed for long-term success.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?= base_url() ?>ContactUs#contactForm" class="btn-premium-primary"
                        style="color: #2563eb !important;">
                        Get Free Consultation
                    </a>
                    <a href="<?= base_url() ?>AboutUs#solutions" class="btn-premium-outline">
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- <script>
        // 1. Target the hero section specifically
        const heroSection = document.querySelector('.hero-section');
        
        const scene = new THREE.Scene();
        
        // 2. Set camera size based on the hero section, not the whole window
        const camera = new THREE.PerspectiveCamera(75, heroSection.clientWidth / heroSection.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true }); // Keep transparent for the gradient
        
        renderer.setSize(heroSection.clientWidth, heroSection.clientHeight);
        
        // 3. FIX: Lock canvas to 'absolute' inside the hero section instead of 'fixed' to the screen!
        renderer.domElement.style.position = 'absolute';
        renderer.domElement.style.top = '0';
        renderer.domElement.style.left = '0';
        renderer.domElement.style.zIndex = '1';
        renderer.domElement.style.pointerEvents = 'none';
        
        // 4. Append to heroSection, NOT document.body
        heroSection.appendChild(renderer.domElement);

        // Your original Cyan/Deep Blue materials
        const nodeMaterial = new THREE.MeshStandardMaterial({
            color: 0x090979,
            emissive: 0x020024,
            metalness: 0.8,
            roughness: 0.2
        });
        const connectorMaterial = new THREE.MeshStandardMaterial({
            color: 0x00d4ff,
            emissive: 0x0482c9,
            transparent: true,
            opacity: 0.8,
            metalness: 0.9,
            roughness: 0.1
        });
        const wireframeMaterial = new THREE.MeshBasicMaterial({
            color: 0x00d4ff,
            wireframe: true,
            transparent: true,
            opacity: 0.3
        });

        // Your original Particles
        const particleCount = 500;
        const particles = new THREE.BufferGeometry();
        const positions = new Float32Array(particleCount * 3);
        const colors = new Float32Array(particleCount * 3);
        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 20;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 20;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 20;
            colors[i * 3] = Math.random() * 0.5 + 0.5;
            colors[i * 3 + 1] = Math.random() * 0.5 + 0.5;
            colors[i * 3 + 2] = 1;
        }
        particles.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particles.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        const particleMaterial = new THREE.PointsMaterial({ size: 0.05, vertexColors: true, transparent: true, opacity: 0.6 });
        const particleSystem = new THREE.Points(particles, particleMaterial);
        scene.add(particleSystem);

        const nodes = [];
        const connectors = [];
        const nodeRadius = 0.15;
        const connectorRadius = 0.03;

        function createCluster(type, scale, position) {
            const clusterGroup = new THREE.Group();
            let vertices = [];
            let edges = [];

            if (type === 'octahedron') {
                vertices = [
                    new THREE.Vector3(1, 0, 0), new THREE.Vector3(-1, 0, 0),
                    new THREE.Vector3(0, 1, 0), new THREE.Vector3(0, -1, 0),
                    new THREE.Vector3(0, 0, 1), new THREE.Vector3(0, 0, -1)
                ];
                edges = [
                    [0, 2], [0, 3], [0, 4], [0, 5],
                    [1, 2], [1, 3], [1, 4], [1, 5],
                    [2, 4], [2, 5], [3, 4], [3, 5]
                ];
            } else if (type === 'icosahedron') {
                const t = (1 + Math.sqrt(5)) / 2;
                vertices = [
                    new THREE.Vector3(-1, t, 0), new THREE.Vector3(1, t, 0),
                    new THREE.Vector3(-1, -t, 0), new THREE.Vector3(1, -t, 0),
                    new THREE.Vector3(0, -1, t), new THREE.Vector3(0, 1, t),
                    new THREE.Vector3(0, -1, -t), new THREE.Vector3(0, 1, -t),
                    new THREE.Vector3(t, 0, -1), new THREE.Vector3(t, 0, 1),
                    new THREE.Vector3(-t, 0, -1), new THREE.Vector3(-t, 0, 1)
                ];
                edges = [
                    [0, 1], [0, 5], [0, 7], [0, 10], [0, 11],
                    [1, 5], [1, 7], [1, 8], [1, 9],
                    [2, 3], [2, 4], [2, 6], [2, 10], [2, 11],
                    [3, 4], [3, 6], [3, 8], [3, 9],
                    [4, 5], [4, 9], [4, 11],
                    [5, 9], [5, 11],
                    [6, 7], [6, 8], [6, 10],
                    [7, 8], [7, 10],
                    [8, 9], [9, 10], [10, 11]
                ];
            } else if (type === 'dodecahedron') {
                const phi = (1 + Math.sqrt(5)) / 2;
                vertices = [
                    new THREE.Vector3(1, 1, 1), new THREE.Vector3(1, 1, -1),
                    new THREE.Vector3(1, -1, 1), new THREE.Vector3(1, -1, -1),
                    new THREE.Vector3(-1, 1, 1), new THREE.Vector3(-1, 1, -1),
                    new THREE.Vector3(-1, -1, 1), new THREE.Vector3(-1, -1, -1),
                    new THREE.Vector3(0, phi, 1 / phi), new THREE.Vector3(0, phi, -1 / phi),
                    new THREE.Vector3(0, -phi, 1 / phi), new THREE.Vector3(0, -phi, -1 / phi),
                    new THREE.Vector3(phi, 1 / phi, 0), new THREE.Vector3(phi, -1 / phi, 0),
                    new THREE.Vector3(-phi, 1 / phi, 0), new THREE.Vector3(-phi, -1 / phi, 0),
                    new THREE.Vector3(1 / phi, 0, phi), new THREE.Vector3(-1 / phi, 0, phi),
                    new THREE.Vector3(1 / phi, 0, -phi), new THREE.Vector3(-1 / phi, 0, -phi)
                ];
                edges = [
                    [0, 8], [0, 12], [0, 16], [1, 9], [1, 12], [1, 18],
                    [2, 10], [2, 13], [2, 16], [3, 11], [3, 13], [3, 18],
                    [4, 8], [4, 14], [4, 17], [5, 9], [5, 14], [5, 19],
                    [6, 10], [6, 15], [6, 17], [7, 11], [7, 15], [7, 19],
                    [8, 9], [10, 11], [12, 13], [14, 15], [16, 17], [18, 19]
                ];
            }

            vertices.forEach(vertex => {
                const node = new THREE.Mesh(new THREE.SphereGeometry(nodeRadius, 16, 16), nodeMaterial);
                node.position.copy(vertex).multiplyScalar(scale);
                clusterGroup.add(node);
                nodes.push(node);
            });

            edges.forEach(([a, b]) => {
                const start = vertices[a].clone().multiplyScalar(scale);
                const end = vertices[b].clone().multiplyScalar(scale);
                const direction = end.clone().sub(start);
                const length = direction.length();
                const connector = new THREE.Mesh(new THREE.CylinderGeometry(connectorRadius, connectorRadius, length, 8), connectorMaterial);
                connector.position.copy(start).add(direction.multiplyScalar(0.5));
                connector.lookAt(end);
                clusterGroup.add(connector);
                connectors.push(connector);
            });

            const wireframeGeo = type === 'octahedron' ? new THREE.OctahedronGeometry(scale) :
                type === 'icosahedron' ? new THREE.IcosahedronGeometry(scale) :
                    new THREE.DodecahedronGeometry(scale);
            const wireframe = new THREE.Mesh(wireframeGeo, wireframeMaterial);
            clusterGroup.add(wireframe);

            clusterGroup.position.copy(position);
            scene.add(clusterGroup);
        }

        createCluster('octahedron', 1, new THREE.Vector3(-6, 0, 0));
        createCluster('icosahedron', 0.8, new THREE.Vector3(-3, 1, 0));
        createCluster('dodecahedron', 0.7, new THREE.Vector3(0, 0, 0));
        createCluster('octahedron', 1.2, new THREE.Vector3(3, -1, 0));
        createCluster('icosahedron', 0.9, new THREE.Vector3(6, 0, 0));

        // Your original Lighting setup
        nodes.forEach((node, i) => {
            const lightColor = i % 3 === 0 ? 0x00d4ff : i % 3 === 1 ? 0x090979 : 0x0482c9;
            const light = new THREE.PointLight(lightColor, 0.7, 4);
            light.position.copy(node.position);
            scene.add(light);
        });
        const ambientLight = new THREE.AmbientLight(0x060552, 0.4);
        scene.add(ambientLight);
        const directionalLight = new THREE.DirectionalLight(0x00d4ff, 0.6);
        directionalLight.position.set(5, 5, 5);
        scene.add(directionalLight);

        camera.position.set(0, 3, 15);

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX / window.innerWidth) * 2 - 1;
            mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
        });

        function animate() {
            requestAnimationFrame(animate);
            scene.rotation.y += 0.002;
            camera.position.x += (mouseX * 3 - camera.position.x) * 0.05;
            camera.position.y += (mouseY * 3 - camera.position.y) * 0.05;
            camera.lookAt(0, 0, 0);

            const positions = particleSystem.geometry.attributes.position.array;
            for (let i = 0; i < particleCount; i++) {
                positions[i * 3 + 1] += Math.sin(Date.now() * 0.001 + i) * 0.01;
            }
            particleSystem.geometry.attributes.position.needsUpdate = true;

            connectors.forEach((conn, i) => {
                conn.material.emissiveIntensity = 0.7 + 0.3 * Math.sin(Date.now() * 0.0008 + i * 0.5);
            });
            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            // FIX: Resize based on the hero section height, not the whole window height
            const width = heroSection.clientWidth;
            const height = heroSection.clientHeight;
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        });
    </script> -->

    <script>
        const heroSection = document.querySelector('.hero-section');

        const scene = new THREE.Scene();

        const camera = new THREE.PerspectiveCamera(
            75,
            heroSection.clientWidth / heroSection.clientHeight,
            0.1,
            1000
        );

        const renderer = new THREE.WebGLRenderer({
            antialias: true,
            alpha: true,
            powerPreference: "high-performance"
        });

        renderer.setSize(heroSection.clientWidth, heroSection.clientHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2)); // important optimization

        renderer.domElement.style.position = 'absolute';
        renderer.domElement.style.top = '0';
        renderer.domElement.style.left = '0';
        renderer.domElement.style.zIndex = '1';
        renderer.domElement.style.pointerEvents = 'none';

        heroSection.appendChild(renderer.domElement);

        // OPTIMIZED PARTICLES
        const particleCount = 250; // balanced for performance
        const positions = new Float32Array(particleCount * 3);
        const velocity = new Float32Array(particleCount); // pre-store speed

        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 20;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 10;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 10;

            velocity[i] = 0.002 + Math.random() * 0.002; // different speeds
        }

        const geometry = new THREE.BufferGeometry();
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const material = new THREE.PointsMaterial({
            size: 0.04,
            color: 0xffffff,
            transparent: true,
            opacity: 0.8,
            depthWrite: false // improves performance
        });

        const particles = new THREE.Points(geometry, material);
        scene.add(particles);

        camera.position.z = 10;

        // SMOOTH ANIMATION LOOP
        function animate() {
            requestAnimationFrame(animate);

            const pos = geometry.attributes.position.array;

            for (let i = 0; i < particleCount; i++) {
                pos[i * 3 + 1] += velocity[i];

                // reset particle when out of view
                if (pos[i * 3 + 1] > 5) {
                    pos[i * 3 + 1] = -5;
                }
            }

            geometry.attributes.position.needsUpdate = true;

            renderer.render(scene, camera);
        }

        animate();

        // RESPONSIVE (OPTIMIZED)
        window.addEventListener('resize', () => {
            const width = heroSection.clientWidth;
            const height = heroSection.clientHeight;

            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        });
    </script>

</body>

</html>