<?php

    include 'db_connect.php';
 
    $bname = $_POST['bname'];
    $p1name = $_POST['panel1name'];
    $p2name = $_POST['panel2name'];
    $cfstartdate = $_POST['cf_startdate'];
    $cfenddate = $_POST['cf_enddate'];
    $eledate = $_POST['election_date'];

        if(isset($_POST['upd_but'])){
        $sql = "UPDATE newelection set bname='$bname',p1='$p1name',p2='$p2name',cfstartdate='$cfstartdate',cfenddate='$cfenddate',eledate='$eledate';";
        if(mysqli_query($con,$sql)){
            echo '<script>
                    alert("Updated Successfully!");
                    window.location = "../";
                </script>';
        }
        }

        if(isset($_POST['del_but'])){

            $sql="truncate Table newelection";
            if(mysqli_query($con,$sql)){
                echo '<script>
                        alert("deleted Successfully!");
                        window.location = "../";
                    </script>';
            }
            }
        
        
?>