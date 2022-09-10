<?php
 
    include 'db_connect.php';
    $fname = $_COOKIE['uname'];
    $id1 = $_POST['1'];
    $id2 = $_POST['2'];
    $id3 = $_POST['3'];
    $id4 = $_POST['4'];
    $id5 = $_POST['5'];

    if($id1!=NULL and $id2!=NULL and $id3!=NULL and $id4!=NULL and $id5!=NULL){
        $sql = "UPDATE creg set vote=vote+1 where id=$id1 or id=$id2 or id=$id3 or id=$id4 or id=$id5";

        $query = "UPDATE user SET vote_status=1 WHERE nm='".$fname."'";
        if(mysqli_query($con,$sql)){
            mysqli_query($con,$query);
            echo '<script>
                    alert("Your Voting is Completed..");
                    window.location = "http://localhost/php/NewVotingSystem/index.php";
                </script>';
        }
    }else{
        echo '<script>
                    alert("plz saglyana vote kara..!!");
                    window.location = "../";
                </script>';
    }
?>