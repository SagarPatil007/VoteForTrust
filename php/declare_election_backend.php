<?php

    include 'db_connect.php';
    $bname = $_POST['bname'];
    $p1name = $_POST['panel1name'];
    $p2name = $_POST['panel2name'];
    $cfstartdate = $_POST['cf_startdate'];
    $cfenddate = $_POST['cf_enddate'];
    $eledate = $_POST['election_date'];

    $sql = "INSERT into newelection (bname,p1,p2,cfstartdate,cfenddate,eledate) values ('$bname','$p1name','$p2name','$cfstartdate','$cfenddate','$eledate');";

    if(mysqli_query($con,$sql)){
        echo '<script>
                alert("Election Declared Successfully!");
                window.location = "../";
            </script>';
    }

?>