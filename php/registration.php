<?php
 
    include 'db_connect.php'; 
    $name = $_POST['name'];
    $mobile_no = $_POST['mob'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpass = $_POST['cpass'];
 
 
 
    if($cpass!=$password){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../Login/signUp.html";
            </script>';
    }
    else{
        // move_uploaded_file($tmp_name,"../images/$image");
        $insert = mysqli_query($con, "insert into user (nm,Password, Mobile_number,email) values ('$name', '$password', '$mobile_no', '$email');");
 
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
?>