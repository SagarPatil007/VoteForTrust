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

        .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 80px;
  left: 0;
  background-color: rgb(243, 243, 243);
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #cccbcb;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
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
                <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="./Login/Contactus.html">Contact</a>
            </nav>
        </header>
    </div>
    <!-- navbar end -->

    <div class="sidenav">
        <a href="../Login/declare_election.html">New Election Process Declartion</a>
        <a href="update_election.php">Edit Election Process</a>
        <a href="../php/display.php">Verfication And Validation</a>
        <a href="#contact">Result Declartion</a>

      </div>
</body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
                
                <form action="../php/update_election2.php" method="post" class="form-container">
                    <h2 style="text-align: center;">Edit Declared Election</h2>
                    <?php

                        include 'db_connect.php';

                        $query = "SELECT * FROM newelection";
                        $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {  
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
                    <?php
                }
            }
            else
                    {
                        echo "No Record Found";
                    }    

                    ?>

                    <div class="d-grid gap-1" style="padding: 2vh;">
                        <button type="submit" name="upd_but" class="btn btn-primary ">Update</button>
                    </div>

                    <div class="d-grid gap-1" style="padding: 2vh;">
                        <button type="submit" name="del_but" class="btn btn-primary ">Delete</button>
                    </div>

                </form>
        </div>
    </div>
</div>  

</html>