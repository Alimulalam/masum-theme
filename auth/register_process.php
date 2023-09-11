<?php
    session_start();
    // $conn = new mysqli('localhost','root','','myloginsystem');
    // if (!$conn) {
    //     echo 'Not Connent';
    // }
    require_once 'connection.php';

    $emptymsg_user_name = $emptymsg_email = $emptymsg_password = $emptymsg_confirmpassword ='';

    if (isset($_POST['submit'])){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_confirm_password = $_POST['user_confirm_password'];

        $md5_user_password = md5($user_password);

        if (empty($user_name)) {
            $emptymsg_name = "Please fill up this field";
        }
        
        if (empty($user_email)) {
            $emptymsg_email = "Please fill up this field";
        }
        if (empty($user_password)) {
            $emptymsg_password = "Please fill up this field";
        }
        if (empty($user_confirm_password)) {
            $emptymsg_confirmpassword = "Please fill up this field";
        }

        if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !empty($user_confirm_password)) {
            if ($user_password === $user_confirm_password) {

                $sql = "INSERT INTO users (user_name,user_email,user_password) VALUES('$user_name','$user_email','$md5_user_password')";

                if($conn->query($sql)=== TRUE){
                    header('location:login.php?usercreated');
                }
                else{
                    echo 'Password not match';
                }

            }
        }
    }
?>