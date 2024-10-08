// database_db.php
<?php
try {
    $mysql_db = new PDO('mysql:host=localhost;dbname=chikororo_db', 'root', '');
    // Set the PDO error mode to exception
    $mysql_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
