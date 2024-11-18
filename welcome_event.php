<!DOCTYPE html>
<html>
<head>
    <title>Malhaar</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    overflow: hidden;
    background-image: url('bg.png');
    background-size: cover;       /* Ensures the image covers the entire background */
    background-position: center;  /* Centers the image */
    background-repeat: no-repeat; /* Prevents tiling of the image */
    background-attachment: fixed; /* Ensures the background stays fixed when scrolling */
}


.reg {
    max-width: 350px;
    background-color: rgba(255, 255, 255, 0.4); /* Transparent white background */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-right: auto;
    margin-left: 20px;
    margin-top: 120px; /* Increased value to move it further down */
    z-index: 1; /* Ensure it's above the video */
}


        h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .lists {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .lists li {
            margin-bottom: 10px;
        }

        .lists a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #ffffff;
            background-color: #2980b9;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%; /* Set the video width to cover the entire viewport */
            height: 100%; /* Set the video height to cover the entire viewport */
            object-fit: cover; /* Ensure the video maintains aspect ratio and covers the viewport */
            z-index: -1000;
        }

        .lists a:hover {
            background-color: #1a5276;
        }

        @keyframes textTransition {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .transition-text {
            animation: textTransition 5s infinite;
        }
    </style>
     <link rel="icon" type="image/x-icon" href="icon.png" />
</head>
<body>
    <div class="reg">
        <h1 style="font-family: 'Cinzel', serif;">Celebrations</h1>
        <h2 class="transition-text">Crafting moments to memories</h2> 
        <ul class="lists">
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </div>
    
    <script>
        setTimeout(function() {
            document.querySelector('.transition-text').textContent = 'Crafting moments to memories';
        }, 5000);
    </script>
</body>
</html>
