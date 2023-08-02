<?php
include 'db_connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    //  periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tasks (title, description, due_date) VALUES ('$title', '$description', '$due_date')";

    if($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}
?>