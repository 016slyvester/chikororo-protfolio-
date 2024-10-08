<?php
include_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_education'])) {
        $stmt = $mysql_db->prepare("INSERT INTO education (school, degree, year) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['school'], $_POST['degree'], $_POST['year']]);
    } elseif (isset($_POST['update_education'])) {
        $stmt = $mysql_db->prepare("UPDATE education SET school=?, degree=?, year=? WHERE id=?");
        $stmt->execute([$_POST['school'], $_POST['degree'], $_POST['year'], $_POST['id']]);
    }
}

$education_query = $mysql_db->query('SELECT * FROM education');
$education = $education_query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Education</title>
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

        .education-form {
            padding: 20px;
            background-color: rgba(26, 26, 26, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .education-form label {
            display: block;
            margin-bottom: 10px;
        }

        .education-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .education-form button[type="submit"] {
            background-color: #f0b90b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .education-form button[type="submit"]:hover {
            background-color: #ffd700;
        }

        .education-list {
            padding: 20px;
        }

        .education-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .education-list li {
            padding: 10px;
            background-color: rgba(26, 26, 26, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .education-list li form {
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manage Education</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section id="intro">
        <h2>Manage Your Education</h2>
    </section>

    <section class="education-form">
        <h2>Add New Education</h2>
        <form action="manage_education.php" method="post">
            <label>School:</label>
            <input type="text" name="school" required>
            <label>Degree:</label>
            <input type="text" name="degree" required>
            <label>Year:</label>
            <input type="text" name="year" required>
            <button type="submit" name="new_education">Add Education</button>
        </form>
    </section>

    <section class="education-list">
        <h2>Update Education</h2>
        <ul>
            <?php foreach ($education as $edu): ?>
            <li>
                <form action="manage_education.php" method="post">
                    <input type="hidden" name="id" value="<?= $edu['id'] ?>">
                    <label>School:</label>
                    <input type="text" name="school" value="<?= $edu['school'] ?>" required>
                    <label>Degree:</label>
                    <input type="text" name="degree" value="<?= $edu['degree'] ?>" required>
                    <label>Year:</label>
                    <input type="text" name="year" value="<?= $edu['year'] ?>" required>
                    <button type="submit" name="update_education">Update</button>
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