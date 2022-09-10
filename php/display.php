<!DOCTYPE html>
<html lang="en">
<head>
    
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
    </style>
 
 
</head>
<body>
<div style="padding: 20px;">
        <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom border-shadow">
            <a href="../index.php" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-3">VoteForTrust.com</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="../index.php">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="notice.php">About Election</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="../Login/Contactus.html">Contact</a>
            </nav>
        </header>
    </div>
    <!-- navbar end -->
    
    <!-- side navbar -->
    <div class="sidenav">
        <a href="../Login/declare_election.html">New Election Process Declartion</a>
        <a href="../php/update_election.php">Edit Election Process</a>
        <a href="../php/display.php">Verfication And Validation</a>
        <a href="../php/results.php">Result Declartion</a>
    </div>    

    <div class="main-div">
        <h1>List of Candidate</h1>
        <div class="center-div">
            <div class="table-responsive">
                <center>
                <table border = 1 style="margin-left:20vh;text-align:center">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Shareholder ID</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Aadhar Number</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Panel</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
 
                                include 'db_connect.php';
 
                                $selectquery=" select * from creg";
 
                                $query = mysqli_query($con,$selectquery);
 
                                $nums = mysqli_num_rows($query);
                                while($res = mysqli_fetch_array($query))
                                {
 
                                ?>
                                <tr>
                                <td><?php echo $res['id'];  ?></td>
                                <td><?php echo $res['fname'];  ?></td>
                                <td><?php echo $res['shares'];  ?></td>
                                <td><?php echo $res['dateofbirth'];  ?></td>
                                <td><?php echo $res['gender'];  ?></td>
                                <td><?php echo $res['anumber'];  ?></td>
                                <td><?php echo $res['email'];  ?></td>
                                <td><?php echo $res['number'];  ?></td>
                                <td><?php echo $res['address'];  ?></td>
                                <td><?php echo $res['panel'];  ?></td>
                                <td><a href="delete.php?num=<?php echo $res['id'];?>">Delete</td>
                            </tr>
                            <?php
                                }
                           ?>
                        </tbody>
                </table>
                            </center>
            </div>
 
        </div>
    </div>
</body>
</html>