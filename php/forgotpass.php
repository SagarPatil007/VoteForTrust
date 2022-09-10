<?php
    include 'db_connect.php';

    $newpass = $_POST['newpass'];
    $cpass = $_POST['cpass'];
    $username = $_POST['username'];

    if($newpass != $cpass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../Login/forgotpass.php";
            </script>';
    }else if($newpass == $cpass){

        $sql = "UPDATE `user` SET `Password` = '$newpass' WHERE `nm` = '$username';";
        
        if(mysqli_query($con,$sql)){
            header('Location: http://localhost/php/NewVotingSystem/index.php');
        }
    }
?>