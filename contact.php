<?php
// Include database connection
include_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('Gemini_Generated_Image_iqgrlkiqgrlkiqgr.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        header {
            background-color: rgba(26, 26, 26, 0.8);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 1px;
        }

        header nav a:hover {
            color: #f0b90b;
        }

        #intro h2 {
            font-size: 2.5em;
            color: #f0b90b;
        }

        #intro p {
            font-size: 1.2em;
            line-height: 1.5;
        }

        footer {
            margin-top: auto;
            text-align: center;
            padding: 20px;
            background-color: #000000;
            color: #ffffff;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .contact-info a {
            margin: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-info a:hover {
            color: #f0b90b;
        }

        .social-logos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .social-logos img {
            width: 40px;
            height: 40px;
            margin: 10px;
            filter: invert(1);
        }

        .social-logos img:hover {
            filter: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Me</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
        </nav>
    </header>

    <section class="contact-info">
        <h2>Get in Touch</h2>
        <p>Feel free to reach out to me through any of the platforms below:</p>
        <a href="mailto:maxtshikororo860@example.com">your-email@example.com</a>

        <div class="social-logos">
            <a href="https://www.linkedin.com/in/your-linkedin-profile/" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn">
            </a>
            <a href="https://github.com/your-github-username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25657.png" alt="GitHub">
            </a>
            <a href="https://www.twitter.com/your-twitter-handle" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/124/124021.png" alt="Twitter">
            </a>
            <a href="https://www.facebook.com/your-facebook-profile" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/your-instagram-handle" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/87/87390.png" alt="Instagram">
            </a>
            <a href="https://www.youtube.com/your-youtube-channel" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/138/138221.png" alt="YouTube">
            </a>
            <a href="https://www.twitch.tv/your-twitch-channel" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/888/888853.png" alt="Twitch">
            </a>
            <a href="https://stackoverflow.com/users/your-stack-overflow-id" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111832.png" alt="Stack Overflow">
            </a>
            <a href="https://www.reddit.com/user/your-reddit-username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111563.png" alt="Reddit">
            </a>
            <a href="https://discord.com/users/your-discord-username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968851.png" alt="Discord">
            </a>
            <a href="https://www.skype.com/your-skype-username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111993.png" alt="Skype">
            </a>
            <a href="https://zoom.us/my/your-zoom-meeting-id" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111942.png" alt="Zoom">
            </a>
        </div>
    </section>

    <footer>
        &copy; 2024 Dakalo Tshikororo. All rights reserved.
    </footer>
</body>
</html>