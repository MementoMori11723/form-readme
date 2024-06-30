<?php
try {
    $userName = $_POST["username"];
    $password = $_POST["password"];
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