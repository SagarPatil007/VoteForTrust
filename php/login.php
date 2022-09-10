<?php

    session_start();   
    $cookie_name="uname";
   
    if(isset($_COOKIE[$cookie_name])){
        voteStatusCheck();
    }else{
        votefirsttime();
    }

    $st_sql = "SELECT vote_status from user WHERE nm='".$name."'";
    $result = mysqli_query($con,$st_sql);
    $check;
    while($row = mysqli_fetch_array($result)){
        $check = $row['vote_status'];
    }

    if($check == 0 && $name != 'admin'){
        setcookie("uname", $name,time()+30*24*60*60,'/',$domain);
        header('Location: http://localhost/php/NewVotingSystem/php/session.php');
    }else if($check == 1){ 
        echo '<script>
            alert("You Already Done Your Voting");
            window.location = "../";
        </script>';
    }


    function voteStatusCheck(){
        include 'db_connect.php';
        $name = $_POST['username'];
        $pass = $_POST['pass'];
        $st_sql = "SELECT vote_status from user WHERE nm='".$name."'";
        $result = mysqli_query($con,$st_sql);
        $check;
        while($row = mysqli_fetch_array($result)){
            $check = $row['vote_status'];
        }
        $domain = 'localhost';
        if($check == 0 && $name != 'admin'){
            setcookie("uname", $name,time()+30*24*60*60,'/',$domain);
            header('Location: http://localhost/php/NewVotingSystem/php/session.php');
        }else if($check == 1 ){ 
            echo '<script>
                alert("Your voting has been done");
                window.location = "../";
            </script>';
        }
    }
    function votefirsttime(){
        include 'db_connect.php';
        $name = $_POST['username'];
        $pass = $_POST['pass'];
        $domain = 'localhost';
        
        $sql = "SELECT * FROM `user` WHERE `nm`='$name' AND `Password` = '$pass'";
        $res = mysqli_query($con,$sql);
        $num = mysqli_num_rows($res);
        
        if($num != 0){
            if($name == 'admin'){
                header('Location: http://localhost/php/NewVotingSystem/Login/superadmin.html');
            }else{
                $st_sql = "SELECT vote_status from user WHERE nm='".$name."'";
                $result = mysqli_query($con,$st_sql);
                $check;
                while($row = mysqli_fetch_array($result)){
                    $check = $row['vote_status'];
                }

                if($check == 0){
                    $domain = 'localhost';
                    setcookie("uname", $name,time()+30*24*60*60,'/',$domain);
                    header('Location: http://localhost/php/NewVotingSystem/php/session.php');
                }else if ($check == 1 ){
                    echo '<script>
                    alert("Your voting has been done");
                    window.location = "http://localhost/php/NewVotingSystem/index.php";
                </script>';
                }
            }
        }else{
            echo '<script>
                    alert("Wrong Username and Password");
                    window.location = "http://localhost/php/NewVotingSystem/Login/signIn.html";
                </script>';
        }
    }
?>