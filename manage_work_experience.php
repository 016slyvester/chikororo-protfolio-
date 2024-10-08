<?php
include_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_work'])) {
        $stmt = $mysql_db->prepare("INSERT INTO work_experience (company, position, years) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['company'], $_POST['position'], $_POST['years']]);
    } elseif (isset($_POST['update_work'])) {
        $stmt = $mysql_db->prepare("UPDATE work_experience SET company=?, position=?, years=? WHERE id=?");
        $stmt->execute([$_POST['company'], $_POST['position'], $_POST['years'], $_POST['id']]);
    }
}

// Fetch work experience
$work_experience_query = $mysql_db->query('SELECT * FROM work_experience');
$work_experience = $work_experience_query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Work Experience</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manage Work Experience</h1>

    <h2>Add New Work Experience</h2>
    <form action="manage_work_experience.php" method="post">
        <label>Company:</label>
        <input type="text" name="company" required><br>
        <label>Position:</label>
        <input type="text" name="position" required><br>
        <label>Years:</label>
        <input type="text" name="years" required><br>
        <button type="submit" name="new_work">Add Work Experience</button>
    </form>

    <h2>Update Work Experience</h2>
    <ul>
        <?php foreach ($work_experience as $work): ?>
        <li>
            <form action="manage_work_experience.php" method="post">
                <input type="hidden" name="id" value="<?= $work['id'] ?>">
                <label>Company:</label>
                <input type="text" name="company" value="<?= $work['company'] ?>" required><br>
                <label>Position:</label>
                <input type="text" name="position" value="<?= $work['position'] ?>" required><br>
                <label>Years:</label>
                <input type="text" name="years" value="<?= $work['years'] ?>" required><br>
                <button type="submit" name="update_work">Update</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

