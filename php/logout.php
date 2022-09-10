<?php
    $domain = 'localhost';
    setcookie('uname', "", time()-3600,'/',$domain);
    echo '<script>
    alert("You Successfully Logged Out");
    window.location = "../";
    </script>';
    // header('Location: http://localhost/php/NewVotingSystem/index.php');
?>