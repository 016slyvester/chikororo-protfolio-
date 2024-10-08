<?php
// Include database connection
require_once "database.php";

// Retrieve education and work experience data
$education_query = $mysql_db->query('SELECT * FROM education');
$education = $education_query->fetchAll(PDO::FETCH_ASSOC);

$work_experience_query = $mysql_db->query('SELECT * FROM work_experience');
$work_experience = $work_experience_query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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

        .cv-button {
            background-color: #f0b90b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .cv-button:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Me</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="manage_skills.php">edit skills</a>
            <a href="manage_education.php">edit education</a>
        </nav>
    </header>

    <section id="education">
        <h2>Education</h2>
        <ul>
            <?php foreach($education as $edu): ?>
            <li><?= $edu['degree'] ?> from <?= $edu['school'] ?> (<?= $edu['year'] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section id="work-experience">
        <h2>Work Experience</h2>
        <ul>
            <?php foreach($work_experience as $work): ?>
            <li><?= $work['position'] ?> at <?= $work['company'] ?> (<?= $work['years'] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section id="cv">
        <h2>Download My CV</h2>
        <p>Download my CV in PDF format:</p>
        <a href="cv/cv.pdf" download>
            <button class="cv-button">Download CV</button>
        </a>
    </section>

    <footer>
        &copy; 2024 Dakalo Tshikororo. All rights reserved.
    </footer>
</body>
</html>