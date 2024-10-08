<?php
include_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_work_experience'])) {
        $stmt = $mysql_db->prepare("INSERT INTO work_experience (company, position, years) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['company'], $_POST['position'], $_POST['years']]);
    } elseif (isset($_POST['update_work_experience'])) {
        $stmt = $mysql_db->prepare("UPDATE work_experience SET company=?, position=?, years=? WHERE id=?");
        $stmt->execute([$_POST['company'], $_POST['position'], $_POST['years'], $_POST['id']]);
    }
}

$work_experience_query = $mysql_db->query('SELECT * FROM work_experience');
$work_experience = $work_experience_query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Work Experience</title>
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

        .work-experience-form {
            padding: 20px;
            background-color: rgba(26, 26, 26, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .work-experience-form label {
            display: block;
            margin-bottom: 10px;
        }

        .work-experience-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .work-experience-form button[type="submit"] {
            background-color: #f0b90b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .work-experience-form button[type="submit"]:hover {
            background-color: #ffd700;
        }

        .work-experience-list {
            padding: 20px;
        }

        .work-experience-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .work-experience-list li {
            padding: 10px;
            background-color: rgba(26, 26, 26, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .work-experience-list li form {
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manage Work Experience</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section id="intro">
        <h2>Manage Your Work Experience</h2>
    </section>

<section class="work-experience-form">
    <h2>Add New Work Experience</h2>
    <form action="manage_work_experience.php" method="post">
        <label>Company:</label>
        <input type="text" name="company" required>
        <label>Position:</label>
        <input type="text" name="position" required>
        <label>Years:</label>
        <input type="text" name="years" required>
        <button type="submit" name="new_work_experience">Add Work Experience</button>
    </form>
</section>

<section class="work-experience-list">
    <h2>Update Work Experience</h2>
    <ul>
        <?php foreach ($work_experience as $work): ?>
        <li>
            <form action="manage_work_experience.php" method="post">
                <input type="hidden" name="id" value="<?= $work['id'] ?>">
                <label>Company:</label>
                <input type="text" name="company" value="<?= $work['company'] ?>" required>
                <label>Position:</label>
                <input type="text" name="position" value="<?= $work['position'] ?>" required>
                <label>Years:</label>
                <input type="text" name="years" value="<?= $work['years'] ?>" required>
                <button type="submit" name="update_work_experience">Update</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<footer>
    &copy; 2024 Dakalo Tshikororo. All rights reserved.
</footer>
</body>
</html>