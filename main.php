<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musiccollabhub.com</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            min-height: 100vh;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .navbar img.logo {
            height: 40px;
            margin-left: 20px;
        }

        .navbar li {
            display: inline-block;
            margin: 0 15px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #fff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar a:hover::before {
            transform: scaleX(1);
        }

        .navbar a:hover {
            color: #f0f0f0;
        }

        .login-links {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .login-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .login-links a:hover {
            color: #f0f0f0;
        }

        /* Hero Section Styles */
        .hero-section {
            background-image: url('https://cdn.openart.ai/stable_diffusion/d090ab007228cfb8aa529522e8d1d7d7daa7d93f_2000x2000.webp');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            animation: fadeIn 1s ease;
        }

        .hero-section h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: slideInFromTop 1s ease;
        }

        .hero-section p {
            font-size: 1.2em;
            max-width: 600px;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: slideInFromBottom 1s ease;
        }

        /* About Us Section Styles */
        .about-us-section {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
            margin-top: 100px;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .about-us-section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .about-us-section p {
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 30px auto;
        }

        /* Key Features Section Styles */
        .key-features-section {
            padding: 50px 20px;
            text-align: center;
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .key-features-heading {
            width: 100%;
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInFromLeft 1s ease;
        }

        .key-features {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .key-feature {
            flex: 1;
            max-width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin: 10px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }

        .key-feature:hover {
            transform: translateY(-5px);
        }

        .key-feature h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .key-feature p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        /* Footer Styles */
        footer {
            background-color: transparent;
            color: black;
            padding: 30px 20px;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            margin: 10px 0;
            font-size: 1.1em;
            color: black;
        }

        footer a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #f0f0f0;
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromBottom {
            from {
                transform: translateY(100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="https://p7.hiclipart.com/preview/72/807/772/guitar-hero-rock-logo-bass-guitar-guitar.jpg" class="logo" alt="Logo">
        <ul>
            <li><a href="#" class="selected">Home</a></li>
    
            <li><a href="submit_event.php">Book now</a></li>
            <li><a href="faq.php">FAQ'S</a></li>
        </ul>
        <div class="login-links">
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Celebrations</h1>
        <p>Crafting moments to memories.</p>
    </section>

    <!-- Add Background Music -->
    <audio autoplay loop>
        <source src="jazz.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- About Us Section -->
    <section class="about-us-section">
        <h2>About Us</h2>
        <p>At Celebrations, we believe in turning every celebration into a cherished memory. Specializing in event management for weddings, birthdays, youth parties, retirement celebrations, and more, we bring creativity and passion into every event. We also organize events for older adults, ensuring their parties are meaningful and memorable.</p>
    </section>

    <!-- Key Features Section -->
    <section class="key-features-section">
        <div class="key-features-heading">
            <h2>Our Key Features</h2>
        </div>
        <div class="key-features">
            <div class="key-feature">
                <h3>Unique Themes</h3>
                <p>Our themes cater to all kinds of celebrations, offering personalized services to make your event stand out.</p>
            </div>
            <div class="key-feature">
                <h3>Professional Setup</h3>
                <p>We provide complete event setups, from stage design to lighting and audio-visual solutions.</p>
            </div>
            <div class="key-feature">
                <h3>Creative Solutions</h3>
                <p>Our team brings innovative ideas to the table, ensuring your event is memorable and unique.</p>
            </div>
            <div class="key-feature">
                <h3>Old Age Celebrations</h3>
                <p>We organize heartfelt parties for older adults, ensuring their special moments are celebrated with love and care.</p>
            </div>
            <div class="key-feature">
                <h3>Gifts for Guests</h3>
                <p>Every invited guest receives a special gift, ensuring they leave the event with a cherished memory.</p>
            </div>
            <div class="key-feature">
                <h3>Exclusive Trips</h3>
                <p>We offer exclusive trips for your family and friends, making your celebrations even more unique and adventurous.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MusicCollabHub.com</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        <p>Contact us: 8860331254</p>
    </footer>

</body>
</html>
