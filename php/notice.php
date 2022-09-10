<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoteForTrust.com</title>
    <link href="./css/style.css" rel='stylesheet' type='text/css' />
    <link href="./css/global.css" rel='stylesheet' type='text/css' />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"       rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .adimage{
            display: block;
            max-width: 90%;
            height: auto;
        }

        p{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
            font-style: italic;
            text-align:justify;
        }
        h1{
            text-align: center;
            margin-bottom: 25px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .text-1{
            font-size: 40px;
            font-family: 'Carter One';
            font-weight: bold;
            text-align: justify;
        }
    </style>

</head>

<body>

    <!-- navbar start -->
    <div style="padding: 20px;">
        <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom border-shadow">
            <a href="../index.php" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-3">VoteForTrust.com</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="../index.php">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="../Login/Contactus.html">Contact</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="../Login/signIn.html">Login</a>
            </nav>
        </header>
    </div>
    <!-- navbar end -->


     <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
                
    <form action="../php/update_election2.php" method="post" class="form-container">
     <div class="notice" >
        <h5 class="h4">Notice Board</h5>
        <hr>
        <?php

        include 'db_connect.php';

        $query = "SELECT * FROM newelection";
        $query_run = mysqli_query($con, $query);
        $flag=0;
        if(mysqli_num_rows($query_run) > 0)
        {
        foreach($query_run as $row)
        {
        $flag=1;     
        ?>
        <div class="form-group">
        <label for="bankname">Bank Name</label>
        <input type="text" name="bname" value="<?= $row['bname']; ?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="panel1">Panel 1 Name</label>
        <input type="text" name="panel1name" value="<?= $row['p1']; ?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="panel2">Panel 2 Name</label>
        <input type="text" name="panel2name" value="<?= $row['p2']; ?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="form filling start date">Candidate Form Filling Start Date</label>
        <input type="date" name="cf_startdate"  value="<?= $row['cfstartdate']; ?>" class="form-control" style="width: 6cm";>
        </div>

        <div class="form-group">
        <label for="form filling start date">Candidate Form Filling End Date</label>
        <input type="date" name="cf_enddate" value="<?= $row['cfenddate']; ?>" class="form-control" style="width: 6cm";>
        </div>

        <div class="form-group">
        <label for="form filling start date">Election Date</label>
        <input type="date" name="election_date" value="<?= $row['eledate']; ?>" class="form-control" style="width: 6cm";>
        </div>  
    </form>

                <p for="msg">Registartion link for candidate are open nowplease fill up</p>
                <a href="../Login/cindex.html">click here</a>

    <?php
    }
}
    else
    {       
        echo "Now , there is not notice is available....";
        echo "Stay Tuned";
    }    
?>
</body>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/53dce8a43e.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>