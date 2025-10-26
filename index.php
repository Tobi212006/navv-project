<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naav Maharashtra Vyamshala | Fitness with Swaraj Spirit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Marathi:ital@0;1&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #ff6600;
            --primary-black: #000;
            --dark-gray: #1a1a1a;
            --light-gray: #333;
            --white: #fff;
            --text-color: #f0f0f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-black);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .marathi-text {
            font-family: 'Tiro Devanagari Marathi', serif;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            transition: 0.4s;
            border-bottom: 2px solid var(--primary-orange);
        }

        header.sticky {
            padding: 15px 5%;
            background-color: var(--primary-black);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--white);
            margin-left: 10px;
        }

        .logo-text span {
            color: var(--primary-orange);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: 0.3s;
            position: relative;
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-orange);
            left: 0;
            bottom: -5px;
            transition: 0.3s;
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        nav ul li a:hover {
            color: var(--primary-orange);
        }

        .nav-btn {
            background: var(--primary-orange);
            color: var(--white);
            padding: 10px 25px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 15px rgba(255, 102, 0, 0.5);
        }

        .nav-btn:hover {
            background: #ff8533;
            box-shadow: 0 0 20px rgba(255, 102, 0, 0.7);
            transform: translateY(-2px);
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            z-index: 1;
            max-width: 900px;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero h1 span {
            color: var(--primary-orange);
        }

        .hero .marathi-tagline {
            font-size: 2rem;
            margin-bottom: 30px;
            color: var(--primary-orange);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-btn {
            background: var(--primary-orange);
            color: var(--white);
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 20px rgba(255, 102, 0, 0.7);
            animation: pulse 2s infinite;
        }

        .hero-btn:hover {
            background: #ff8533;
            box-shadow: 0 0 25px rgba(255, 102, 0, 0.9);
            transform: translateY(-3px);
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 102, 0, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(255, 102, 0, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 102, 0, 0);
            }
        }

        /* Section Styles */
        section {
            padding: 80px 5%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            text-transform: uppercase;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background: var(--primary-orange);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* About Section */
        .about {
            background-color: var(--dark-gray);
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary-orange);
        }

        .counters {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .counter {
            text-align: center;
            flex: 1;
            min-width: 150px;
        }

        .counter .number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-orange);
            margin-bottom: 10px;
        }

        .counter .label {
            font-size: 1.1rem;
            text-transform: uppercase;
        }

        /* Why Join Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .feature-card {
            background: var(--dark-gray);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            border-bottom: 3px solid var(--primary-orange);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 102, 0, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary-orange);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Facilities Section */
        .facilities {
            background-color: var(--dark-gray);
        }

        .facility-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .facility-card {
            background: var(--primary-black);
            border-radius: 10px;
            overflow: hidden;
            transition: 0.3s;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
        }

        .facility-img {
            height: 200px;
            background: #444;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-orange);
            font-size: 3rem;
        }

        .facility-content {
            padding: 20px;
        }

        .facility-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary-orange);
        }

        /* Trainers Section */
        .trainers {
            background-color: var(--primary-black);
        }

        .trainer-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .trainer-card {
            background: var(--dark-gray);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: 0.3s;
        }

        .trainer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
        }

        .trainer-img {
            height: 250px;
            background: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-orange);
            font-size: 5rem;
        }

        .trainer-content {
            padding: 20px;
        }

        .trainer-content h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: var(--primary-orange);
        }

        .trainer-role {
            color: #aaa;
            margin-bottom: 15px;
        }

        .trainer-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .trainer-social a {
            color: var(--white);
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .trainer-social a:hover {
            color: var(--primary-orange);
        }

        /* Membership Section */
        .membership {
            background-color: var(--dark-gray);
        }

        .plans {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .plan {
            background: var(--primary-black);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .plan.popular {
            border: 2px solid var(--primary-orange);
            transform: scale(1.05);
        }

        .plan.popular:before {
            content: 'MOST POPULAR';
            position: absolute;
            top: 15px;
            right: -35px;
            background: var(--primary-orange);
            color: var(--white);
            padding: 5px 40px;
            font-size: 0.9rem;
            transform: rotate(45deg);
        }

        .plan h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary-orange);
        }

        .plan .price {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
        }

        .plan .price span {
            font-size: 1rem;
            color: #aaa;
        }

        .plan ul {
            list-style: none;
            margin-bottom: 25px;
        }

        .plan ul li {
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }

        .plan-btn {
            background: var(--primary-orange);
            color: var(--white);
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .plan-btn:hover {
            background: #ff8533;
            box-shadow: 0 0 15px rgba(255, 102, 0, 0.5);
        }

        .special-offer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background: var(--primary-orange);
            border-radius: 10px;
            animation: glow 2s infinite;
        }

        @keyframes glow {
            0% { box-shadow: 0 0 10px var(--primary-orange); }
            50% { box-shadow: 0 0 20px var(--primary-orange); }
            100% { box-shadow: 0 0 10px var(--primary-orange); }
        }

        /* Registration Form Styles */
        .registration {
            background-color: var(--primary-black);
            padding: 80px 5%;
        }
        
        .registration-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--dark-gray);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .registration h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: var(--primary-orange);
        }
        
        .registration-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-full-width {
            grid-column: 1 / -1;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            background: #333;
            border: 1px solid #444;
            border-radius: 5px;
            color: var(--white);
            font-family: 'Poppins', sans-serif;
            transition: 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--primary-orange);
            outline: none;
            box-shadow: 0 0 0 2px rgba(255, 102, 0, 0.2);
        }
        
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background: var(--primary-orange);
            color: var(--white);
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            display: block;
            margin: 30px auto 0;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.4);
        }
        
        .submit-btn:hover {
            background: #ff8533;
            box-shadow: 0 8px 20px rgba(255, 102, 0, 0.6);
            transform: translateY(-3px);
        }
        
        .form-note {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Payment Modal */
        .payment-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .payment-modal.active {
            display: flex;
        }

        .payment-container {
            background: var(--dark-gray);
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            padding: 30px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .payment-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .payment-header h3 {
            color: var(--primary-orange);
            font-size: 1.8rem;
        }

        .payment-details {
            margin-bottom: 20px;
            padding: 15px;
            background: var(--primary-black);
            border-radius: 5px;
        }

        .payment-option {
            margin-bottom: 15px;
            padding: 15px;
            background: var(--primary-black);
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .payment-option:hover {
            background: #2a2a2a;
        }

        .payment-option.selected {
            border: 2px solid var(--primary-orange);
        }

        .payment-option input {
            margin-right: 10px;
        }

        .card-details {
            margin-top: 20px;
            display: none;
        }

        .card-details.active {
            display: block;
        }

        .upi-details {
            margin-top: 20px;
            display: none;
        }

        .upi-details.active {
            display: block;
        }

        /* Testimonials */
        .testimonials {
            background-color: var(--primary-black);
        }

        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .testimonial {
            background: var(--dark-gray);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin: 20px;
        }

        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            background: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-orange);
            font-size: 2rem;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--primary-orange);
        }

        /* Contact Section */
        .contact {
            background-color: var(--dark-gray);
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary-orange);
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-details p {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-details i {
            margin-right: 10px;
            color: var(--primary-orange);
        }

        .contact-form {
            flex: 1;
            min-width: 300px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            background: #333;
            border: 1px solid #444;
            border-radius: 5px;
            color: var(--white);
            font-family: 'Poppins', sans-serif;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--primary-orange);
            color: var(--white);
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #ff8533;
            box-shadow: 0 0 15px rgba(255, 102, 0, 0.5);
        }

        /* Footer */
        footer {
            background-color: var(--primary-black);
            padding: 60px 5% 30px;
            border-top: 2px solid var(--primary-orange);
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-orange);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: var(--text-color);
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-column ul li a:hover {
            color: var(--primary-orange);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--dark-gray);
            border-radius: 50%;
            color: var(--white);
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: var(--primary-orange);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
        }

        /* Floating Elements */
        .floating-whatsapp {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 60px;
            height: 60px;
            background: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 999;
            transition: 0.3s;
        }

        .floating-whatsapp:hover {
            transform: scale(1.1);
        }

        .floating-join {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-orange);
            color: var(--white);
            padding: 15px 25px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 999;
            transition: 0.3s;
            animation: pulse 2s infinite;
        }

        .floating-join:hover {
            transform: scale(1.05);
        }

        .back-to-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-orange);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 999;
            transition: 0.3s;
            opacity: 0;
            visibility: hidden;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3rem;
            }
            
            .hero .marathi-tagline {
                font-size: 1.5rem;
            }
            
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 250px;
                height: 100vh;
                background: var(--primary-black);
                flex-direction: column;
                padding-top: 80px;
                transition: 0.5s;
                z-index: 999;
            }
            
            nav ul.active {
                right: 0;
            }
            
            nav ul li {
                margin: 15px 0;
                text-align: center;
            }
            
            .hamburger {
                display: block;
                z-index: 1000;
            }
            
            .hamburger i {
                font-size: 1.8rem;
                color: var(--white);
            }
            
            .registration-form {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .plan.popular {
                transform: scale(1);
            }
            
            .registration-container {
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero .marathi-tagline {
                font-size: 1.2rem;
            }
            
            .hero-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }
            
            .counter .number {
                font-size: 2rem;
            }
            
            .floating-whatsapp,
            .floating-join {
                bottom: 20px;
                right: 20px;
                left: auto;
            }
            
            .floating-whatsapp {
                left: 20px;
                right: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <div class="logo-text">Naav <span>Maharashtra</span></div>
        </div>
        
        <nav>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#trainers">Trainers</a></li>
                <li><a href="#membership">Membership</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        
        <button class="nav-btn">Join Now</button>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Build Your <span>Strength</span>, Embrace Your <span>Roots</span></h1>
            <div class="marathi-tagline marathi-text">शरीर मजबूत, आत्मा अजेय</div>
            <p>At Naav Maharashtra Vyamshala, we combine modern fitness techniques with traditional Maharashtrian values to help you achieve your fitness goals while staying connected to your cultural roots.</p>
            <button class="hero-btn">Start Your Journey</button>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="section-title">
            <h2>About Us</h2>
        </div>
        
        <div class="about-content">
            <div class="about-text">
                <h3>Our Legacy</h3>
                <p>Founded in 2005, Naav Maharashtra Vyamshala has been serving the community of Kanjur Marg, Mumbai with dedication and pride. Our gym was established with the vision of creating a space where fitness meets culture, and where every individual can train their body and mind.</p>
                <p>We take inspiration from the great Maratha warriors and their discipline, incorporating those values into our training philosophy. Our trainers are not just experts in their fields but also passionate about preserving and promoting our cultural heritage.</p>
                
                <div class="counters">
                    <div class="counter">
                        <div class="number" data-target="1500">0</div>
                        <div class="label">Active Members</div>
                    </div>
                    <div class="counter">
                        <div class="number" data-target="15">0</div>
                        <div class="label">Expert Trainers</div>
                    </div>
                    <div class="counter">
                        <div class="number" data-target="18">0</div>
                        <div class="label">Years Experience</div>
                    </div>
                    <div class="counter">
                        <div class="number" data-target="50">0</div>
                        <div class="label">Events/Year</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Section -->
    <section id="features">
        <div class="section-title">
            <h2>Why Join Us</h2>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-rupee-sign"></i>
                </div>
                <h3>Affordable Pricing</h3>
                <p>We believe quality fitness training should be accessible to everyone. Our membership plans are designed to fit every budget.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Expert Trainers</h3>
                <p>Our certified trainers have years of experience and are committed to helping you achieve your fitness goals safely and effectively.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3>Modern Equipment</h3>
                <p>We regularly update our equipment to ensure you have access to the latest fitness technology for the best workout experience.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Community Vibe</h3>
                <p>Join a supportive community of fitness enthusiasts who motivate each other to push limits and achieve new milestones.</p>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities" id="facilities">
        <div class="section-title">
            <h2>Our Facilities</h2>
        </div>
        
        <div class="facility-cards">
            <div class="facility-card">
                <div class="facility-img">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <div class="facility-content">
                    <h3>Strength Training</h3>
                    <p>Our strength training area is equipped with the latest machines and free weights to help you build muscle and increase strength.</p>
                </div>
            </div>
            
            <div class="facility-card">
                <div class="facility-img">
                    <i class="fas fa-spa"></i>
                </div>
                <div class="facility-content">
                    <h3>Yoga & Meditation</h3>
                    <p>Find your inner peace and improve flexibility with our yoga classes that blend traditional techniques with modern approaches.</p>
                </div>
            </div>
            
            <div class="facility-card">
                <div class="facility-img">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <div class="facility-content">
                    <h3>Martial Arts</h3>
                    <p>Learn self-defense and discipline through our martial arts programs including traditional Indian martial arts forms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section class="trainers" id="trainers">
        <div class="section-title">
            <h2>Our Trainers</h2>
        </div>
        
        <div class="trainer-cards">
            <div class="trainer-card">
                <div class="trainer-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="trainer-content">
                    <h3>Rajesh More</h3>
                    <div class="trainer-role">Strength Training Coach</div>
                    <p>With over 10 years of experience, Rajesh specializes in strength building and body conditioning.</p>
                    <div class="trainer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="trainer-card">
                <div class="trainer-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="trainer-content">
                    <h3>Priya Patil</h3>
                    <div class="trainer-role">Yoga Instructor</div>
                    <p>Priya is a certified yoga teacher with expertise in traditional hatha yoga and meditation techniques.</p>
                    <div class="trainer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="trainer-card">
                <div class="trainer-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="trainer-content">
                    <h3>Vikram Deshmukh</h3>
                    <div class="trainer-role">Martial Arts Expert</div>
                    <p>Vikram has trained in various martial arts forms and specializes in self-defense and combat fitness.</p>
                    <div class="trainer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Section -->
    <section class="membership" id="membership">
        <div class="section-title">
            <h2>Membership Plans</h2>
        </div>
        
        <div class="plans">
            <div class="plan">
                <h3>Basic</h3>
                <div class="price">₹1999 <span>/month</span></div>
                <ul>
                    <li>Access to gym equipment</li>
                    <li>Locker facility</li>
                    <li>Fitness assessment</li>
                    <li>1 free personal training session</li>
                </ul>
                <button class="plan-btn" data-plan="basic" data-price="1999">Choose Plan</button>
            </div>
            
            <div class="plan popular">
                <h3>Premium</h3>
                <div class="price">₹3499 <span>/month</span></div>
                <ul>
                    <li>All Basic plan features</li>
                    <li>Unlimited group classes</li>
                    <li>4 personal training sessions</li>
                    <li>Nutrition planning</li>
                    <li>Tanning facility</li>
                </ul>
                <button class="plan-btn" data-plan="premium" data-price="3499">Choose Plan</button>
            </div>
            
            <div class="plan">
                <h3>Elite</h3>
                <div class="price">₹4999 <span>/month</span></div>
                <ul>
                    <li>All Premium plan features</li>
                    <li>Unlimited personal training</li>
                    <li>24/7 gym access</li>
                    <li>Complementary massage</li>
                    <li>Priority booking</li>
                </ul>
                <button class="plan-btn" data-plan="elite" data-price="4999">Choose Plan</button>
            </div>
        </div>
        
        <div class="special-offer">
            <h3>🔥 Special Limited Time Offer 🔥</h3>
            <p>First 50 members get a FREE gym kit (T-shirt + Towel + Water bottle)</p>
        </div>
    </section>

    <!-- Registration Section -->
    <section class="registration" id="register">
        <div class="section-title">
            <h2>Register for Membership</h2>
        </div>
        
        <div class="registration-container">
            <form class="registration-form" id="registrationForm">
                <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" min="16" max="80">
                </div>
                
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="plan">Membership Plan *</label>
                    <select id="plan" name="plan" required>
                        <option value="">Select a Plan</option>
                        <option value="basic">Basic - ₹1999/month</option>
                        <option value="premium">Premium - ₹3499/month</option>
                        <option value="elite">Elite - ₹4999/month</option>
                    </select>
                </div>
                
                <div class="form-group form-full-width">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" placeholder="Enter your full address"></textarea>
                </div>
                
                <div class="form-group form-full-width">
                    <label for="goals">Fitness Goals</label>
                    <textarea id="goals" name="goals" placeholder="Tell us about your fitness goals and any health conditions we should know about"></textarea>
                </div>
                
                <div class="form-group form-full-width">
                    <label for="reference">How did you hear about us?</label>
                    <select id="reference" name="reference">
                        <option value="">Select an option</option>
                        <option value="friend">Friend/Family</option>
                        <option value="social">Social Media</option>
                        <option value="walkin">Walk-in</option>
                        <option value="advertisement">Advertisement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group form-full-width">
                    <label>
                        <input type="checkbox" name="terms" required>
                        I agree to the <a href="#" style="color: var(--primary-orange);">terms and conditions</a> *
                    </label>
                </div>
                
                <button type="submit" class="submit-btn">Proceed to Payment</button>
                
                <p class="form-note">* Required fields. Our team will contact you within 24 hours to complete your registration.</p>
            </form>
        </div>
    </section>

    <!-- Payment Modal -->
    <div class="payment-modal" id="paymentModal">
        <div class="payment-container">
            <button class="close-modal" id="closeModal">&times;</button>
            
            <div class="payment-header">
                <h3>Complete Your Payment</h3>
                <p>You're one step away from joining Naav Maharashtra Vyamshala!</p>
            </div>
            
            <div class="payment-details">
                <h4>Order Summary</h4>
                <p id="selectedPlan">Plan: Premium Membership</p>
                <p id="paymentAmount">Amount: ₹3499</p>
            </div>
            
            <form id="paymentForm">
                <div class="form-group">
                    <label>Select Payment Method</label>
                    
                    <div class="payment-option" data-method="card">
                        <input type="radio" name="paymentMethod" value="card" id="cardPayment" required>
                        <label for="cardPayment">Credit/Debit Card</label>
                    </div>
                    
                    <div class="payment-option" data-method="upi">
                        <input type="radio" name="paymentMethod" value="upi" id="upiPayment">
                        <label for="upiPayment">UPI Payment</label>
                    </div>
                    
                    <div class="payment-option" data-method="netbanking">
                        <input type="radio" name="paymentMethod" value="netbanking" id="netbankingPayment">
                        <label for="netbankingPayment">Net Banking</label>
                    </div>
                </div>
                
                <div class="card-details" id="cardDetails">
                    <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456">
                    </div>
                    
                    <div class="form-group">
                        <label for="cardName">Name on Card</label>
                        <input type="text" id="cardName" placeholder="John Doe">
                    </div>
                    
                    <div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div>
                            <label for="expiryDate">Expiry Date</label>
                            <input type="text" id="expiryDate" placeholder="MM/YY">
                        </div>
                        <div>
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" placeholder="123">
                        </div>
                    </div>
                </div>
                
                <div class="upi-details" id="upiDetails">
                    <div class="form-group">
                        <label for="upiId">UPI ID</label>
                        <input type="text" id="upiId" placeholder="yourname@upi">
                    </div>
                    <p style="text-align: center; margin-top: 10px;">You will be redirected to your UPI app for payment</p>
                </div>
                
                <div class="form-group form-full-width">
                    <button type="submit" class="submit-btn" id="payNowBtn">Pay Now</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="section-title">
            <h2>What Our Members Say</h2>
        </div>
        
        <div class="testimonial-slider">
            <div class="testimonial">
                <div class="testimonial-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="testimonial-text">
                    "Naav Maharashtra Vyamshala is not just a gym, it's a community. The trainers are knowledgeable and supportive, and the cultural events make working out here a unique experience."
                </div>
                <div class="testimonial-author">- Sanjay K., Member for 3 years</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt"></i> 123 Fitness Street, Kanjur Marg, Mumbai</p>
                    <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                    <p><i class="fas fa-envelope"></i> info@naavmaharashtravyamshala.com</p>
                    <p><i class="fas fa-clock"></i> Monday-Saturday: 5AM-11PM, Sunday: 7AM-9PM</p>
                </div>
                
                <div class="map">
                    <!-- Simple map placeholder -->
                    <div style="background:#333; height:250px; display:flex; align-items:center; justify-content:center; border-radius:10px;">
                        <p>Google Maps Embed | Kanjur Marg, Mumbai</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="contactName">Full Name</label>
                        <input type="text" id="contactName" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contactEmail">Email Address</label>
                        <input type="email" id="contactEmail" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contactPhone">Phone Number</label>
                        <input type="tel" id="contactPhone">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactMessage">Your Message</label>
                        <textarea id="contactMessage" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Naav Maharashtra Vyamshala</h3>
                <p>Building stronger bodies and stronger communities with the spirit of Swaraj.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#trainers">Trainers</a></li>
                    <li><a href="#membership">Membership</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Fitness Street, Kanjur Marg, Mumbai</li>
                    <li><i class="fas fa-phone"></i> +91 98765 43210</li>
                    <li><i class="fas fa-envelope"></i> info@naavmaharashtravyamshala.com</li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2023 Naav Maharashtra Vyamshala. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Floating Elements -->
    <a href="#" class="floating-whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <a href="#register" class="floating-join">
        Join Now
    </a>
    
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
        // Sticky Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            const backToTop = document.querySelector('.back-to-top');
            
            if (window.scrollY > 100) {
                header.classList.add('sticky');
                backToTop.classList.add('active');
            } else {
                header.classList.remove('sticky');
                backToTop.classList.remove('active');
            }
        });

        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('nav ul');
        
        if (hamburger) {
            hamburger.addEventListener('click', function() {
                if (navMenu) {
                    navMenu.classList.toggle('active');
                    
                    if (navMenu.classList.contains('active')) {
                        hamburger.innerHTML = '<i class="fas fa-times"></i>';
                    } else {
                        hamburger.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        }

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (navMenu && navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        if (hamburger) {
                            hamburger.innerHTML = '<i class="fas fa-bars"></i>';
                        }
                    }
                }
            });
        });

        // Back to Top
        const backToTopBtn = document.querySelector('.back-to-top');
        if (backToTopBtn) {
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter .number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = Math.ceil(target / speed);
                
                if (count < target) {
                    counter.innerText = Math.min(count + increment, target);
                    setTimeout(animateCounters, 1);
                }
            });
        }

        // Initialize counters when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const aboutSection = document.querySelector('.about');
        if (aboutSection) {
            observer.observe(aboutSection);
        }

        // Registration Form Handling
        const registrationForm = document.getElementById('registrationForm');
        const paymentModal = document.getElementById('paymentModal');
        const closeModal = document.getElementById('closeModal');
        const paymentForm = document.getElementById('paymentForm');
        
        // Plan selection from membership section
        document.querySelectorAll('.plan-btn').forEach(button => {
            button.addEventListener('click', function() {
                const selectedPlan = this.getAttribute('data-plan');
                const selectedPrice = this.getAttribute('data-price');
                
                // Update the registration form
                const planSelect = document.getElementById('plan');
                if (planSelect) {
                    planSelect.value = selectedPlan;
                }
                
                // Scroll to registration form
                const registerSection = document.getElementById('register');
                if (registerSection) {
                    registerSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        if (registrationForm) {
            registrationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form elements safely
                const fullNameInput = document.getElementById('fullName');
                const emailInput = document.getElementById('email');
                const phoneInput = document.getElementById('phone');
                const planInput = document.getElementById('plan');
                const submitBtn = registrationForm.querySelector('.submit-btn');
                
                // Validation
                let isValid = true;
                const requiredFields = [fullNameInput, emailInput, phoneInput, planInput];
                
                requiredFields.forEach(field => {
                    if (field && !field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = 'red';
                    } else if (field) {
                        field.style.borderColor = '#444';
                    }
                });
                
                if (!isValid) {
                    alert('Please fill in all required fields.');
                    return;
                }

                // Show loading state
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Processing...';
                submitBtn.disabled = true;
                
                // Collect form data
                const formData = {
                    full_name: fullNameInput ? fullNameInput.value.trim() : '',
                    email: emailInput ? emailInput.value.trim() : '',
                    phone: phoneInput ? phoneInput.value.trim() : '',
                    age: document.getElementById('age') ? document.getElementById('age').value || null : null,
                    gender: document.getElementById('gender') ? document.getElementById('gender').value || null : null,
                    address: document.getElementById('address') ? document.getElementById('address').value.trim() || '' : '',
                    goals: document.getElementById('goals') ? document.getElementById('goals').value.trim() || '' : '',
                    membership_plan: planInput ? planInput.value : '',
                    reference: document.getElementById('reference') ? document.getElementById('reference').value || '' : ''
                };

                console.log('Registration data:', formData);

                // Simulate API call
                setTimeout(() => {
                    // Store data for payment
                    localStorage.setItem('member_id', 'demo_' + Math.random().toString(36).substr(2, 9));
                    localStorage.setItem('member_email', formData.email);
                    localStorage.setItem('membership_plan', formData.membership_plan);
                    
                    // Update payment modal with plan details
                    const selectedPlanElement = document.getElementById('selectedPlan');
                    const paymentAmountElement = document.getElementById('paymentAmount');
                    
                    if (selectedPlanElement) {
                        selectedPlanElement.textContent = `Plan: ${formData.membership_plan.charAt(0).toUpperCase() + formData.membership_plan.slice(1)} Membership`;
                    }
                    
                    if (paymentAmountElement) {
                        const amounts = {
                            'basic': 1999,
                            'premium': 3499,
                            'elite': 4999
                        };
                        const amount = amounts[formData.membership_plan] || 1999;
                        paymentAmountElement.textContent = `Amount: ₹${amount}`;
                    }
                    
                    // Show payment modal
                    if (paymentModal) {
                        paymentModal.classList.add('active');
                        document.body.style.overflow = 'hidden';
                    }
                    
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 1000);
            });
            
            // Reset border color when user starts typing
            const inputs = registrationForm.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.style.borderColor = '#444';
                });
            });
        }
        
        // Close payment modal
        if (closeModal) {
            closeModal.addEventListener('click', function() {
                if (paymentModal) {
                    paymentModal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
                localStorage.removeItem('member_id');
                localStorage.removeItem('member_email');
                localStorage.removeItem('membership_plan');
            });
        }
        
        // Payment method selection
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                document.querySelectorAll('.payment-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // Check the radio button
                const radio = this.querySelector('input[type="radio"]');
                if (radio) {
                    radio.checked = true;
                }
                
                // Show/hide payment details based on selection
                const method = this.getAttribute('data-method');
                const cardDetails = document.getElementById('cardDetails');
                const upiDetails = document.getElementById('upiDetails');
                
                // Hide all payment detail sections
                if (cardDetails) cardDetails.classList.remove('active');
                if (upiDetails) upiDetails.classList.remove('active');
                
                // Show the selected payment method details
                if (method === 'card' && cardDetails) {
                    cardDetails.classList.add('active');
                } else if (method === 'upi' && upiDetails) {
                    upiDetails.classList.add('active');
                }
            });
        });
        
        // Payment form submission
        if (paymentForm) {
            paymentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
                
                if (!paymentMethod) {
                    alert('Please select a payment method.');
                    return;
                }
                
                const memberId = localStorage.getItem('member_id');
                const plan = localStorage.getItem('membership_plan');
                const email = localStorage.getItem('member_email');
                
                if (!memberId || !plan) {
                    alert('Registration data missing. Please fill the registration form again.');
                    return;
                }
                
                // Show loading state
                const payNowBtn = document.getElementById('payNowBtn');
                const originalText = payNowBtn.textContent;
                payNowBtn.textContent = 'Processing...';
                payNowBtn.disabled = true;
                
                // Simulate payment processing
                setTimeout(() => {
                    alert('Payment successful! Welcome to Naav Maharashtra Vyamshala.');
                    if (paymentModal) paymentModal.classList.remove('active');
                    if (registrationForm) registrationForm.reset();
                    localStorage.clear();
                    document.body.style.overflow = 'auto';
                    
                    // Scroll to top
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    
                    payNowBtn.textContent = originalText;
                    payNowBtn.disabled = false;
                }, 3000);
            });
        }

        // Contact form handling
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form elements safely
                const nameInput = document.getElementById('contactName');
                const emailInput = document.getElementById('contactEmail');
                const phoneInput = document.getElementById('contactPhone');
                const messageInput = document.getElementById('contactMessage');
                const submitBtn = contactForm.querySelector('.submit-btn');
                
                // Get values safely
                const formData = {
                    name: nameInput ? nameInput.value.trim() : '',
                    email: emailInput ? emailInput.value.trim() : '',
                    phone: phoneInput ? phoneInput.value.trim() : '',
                    message: messageInput ? messageInput.value.trim() : ''
                };

                console.log('Contact data:', formData);

                // SIMPLE VALIDATION - Only check if fields are not empty
                if (!formData.name) {
                    alert('Please enter your name.');
                    if (nameInput) nameInput.focus();
                    return;
                }
                
                if (!formData.email) {
                    alert('Please enter your email address.');
                    if (emailInput) emailInput.focus();
                    return;
                }
                
                if (!formData.message) {
                    alert('Please enter your message.');
                    if (messageInput) messageInput.focus();
                    return;
                }

                // Show loading state
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert('Message sent successfully! We will contact you soon.');
                    contactForm.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 1000);
            });
        }

        // Debug helper - log to console when page loads
        console.log('Naav Maharashtra Vyamshala website loaded successfully');
        console.log('Available forms:', {
            registration: !!registrationForm,
            contact: !!contactForm,
            payment: !!paymentModal
        });
    </script>
</body>
</html>