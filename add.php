<?php
session_start();
require_once 'auth/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profilePicture = $_FILES['profilePicture']['name'];
    $tmpname = $_FILES['profilePicture']['tmp_name'];
    $uploction = 'images/' . $profilePicture;

    $fullname = $_POST['fullname'];
    $district = $_POST['district'];
    $dob = $_POST['dob'];
    $education = isset($_POST['education']) ? $_POST['education'] : [];
    $educationValues = implode(", ", $education);
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];



    $sql = "INSERT INTO `profile`(`fullname`, `profilePicture`, `district`, `date_of_birth`, `education`, `gender`, `comments`) VALUES ('$fullname','$profilePicture','$district','$dob','$educationValues','$gender','$comments')";


    if (mysqli_query($conn, $sql) == true) {
        move_uploaded_file($tmpname, $uploction);
        $_SESSION['status'] = '<div class="alert alert-success">Successfully Add</div>';
        header('location:profile.php');
    } else {
        $_SESSION['status'] = "Does Not Save";

    }

}

?>