<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSB Metal and Trading</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        header {
            background: rgba(26, 26, 26, 0.95);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #f39c12;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #f39c12;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f39c12;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(243,156,18,0.3)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="metalTexture" patternUnits="userSpaceOnUse" width="100" height="100"><rect width="100" height="100" fill="%23333"/><circle cx="50" cy="50" r="30" fill="%23555" opacity="0.5"/></pattern></defs><rect width="1000" height="1000" fill="url(%23metalTexture)"/></svg>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #f39c12, #e67e22);
            color: #fff;
            padding: 1rem 2.5rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
            animation: fadeInUp 1s ease 0.6s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(243, 156, 18, 0.6);
        }

        /* Services Section */
        .services {
            padding: 5rem 5%;
            background: #f8f9fa;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #f39c12, #e67e22);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
            border-top: 4px solid #f39c12;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 3rem;
            color: #f39c12;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-card p {
            color: #666;
            line-height: 1.8;
        }

        /* About Section */
        .about {
            padding: 5rem 5%;
            background: #fff;
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #333;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #f39c12;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .about-image {
            background: linear-gradient(45deg, #f39c12, #e67e22);
            height: 400px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 4rem;
        }

        /* Contact Section */
        .contact {
            padding: 5rem 5%;
            background: linear-gradient(135deg, #1a1a1a, #2c2c2c);
            color: #fff;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #f39c12;
        }

        .contact-info p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        .contact-details {
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 1rem;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            transition: background 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(243, 156, 18, 0.2);
        }

        .contact-item i {
            font-size: 1.5rem;
            color: #f39c12;
            margin-right: 1rem;
            width: 30px;
        }

        .contact-form {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #f39c12;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            background: rgba(255,255,255,0.1);
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255,255,255,0.2);
            box-shadow: 0 0 0 2px #f39c12;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #f39c12, #e67e22);
            color: #fff;
            border: none;
            padding: 1rem;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: #fff;
            padding: 2rem 5%;
            text-align: center;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: #fff;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #f39c12;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .contact-content,
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            nav {
                padding: 1rem 3%;
            }

            .hero, .services, .about, .contact {
                padding: 3rem 3%;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .contact-info h2 {
                font-size: 2rem;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation for form submission */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 2px solid #f39c12;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <nav>
            <a href="#home" class="logo">BSB Metal and Trading</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>BSB Metal and Trading</h1>
            <p>Leading the industry with innovative metalworking services, precision engineering, and exceptional quality that exceeds expectations.</p>
            <a href="#contact" class="cta-button">Get Started Today</a>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="about">
        <h2 class="section-title">About BSB Metal and Trading</h2>
        <div class="about-content">
            <div class="about-text">
                <h2>Excellence in Metal Manufacturing</h2>
                <p>BSB Metal & Trading is an international metal trading firm headquartered in Toronto, Canada. We specialize in sourcing and supplying ferrous and non-ferrous scrap metals to global markets including India, Asia, and the Middle East.

With a strong focus on compliance, inspection standards, and secure payment structures, we ensure smooth transactions between buyers and suppliers..</p>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <i class="fas fa-industry"></i>
            </div>
        </div>
    </section>
        <!-- Services Section -->
    

    <section id="services" class="services">
        <h2 class="section-title">We Believe In</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-industry service-icon"></i>
                <h3>Long-term contracts</h3>
                <!-- <p>Custom metal fabrication services with precision cutting, welding, and forming to meet your exact specifications.</p> -->
            </div>
            <div class="service-card">
                <i class="fas fa-cogs service-icon"></i>
                <h3>Transparent documentation</h3>
                <!-- <p>Advanced CNC machining capabilities for complex parts and components with tight tolerances and superior finish.</p> -->
            </div>
            <div class="service-card">
                <i class="fas fa-hammer service-icon"></i>
                <h3>International inspection standards</h3>
                <!-- <p>Complete structural steel solutions for construction projects, from design consultation to final installation.</p> -->
            </div>
            <div class="service-card">
                <i class="fas fa-shield-alt service-icon"></i>
                <h3>Risk-managed payment structures</h3>
                <!-- <p>Professional metal finishing services including powder coating, anodizing, and surface treatments for durability.</p> -->
            </div>
            <div class="service-card">
                <i class="fas fa-tools service-icon"></i>
                <h3>Consistent monthly supply chains</h3>
                <!-- <p>Tailored metalworking solutions for unique projects and specialized applications across various industries.</p> -->
            </div>
            <!-- <div class="service-card">
                <i class="fas fa-shipping-fast service-icon"></i>
                <h3>Quick Turnaround</h3>
                <p>Fast and reliable service delivery without compromising on quality, meeting your project deadlines consistently.</p>
            </div> -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-container">
            <h2 class="section-title" style="color: #f39c12;">Contact Us</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>Ready to start your next metalworking project? Contact our experienced team today for a consultation and custom quote tailored to your specific needs.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Address</strong><br>
                                Toronto
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone</strong><br>
                                +1 514-629-6870
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong><br>
                                saurav.bhuva@bsbmetals.com
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Business Hours</strong><br>
                                Mon - Fri: 8:00 AM - 6:00 PM<br>
                                Sat: 9:00 AM - 4:00 PM
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" placeholder="Enter your company name">
                    </div>
                    <div class="form-group">
                        <label for="service">Service Needed</label>
                        <select id="service" name="service" style="width: 100%; padding: 1rem; border: none; border-radius: 10px; background: rgba(255,255,255,0.1); color: #fff; font-size: 1rem;">
                            <option value="">Select a service</option>
                            <option value="metal-fabrication">Metal Fabrication</option>
                            <option value="cnc-machining">CNC Machining</option>
                            <option value="structural-steel">Structural Steel</option>
                            <option value="metal-finishing">Metal Finishing</option>
                            <option value="custom-solutions">Custom Solutions</option>
                            <option value="consultation">Consultation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Please describe your project requirements, specifications, and timeline..."></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form> -->
            <!-- </div> -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div>
                <p>&copy; 2026 BSB Metal and Trading. All rights reserved.</p>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(26, 26, 26, 0.98)';
            } else {
                header.style.background = 'rgba(26, 26, 26, 0.95)';
            }
        });

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            
            // Add loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.classList.add('loading');
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(function() {
                submitBtn.textContent = 'Message Sent!';
                submitBtn.style.background = 'linear-gradient(45deg, #27ae60, #2ecc71)';
                
                // Reset form
                document.getElementById('contactForm').reset();
                
                // Reset button after 3 seconds
                setTimeout(function() {
                    submitBtn.textContent = originalText;
                    submitBtn.style.background = 'linear-gradient(45deg, #f39c12, #e67e22)';
                    submitBtn.classList.remove('loading');
                }, 3000);
            }, 2000);
        });

        // Mobile menu toggle (basic implementation)
        document.getElementById('mobileMenu').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .stat-item, .contact-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Add some interactive features
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Counter animation for stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target + (element.textContent.includes('%') ? '%' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + (element.textContent.includes('%') ? '%' : '+');
                }
            }, 20);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.textContent);
                        animateCounter(stat, target);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Form validation enhancements
        const inputs = document.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
                
                // Basic validation
                if (this.required && !this.value.trim()) {
                    this.style.borderLeft = '4px solid #e74c3c';
                } else if (this.type === 'email' && this.value && !this.value.includes('@')) {
                    this.style.borderLeft = '4px solid #e74c3c';
                } else {
                    this.style.borderLeft = '4px solid #27ae60';
                }
            });
        });
    </script>
</body>
</html>
