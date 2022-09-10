<?php
 
    include 'db_connect.php'; 
 
    $fullName = $_POST['fullName'];
    $noofshare = $_POST['noofshare'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $anumber=$_POST['anumber'];
    $email = $_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $panel=$_POST['panel'];
 
 
 
   $sql = "insert into creg (fname, shares, dateofbirth, gender,anumber,email,number,address,panel) values ('$fullName', '$noofshare', '$dateofbirth', '$gender','$anumber','$email','$number','$address','$panel');";
 
 
   $insert = mysqli_query($con,$sql);
 
    if($insert){
        echo '<script>
                alert("Registration successfull!");
                window.location = "../";
            </script>';
    }else{
      echo "FAiled";
    }
 
?>