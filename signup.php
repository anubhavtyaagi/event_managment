<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malhaar - Sign Up</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    overflow: hidden;
    background-image: url('https://cdn.openart.ai/stable_diffusion/d090ab007228cfb8aa529522e8d1d7d7daa7d93f_2000x2000.webp');
    background-size: cover;       /* Ensures the image covers the entire background */
    background-position: center;  /* Centers the image */
    background-repeat: no-repeat; /* Prevents tiling of the image */
    background-attachment: fixed; /* Ensures the background stays fixed when scrolling */
}


        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the background */
            z-index: -1; /* Place behind the form */
        }

        .reg {
            position: absolute;
            top: 50%;
            left: 5%; /* Position on the left */
            transform: translateY(-50%); /* Center vertically */
            max-width: 300px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h3 {
            font-family: 'Cinzel', serif;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
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
</head>
<body>
    

    <div class="reg">
        <form method="POST" action="signup.php">
            <h1>Celebrations</h1>
            <h2 class="transition-text">Crafting moments to memories</h2> 
            <label for="username">Enter your username</label>
            <input type="text" id="username" name="username" placeholder="some@eg.com" required>
            <label for="password">Enter password</label>
            <input type="password" id="password" name="password" placeholder="8 char" required>
            
            <input type="submit" value="Sign up" name="submit1">
            <p>If you already have an account, <br>please <a class="login-link" href="login.php">login here</a>.</p>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $need = $_POST['need'];

        $con = mysqli_connect("localhost", "root", "WJ28@krhps");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS event_managment";
        mysqli_query($con, $sql);

        mysqli_select_db($con, "event_managment");

        // Modify the table to include the 'need' column
        $table = "CREATE TABLE IF NOT EXISTS registered (
                    username VARCHAR(50) PRIMARY KEY,
                    password VARCHAR(50),
                    need VARCHAR(50)
                )";
        mysqli_query($con, $table);

        // Insert values including 'need'
        $insertd = mysqli_query($con, "INSERT INTO registered(username, password, need) VALUES ('$username', '$password', '$need')");
        if (!$insertd) {
            echo "<script>alert('Username already taken');</script>";
        } else {
            header('Location: login.php');
            exit();
        }

        mysqli_close($con);
    }
    ?>
    <script>
        setTimeout(function() {
            document.querySelector('.transition-text').textContent = 'Crafting moments to memories';
        }, 5000);
    </script>
</body>
</html>
