<?php
include 'db_connect.php'; 
 
$num= $_GET['num'];
 
echo $num;
 
$query1= "DELETE FROM `creg` WHERE `creg`.`id` =".$num;
 
if(mysqli_query($con,$query1))
{
    header ('Location: http://localhost/php/NewVotingSystem/php/display.php');
}
else{
    echo" Failed to Delete Record";
}
?>