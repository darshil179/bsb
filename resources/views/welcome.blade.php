<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSB Metal & Trading - Global Metal Trading, Built on Compliance and Consistency</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-light: #ffffff;
            --secondary-light: #f8f9fa;
            --accent-light: #e9ecef;
            --dark-bg: #2c3e50;
            --text-dark: #2c3e50;
            --text-medium: #495057;
            --text-light: #6c757d;
            --accent-color: #3498db;
            --accent-secondary: #2ecc71;
            --border-color: #dee2e6;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--primary-light);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center {
            text-align: center;
        }

        /* Announcement Bar */
        .announcement-bar {
            background-color: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 12px 20px;
            font-size: 14px;
        }

        /* Navigation */
        .navbar {
            background-color: var(--primary-light);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px var(--shadow);
        }

        .navbar.scrolled {
            padding: 15px 0;
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-dark);
            text-decoration: none;
            letter-spacing: 0.5px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-menu a {
            color: var(--text-dark);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
            position: relative;
            font-weight: 500;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }

        .nav-menu a:hover {
            color: var(--accent-color);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu-btn span {
            width: 25px;
            height: 2px;
            background-color: var(--text-dark);
            transition: all 0.3s ease;
        }

        /* Hero Section */
        .hero {
            padding: 140px 0 100px;
            position: relative;
            overflow: hidden;
            min-height: 650px;
            display: flex;
            align-items: center;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1565688534245-05d6b5be184a?w=1920&h=1080&fit=crop');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.96) 0%, rgba(248, 249, 250, 0.92) 100%);
            z-index: 2;
        }

        .hero .container {
            position: relative;
            z-index: 3;
        }

        .hero-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 600;
            margin-bottom: 25px;
            line-height: 1.2;
            letter-spacing: -0.5px;
            color: var(--text-dark);
        }

        .hero-subtitle {
            font-size: 19px;
            color: var(--text-medium);
            margin-bottom: 30px;
            line-height: 1.7;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        /* Trust Points */
        .trust-points {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 25px;
            margin-top: 60px;
        }

        .trust-item {
            text-align: center;
        }

        .trust-icon {
            width: 50px;
            height: 50px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 15px;
        }

        .trust-item p {
            font-size: 13px;
            color: var(--text-medium);
            font-weight: 500;
            line-height: 1.4;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: white;
            border-color: var(--accent-color);
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--text-dark);
            border: 2px solid var(--text-dark);
        }

        .btn-secondary:hover {
            background-color: var(--text-dark);
            color: white;
        }

        .btn-outline-white {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline-white:hover {
            background-color: white;
            color: var(--dark-bg);
        }

        /* Sections */
        .section {
            padding: 80px 0;
        }

        .section-dark {
            background-color: var(--secondary-light);
        }

        .section-light {
            background-color: var(--primary-light);
        }

        .section h2 {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
            color: var(--text-dark);
        }

        .section-intro {
            font-size: 22px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .section-subtitle {
            font-size: 18px;
            color: var(--text-medium);
            text-align: center;
            margin-bottom: 40px;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .product-card {
            background-color: white;
            padding: 35px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .product-card h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .product-card ul {
            list-style: none;
            padding-left: 0;
        }

        .product-card ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: var(--text-medium);
        }

        .product-card ul li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
            font-size: 20px;
        }

        .note {
            margin-top: 20px;
            padding: 15px;
            background-color: var(--accent-light);
            border-left: 4px solid var(--accent-color);
            font-size: 14px;
        }

        /* Who We Serve */
        .serve-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .serve-item {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .serve-item:hover {
            border-color: var(--accent-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px var(--shadow);
        }

        .serve-item h3 {
            font-size: 18px;
            color: var(--text-dark);
            font-weight: 600;
        }

        .highlight-text {
            font-size: 18px;
            font-weight: 600;
            color: var(--accent-color);
            margin-top: 30px;
        }

        /* Featured Program */
        .featured-program {
            background: linear-gradient(135deg, var(--accent-color), #2980b9);
            padding: 60px;
            border-radius: 10px;
            text-align: center;
            color: white;
        }

        .featured-program h2 {
            color: white;
            margin-bottom: 20px;
        }

        .featured-program p {
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        /* Why BSB */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .why-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        .why-icon {
            width: 40px;
            height: 40px;
            background-color: var(--accent-secondary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .why-item p {
            color: var(--text-medium);
            font-size: 16px;
            margin: 0;
        }

        /* Process Steps */
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .process-step {
            text-align: center;
            padding: 30px 20px;
            background-color: white;
            border-radius: 8px;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .process-step:hover {
            border-color: var(--accent-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px var(--shadow);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        .process-step h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .process-step p {
            font-size: 14px;
            color: var(--text-light);
        }

        /* About Section */
        .about-content {
            max-width: 900px;
            margin: 40px auto;
        }

        .about-content > p {
            font-size: 18px;
            color: var(--text-medium);
            margin-bottom: 40px;
            line-height: 1.8;
            text-align: center;
        }

        .mission-values {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .mission-card, .values-card {
            background-color: white;
            padding: 35px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .mission-card h3, .values-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .mission-card p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
        }

        .values-card ul {
            list-style: none;
            padding: 0;
        }

        .values-card ul li {
            padding: 10px 0;
            color: var(--text-medium);
            font-size: 16px;
        }

        .different-section {
            background-color: var(--accent-light);
            padding: 35px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
        }

        .different-section h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .different-section p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
        }

        /* Detailed Products */
        .detailed-products {
            display: grid;
            gap: 30px;
            margin: 40px 0;
        }

        .product-category {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .product-category h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--accent-color);
            border-bottom: 2px solid var(--accent-light);
            padding-bottom: 10px;
        }

        .product-category ul {
            list-style: none;
            padding: 0;
        }

        .product-category ul li {
            padding: 10px 0;
            padding-left: 25px;
            position: relative;
            color: var(--text-medium);
        }

        .product-category ul li:before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
        }

        .packing-info {
            background-color: var(--accent-light);
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-secondary);
        }

        .packing-info h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .packing-info p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .service-card {
            background-color: white;
            padding: 35px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px var(--shadow);
        }

        .service-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .service-card p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .service-card ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .service-card ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: var(--text-medium);
            font-size: 15px;
        }

        .service-card ul li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-secondary);
            font-weight: bold;
        }

        /* Compliance Content */
        .compliance-content {
            display: grid;
            gap: 30px;
            margin: 40px 0;
        }

        .compliance-card {
            background-color: white;
            padding: 35px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .compliance-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .compliance-card p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .compliance-card ul {
            list-style: none;
            padding: 0;
        }

        .compliance-card ul li {
            padding: 10px 0;
            padding-left: 25px;
            position: relative;
            color: var(--text-medium);
        }

        .compliance-card ul li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-secondary);
            font-weight: bold;
        }

        /* Detailed Process */
        .detailed-process {
            display: grid;
            gap: 25px;
            margin: 40px 0;
        }

        .detailed-step {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .detailed-step h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .detailed-step p {
            font-size: 16px;
            color: var(--text-medium);
            margin-bottom: 10px;
        }

        .detailed-step ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .detailed-step ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: var(--text-medium);
        }

        .detailed-step ul li:before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
        }

        /* Documents Grid */
        .documents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .document-item {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .document-item:hover {
            border-color: var(--accent-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px var(--shadow);
        }

        .doc-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .document-item p {
            font-size: 15px;
            color: var(--text-medium);
            font-weight: 500;
        }

        /* FAQ Section */
        .faq-list {
            max-width: 900px;
            margin: 40px auto;
        }

        .faq-item {
            background-color: white;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            box-shadow: 0 2px 10px var(--shadow);
        }

        .faq-item h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .faq-item p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.7;
        }

        /* Contact Section */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
            margin-top: 40px;
        }

        .contact-info h3 {
            font-size: 28px;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .contact-title {
            font-size: 18px;
            color: var(--text-medium);
            margin-bottom: 30px;
            font-weight: 500;
        }

        .contact-details {
            background-color: var(--accent-light);
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
        }

        .contact-details p {
            margin-bottom: 12px;
            font-size: 16px;
            color: var(--text-medium);
        }

        .contact-details a {
            color: var(--accent-color);
            text-decoration: none;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        /* Contact Form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .contact-form input,
        .contact-form select,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            background-color: white;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            color: var(--text-dark);
            font-size: 15px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form select:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: var(--text-light);
        }

        .contact-form button {
            width: fit-content;
        }

        /* CTA Banner */
        .cta-banner {
            background: linear-gradient(135deg, var(--dark-bg), #34495e);
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .cta-banner h2 {
            color: white;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .cta-info {
            margin-bottom: 35px;
        }

        .cta-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Footer */
        .footer {
            padding: 60px 0 40px;
            background-color: var(--dark-bg);
            border-top: 1px solid var(--border-color);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-left h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: white;
        }

        .footer-left p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 8px;
        }

        .footer-right {
            display: flex;
            gap: 60px;
        }

        .footer-menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
            list-style: none;
        }

        .footer-menu a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-menu a:hover {
            color: white;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .fade-in-delay-1 {
            animation: fadeIn 1s ease 0.2s forwards;
            opacity: 0;
        }

        .fade-in-delay-2 {
            animation: fadeIn 1s ease 0.4s forwards;
            opacity: 0;
        }

        .fade-in-delay-3 {
            animation: fadeIn 1s ease 0.6s forwards;
            opacity: 0;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 40px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 32px;
            font-weight: bold;
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s;
        }

        .modal-close:hover {
            color: var(--text-dark);
        }

        .modal-content h2 {
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .modal-content p {
            font-size: 16px;
            color: var(--text-medium);
            line-height: 1.8;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .hero h1 {
                font-size: 42px;
            }

            .section h2 {
                font-size: 32px;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .footer-content {
                flex-direction: column;
                gap: 30px;
            }

            .footer-right {
                flex-direction: column;
                gap: 25px;
            }

            .trust-points {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 71px;
                flex-direction: column;
                background-color: white;
                width: 100%;
                text-align: center;
                transition: left 0.3s ease;
                gap: 0;
                padding: 20px 0;
                border-bottom: 1px solid var(--border-color);
                box-shadow: 0 10px 30px var(--shadow);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                padding: 15px 0;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .mobile-menu-btn.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .mobile-menu-btn.active span:nth-child(2) {
                opacity: 0;
            }

            .mobile-menu-btn.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }

            .hero {
                padding: 100px 0 80px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero-subtitle {
                font-size: 17px;
            }

            .section {
                padding: 60px 0;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .products-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }

            .process-steps {
                grid-template-columns: 1fr;
            }

            .trust-points {
                grid-template-columns: 1fr;
            }

            .featured-program {
                padding: 40px 25px;
            }

            .cta-banner h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 28px;
            }

            .section h2 {
                font-size: 26px;
            }

            .product-card,
            .service-card,
            .compliance-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Announcement Bar -->
    <div class="announcement-bar">
        <p>Verified Suppliers & Buyers | SGS/BV/Intertek Inspection Options | Secure Payment Structures</p>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="#home" class="logo">BSB Metal & Trading</a>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#compliance">Compliance</a></li>
                    <li><a href="#how-we-work">How We Work</a></li>
                    <li><a href="#documents">Documents</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="fade-in">Global Metal Trading, Built on Compliance and Consistency</h1>
                <p class="hero-subtitle fade-in-delay-1">BSB Metal & Trading sources and supplies ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide—focused on transparent execution, quality control, and secure trade terms.</p>
                <div class="hero-buttons fade-in-delay-2">
                    <a href="#contact" class="btn btn-primary">Request a Quote</a>
                    <a href="#contact" class="btn btn-secondary">Become a Supplier</a>
                </div>
                
                <!-- Trust Points -->
                <div class="trust-points fade-in-delay-3">
                    <div class="trust-item">
                        <div class="trust-icon">✓</div>
                        <p>Verified Suppliers & Buyers</p>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">✓</div>
                        <p>SGS/BV/Intertek Inspection Options</p>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">✓</div>
                        <p>Secure Payment Structures (LC/SBLC/DLC)</p>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">✓</div>
                        <p>Incoterms® 2020 Support (FOB/CFR/CIF)</p>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">✓</div>
                        <p>Documentation & Compliance Driven</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Trade Section -->
    <section class="section section-light">
        <div class="container">
            <h2>What We Trade</h2>
            <div class="products-grid">
                <div class="product-card">
                    <h3>Non-Ferrous Metals & Scrap</h3>
                    <ul>
                        <li>Aluminium Scrap (UBC, Taint/Tabor, Tense, etc.)</li>
                        <li>Copper, Brass, Zinc, Lead (subject to compliance and availability)</li>
                        <li>Aluminium Ingots (A7 and other grades on request)</li>
                    </ul>
                </div>
                <div class="product-card">
                    <h3>Ferrous Metals</h3>
                    <ul>
                        <li>HMS 1&2 and other ferrous grades on request</li>
                    </ul>
                    <p class="note"><strong>Note:</strong> Product availability depends on origin, inspection requirements, and buyer specification.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="#products" class="btn btn-primary">View Products</a>
            </div>
        </div>
    </section>

    <!-- Who We Serve Section -->
    <section class="section section-dark">
        <div class="container">
            <h2>Who We Serve</h2>
            <div class="serve-grid">
                <div class="serve-item">
                    <h3>Downstream Processors & Smelters</h3>
                </div>
                <div class="serve-item">
                    <h3>Foundries and Manufacturing Units</h3>
                </div>
                <div class="serve-item">
                    <h3>Large Importers and Trading Houses</h3>
                </div>
            </div>
            <p class="text-center highlight-text">We prioritize long-term monthly supply programs and stable partnerships.</p>
        </div>
    </section>

    <!-- Featured Program Section -->
    <section class="section section-light">
        <div class="container">
            <div class="featured-program">
                <h2>UBC Aluminium Scrap — Monthly Supply Programs</h2>
                <p>We support structured monthly programs for UBC aluminium scrap based on buyer specs, inspection, and payment security. Typical volumes can scale to consistent monthly shipments depending on supplier capacity and execution plan.</p>
                <a href="#contact" class="btn btn-primary">Discuss Monthly Supply</a>
            </div>
        </div>
    </section>

    <!-- Why BSB Section -->
    <section class="section section-dark">
        <div class="container">
            <h2>Why BSB Metal & Trading</h2>
            <p class="section-intro">Execution matters more than promises.</p>
            <p class="section-subtitle">We operate with a focus on:</p>
            <div class="why-grid">
                <div class="why-item">
                    <div class="why-icon">✓</div>
                    <p>Clear specs and confirmed packing standards</p>
                </div>
                <div class="why-item">
                    <div class="why-icon">✓</div>
                    <p>Pre-shipment inspection (when required)</p>
                </div>
                <div class="why-item">
                    <div class="why-icon">✓</div>
                    <p>Clean documentation and shipping discipline</p>
                </div>
                <div class="why-item">
                    <div class="why-icon">✓</div>
                    <p>Transparent pricing logic tied to market conditions</p>
                </div>
                <div class="why-item">
                    <div class="why-icon">✓</div>
                    <p>Professional communication and timelines</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Mini Steps -->
    <section class="section section-light">
        <div class="container">
            <h2>How We Work</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Requirement Confirmation</h3>
                    <p>Grade/spec, quantity, destination, incoterm</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Supplier Sourcing & Offer</h3>
                    <p>Photos, inspection terms, loading plan</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Contract & Payment Security</h3>
                    <p>SPA/IMFPA/LC structure as applicable</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Inspection & Stuffing</h3>
                    <p>SGS/BV/Intertek if agreed</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h3>Shipment & Documents</h3>
                    <p>BL, COO, invoice, packing list, etc.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="#how-we-work" class="btn btn-primary">See Full Process</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section section-dark" id="about">
        <div class="container">
            <h2>About BSB Metal & Trading</h2>
            <div class="about-content">
                <p>BSB Metal & Trading is a Toronto-based international trading company focused on ferrous and non-ferrous metals and scrap. We connect verified suppliers with established downstream buyers through disciplined execution, strong documentation, and secure trade structures.</p>
                
                <div class="mission-values">
                    <div class="mission-card">
                        <h3>Our Mission</h3>
                        <p>To build long-term supply relationships by delivering consistent quality, transparent communication, and compliant international trade execution.</p>
                    </div>
                    
                    <div class="values-card">
                        <h3>Our Values</h3>
                        <ul>
                            <li><strong>Integrity:</strong> Clear terms, honest capability, zero shortcuts</li>
                            <li><strong>Compliance:</strong> Documentation, inspection, and origin transparency</li>
                            <li><strong>Reliability:</strong> Timelines, logistics coordination, and performance</li>
                            <li><strong>Partnership:</strong> Repeat business over one-time transactions</li>
                        </ul>
                    </div>
                </div>
                
                <div class="different-section">
                    <h3>What Makes Us Different</h3>
                    <p>We prioritize process and control—spec confirmation, inspection options, packing standards, and correct paperwork—so both supplier and buyer can scale monthly business with confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section section-light" id="products">
        <div class="container">
            <h2>Products We Handle</h2>
            <p class="section-subtitle">Below grades are handled subject to availability, origin compliance, and buyer specs.</p>
            
            <div class="detailed-products">
                <div class="product-category">
                    <h3>Aluminium</h3>
                    <ul>
                        <li>UBC Aluminium Scrap (Used Beverage Cans) – mixed/loose/baled (as per spec)</li>
                        <li>Taint/Tabor</li>
                        <li>Tense</li>
                        <li>Aluminium Ingots (A7 and other grades on request)</li>
                    </ul>
                </div>
                
                <div class="product-category">
                    <h3>Copper / Brass / Other Non-Ferrous</h3>
                    <ul>
                        <li>Copper scrap grades (as per ISRI / mutually agreed spec)</li>
                        <li>Brass scrap grades (as per spec)</li>
                        <li>Zinc / lead grades (on request and compliance-dependent)</li>
                    </ul>
                </div>
                
                <div class="product-category">
                    <h3>Ferrous</h3>
                    <ul>
                        <li>HMS 1&2 and other ferrous grades (on request)</li>
                    </ul>
                </div>
                
                <div class="packing-info">
                    <h3>Packing & Loading</h3>
                    <p>Packing can include bales, bundles, or seaworthy loose loading depending on grade and buyer requirement. Loading ports depend on origin and supplier yard location.</p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#contact" class="btn btn-primary">Request Current Availability</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section section-dark" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Global Sourcing & Supply Programs</h3>
                    <p>We source metals and scrap from reliable yards and networks and structure monthly supply programs for industrial buyers.</p>
                </div>
                
                <div class="service-card">
                    <h3>Import/Export Trade Execution</h3>
                    <p>Support for Incoterms® 2020 (FOB/CFR/CIF), shipping coordination, and document handling.</p>
                </div>
                
                <div class="service-card">
                    <h3>Quality & Inspection Coordination</h3>
                    <p>Inspection options through SGS / BV / Intertek or mutually agreed agencies, including quantity, quality, and radiation checks where applicable.</p>
                </div>
                
                <div class="service-card">
                    <h3>Documentation Management</h3>
                    <p>We coordinate standard export documentation such as:</p>
                    <ul>
                        <li>Commercial Invoice</li>
                        <li>Packing List</li>
                        <li>Bill of Lading</li>
                        <li>Certificate of Origin</li>
                        <li>Inspection Certificate (if required)</li>
                        <li>Radiation-Free Certificate (when applicable)</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <h3>Supplier Onboarding</h3>
                    <p>We work with suppliers to confirm specs, packing standards, loading readiness, and payment expectations before proceeding.</p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#contact" class="btn btn-primary">Work With Us</a>
            </div>
        </div>
    </section>

    <!-- Compliance & Quality Section -->
    <section class="section section-light" id="compliance">
        <div class="container">
            <h2>Compliance & Quality</h2>
            
            <div class="compliance-content">
                <div class="compliance-card">
                    <h3>Compliance First</h3>
                    <p>International scrap and metal trade requires strong compliance. BSB Metal & Trading supports structured transactions aligned with:</p>
                    <ul>
                        <li>Buyer specifications and agreed standards (e.g., ISRI where applicable)</li>
                        <li>Clean documentation and origin clarity</li>
                        <li>Inspection and radiation checks where required</li>
                        <li>Seaworthy packing and loading discipline</li>
                    </ul>
                </div>
                
                <div class="compliance-card">
                    <h3>Quality Controls (Typical)</h3>
                    <ul>
                        <li>Photos/videos of stock before contracting (as available)</li>
                        <li>Pre-shipment inspection (if agreed)</li>
                        <li>Moisture/contamination control per spec</li>
                        <li>Weight verification and stuffing supervision options</li>
                    </ul>
                </div>
                
                <div class="compliance-card">
                    <h3>Payment Security</h3>
                    <p>We support secure transaction structures such as LC at sight / SBLC / DLC / bank-to-bank terms, depending on counterparty profile and deal structure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Detailed Section -->
    <section class="section section-dark" id="how-we-work">
        <div class="container">
            <h2>How We Work — Detailed Process</h2>
            
            <div class="detailed-process">
                <div class="detailed-step">
                    <h3>Step 1 — Requirement & Spec Confirmation</h3>
                    <p>We confirm:</p>
                    <ul>
                        <li>Grade/spec and allowed tolerance</li>
                        <li>Quantity and shipment schedule</li>
                        <li>Destination port and Incoterms</li>
                        <li>Inspection requirement</li>
                        <li>Payment instrument and timeline</li>
                    </ul>
                </div>
                
                <div class="detailed-step">
                    <h3>Step 2 — Sourcing & Offer</h3>
                    <p>We share:</p>
                    <ul>
                        <li>Supplier capability and monthly capacity (when available)</li>
                        <li>Packing/loading method</li>
                        <li>Price offer and validity</li>
                        <li>Photos/videos/yard details (as available)</li>
                    </ul>
                </div>
                
                <div class="detailed-step">
                    <h3>Step 3 — Contracting</h3>
                    <p>Depending on deal structure:</p>
                    <ul>
                        <li>Sales & Purchase Agreement (SPA)</li>
                        <li>IMFPA / NCNDA (if applicable)</li>
                        <li>Procedure and document list</li>
                    </ul>
                </div>
                
                <div class="detailed-step">
                    <h3>Step 4 — Inspection & Stuffing</h3>
                    <ul>
                        <li>Inspection by agreed agency (SGS/BV/Intertek)</li>
                        <li>Stuffing/loading coordination</li>
                        <li>Final document preparation</li>
                    </ul>
                </div>
                
                <div class="detailed-step">
                    <h3>Step 5 — Shipment & Documentation</h3>
                    <ul>
                        <li>BL issuance</li>
                        <li>Courier/soft copy docs</li>
                        <li>Buyer clearance support (as needed)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section class="section section-light" id="documents">
        <div class="container">
            <h2>Documents Available Upon Request</h2>
            <div class="documents-grid">
                <div class="document-item">
                    <div class="doc-icon">📄</div>
                    <p>Company profile</p>
                </div>
                <div class="document-item">
                    <div class="doc-icon">📋</div>
                    <p>Product specifications / ISRI references</p>
                </div>
                <div class="document-item">
                    <div class="doc-icon">⭐</div>
                    <p>Past performance references</p>
                </div>
                <div class="document-item">
                    <div class="doc-icon">✅</div>
                    <p>Standard document checklist</p>
                </div>
                <div class="document-item">
                    <div class="doc-icon">🔐</div>
                    <p>KYC pack (as required)</p>
                </div>
            </div>
            <div class="text-center">
                <a href="#contact" class="btn btn-primary">Request Documents</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-dark" id="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Do you work with trial shipments?</h3>
                    <p>Yes. Trial shipments can be arranged based on grade, origin, and secure payment/inspection structure.</p>
                </div>
                
                <div class="faq-item">
                    <h3>What inspections do you support?</h3>
                    <p>SGS, BV, Intertek, or mutually agreed inspection agencies depending on origin and deal terms.</p>
                </div>
                
                <div class="faq-item">
                    <h3>What Incoterms do you support?</h3>
                    <p>FOB, CFR, and CIF (Incoterms® 2020), depending on supplier capability and buyer requirement.</p>
                </div>
                
                <div class="faq-item">
                    <h3>What documents are typically included?</h3>
                    <p>Invoice, Packing List, Bill of Lading, Certificate of Origin, and inspection/radiation documents when applicable.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Which markets do you serve?</h3>
                    <p>Worldwide, with structured programs for consistent buyers and suppliers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section section-light" id="contact">
        <div class="container">
            <h2>Contact BSB Metal & Trading</h2>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Saurav Bhuva</h3>
                    <p class="contact-title">Principal | BSB Metal & Trading</p>
                    <div class="contact-details">
                        <p><strong>Location:</strong> Toronto, Canada</p>
                        <p><strong>Phone:</strong> <a href="tel:+15146296870">+1 514 629 6870</a></p>
                        <p><strong>Email:</strong> <a href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a></p>
                    </div>
                </div>
                
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <input type="text" placeholder="Name *" required>
                        <input type="text" placeholder="Company Name *" required>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Country *" required>
                        <select required>
                            <option value="">You are a... *</option>
                            <option value="buyer">Buyer</option>
                            <option value="supplier">Supplier</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Product & Grade *" required>
                        <input type="text" placeholder="Monthly Quantity *" required>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Target Price / Indication">
                        <select>
                            <option value="">Incoterm</option>
                            <option value="fob">FOB</option>
                            <option value="cfr">CFR</option>
                            <option value="cif">CIF</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Destination Port">
                    <input type="text" placeholder="Payment Method Preference">
                    <textarea placeholder="Message / Notes *" rows="5" required></textarea>
                    <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner">
        <div class="container">
            <h2>Ready to buy or supply metals reliably?</h2>
            <div class="cta-info">
                <p><strong>Email:</strong> saurav.bhuva@bsbmetals.com</p>
                <p><strong>Phone:</strong> +1 514 629 6870</p>
                <p><strong>Location:</strong> Toronto, Canada</p>
            </div>
            <div class="cta-buttons">
                <a href="#contact" class="btn btn-primary">Request a Quote</a>
                <a href="#contact" class="btn btn-outline-white">Become a Supplier</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <h3>BSB Metal & Trading</h3>
                    <p>Global Metal Trading, Built on Compliance and Consistency</p>
                    <p>© Copyright 2026 BSB Metal & Trading</p>
                </div>
                <div class="footer-right">
                    <ul class="footer-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#compliance">Compliance</a></li>
                    </ul>
                    <ul class="footer-menu">
                        <li><a href="#how-we-work">How We Work</a></li>
                        <li><a href="#documents">Documents</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#" id="privacyLink">Privacy Policy</a></li>
                        <li><a href="#" id="termsLink">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" id="closePrivacy">&times;</span>
            <h2>Privacy Policy</h2>
            <p>BSB Metal & Trading respects your privacy. Information shared via our contact forms (name, email, company, trade requirements) is used only to respond to your inquiry and evaluate business cooperation. We do not sell personal information. We may store communications for compliance and business record purposes. For removal requests, contact us at saurav.bhuva@bsbmetals.com.</p>
        </div>
    </div>

    <!-- Terms & Conditions Modal -->
    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" id="closeTerms">&times;</span>
            <h2>Terms & Conditions</h2>
            <p>All offers are subject to availability, prior sale, and final confirmation of specifications, inspection, payment instrument, and contract terms. BSB Metal & Trading may require KYC documents to proceed with any transaction. Any transaction proceeds only upon mutually signed agreement and agreed procedure.</p>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                
                if (target) {
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form submission handler
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Message Sent!';
                submitBtn.style.backgroundColor = '#2ecc71';
                
                // Reset form
                contactForm.reset();
                
                // Reset button after 3 seconds
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.style.backgroundColor = '';
                    submitBtn.disabled = false;
                }, 3000);
            }, 1500);
        });

        // Modal functionality
        const privacyModal = document.getElementById('privacyModal');
        const termsModal = document.getElementById('termsModal');
        const privacyLink = document.getElementById('privacyLink');
        const termsLink = document.getElementById('termsLink');
        const closePrivacy = document.getElementById('closePrivacy');
        const closeTerms = document.getElementById('closeTerms');

        privacyLink.addEventListener('click', (e) => {
            e.preventDefault();
            privacyModal.style.display = 'block';
        });

        termsLink.addEventListener('click', (e) => {
            e.preventDefault();
            termsModal.style.display = 'block';
        });

        closePrivacy.addEventListener('click', () => {
            privacyModal.style.display = 'none';
        });

        closeTerms.addEventListener('click', () => {
            termsModal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (e.target === termsModal) {
                termsModal.style.display = 'none';
            }
        });

        // Active navigation highlighting
        const sections = document.querySelectorAll('section[id]');
        function highlightNavigation() {
            const scrollY = window.pageYOffset;

            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute('id');
                const navLink = document.querySelector(`.nav-menu a[href="#${sectionId}"]`);

                if (navLink && scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLink.style.color = 'var(--accent-color)';
                } else if (navLink) {
                    navLink.style.color = 'var(--text-dark)';
                }
            });
        }

        window.addEventListener('scroll', highlightNavigation);

        // Page load fade-in
        document.body.style.opacity = '0';
        window.addEventListener('load', () => {
            document.body.style.transition = 'opacity 0.5s ease';
            document.body.style.opacity = '1';
        });
    </script>
</body>
</html>