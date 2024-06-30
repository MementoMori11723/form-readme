<title>
    <?php
    echo "Storm";
    ?>
</title>
<?php
try {
    $userName = $_POST["email"];
    $password = $_POST["password"];
    if (empty($userName) || empty($password)) {
        echo "Username or password is empty";
        return;
    }
    $conn = new PDO("sqlite:database.db");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $query = "INSERT INTO users VALUES ('$userName','$password')";
    $conn -> exec($query);
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e -> getMessage();
}
?>