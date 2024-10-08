<!-- projects.php -->
<?php
$projects = [
    ['name' => 'Portfolio Website', 'link' => '#', 'description' => 'A portfolio website to showcase my skills and projects.'],
    ['name' => 'E-commerce Platform', 'link' => '#', 'description' => 'An online platform for selling products.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <style> 
        body {
    background-image: url('\Gemini_Generated_Image_iqgrlkiqgrlkiqgr.jpg');
    background-size: cover; /* Makes the background image cover the entire viewport */
    background-position: center; /* Centers the background image */
    color: #fff; /* Text color */
    font-family: 'Roboto', sans-serif; /* Font family */
    margin: 0; /* Remove default margin */
    height: 100vh; /* Full height of the viewport */
}

header {
    background-color: rgba(26, 26, 26, 0.8); /* Semi-transparent background */
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
    color: #f0b90b; /* Hover color */
}

#intro h2 {
    font-size: 2.5em;
    color: #f0b90b; /* Intro heading color */
}

#intro p {
    font-size: 1.2em;
    line-height: 1.5;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #000000;
    color: #000000;
}
        footer {
             margin-top: auto;
             text-align: center;
             padding: 20px;
             background-color: #000000;
             color: #ffffff; 
            }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            }
    </style>
</head>
<body>
    <header>
        <h1>My Projects</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section id="projects">
        <h2>Projects</h2>
        <ul>
            <?php foreach($projects as $project): ?>
            <li><strong><?= $project['name'] ?>:</strong> <?= $project['description'] ?> <a href="<?= $project['link'] ?>">View Project</a></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <footer>
        &copy; 2024 Dakalo Tshikororo. All rights reserved.
    </footer>
</body>
</html>
