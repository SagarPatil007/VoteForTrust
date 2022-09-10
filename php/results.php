<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoteForTrust.com</title>
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
        p{
            text-align: center;
            margin-bottom: 25px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style:bold;
            font-size:30x;
        }
        h3{
            text-align: center;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .h5{
            color: white;
            text-align: center;
        }
        .text-1{
            font-size: 40px;
            font-family: 'Carter One';
            font-weight: bold;
            text-align: justify;
        }
        .notice{
            width: auto;
            height: 400px;
            margin: 30px 30px;
            padding: 30px 30px;
            border: solid black 2px;
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

    <!-- navbar start -->
    <div style="padding: 20px;">
        <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom border-shadow">
            <a href="../index.php" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-3">VoteForTrust.com</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="../index.php">Home</a>
            </nav>
        </header>
    </div>
    <!-- navbar end -->   

    <div class="main-div" >
        <h3>List of Candidate</h3>
        <h3>First 5 Candiadtes are Winner</h3>
            <div class="center-div" style="padding:  0px 250px">
            <div class="table-responsive">
                <div class="container" >
                <center>
                <table class="table" border="2" >
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Panel</th>
                                <th>Total Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                include 'db_connect.php';
 
                                $selectquery=" select * from creg order by vote desc";
                                $cnt=1;
                                $query = mysqli_query($con,$selectquery);
                                $nums = mysqli_num_rows($query);
                                while($res = mysqli_fetch_array($query))
                                {
                                if($cnt<=5){
                                ?>
                                <tr>
                                <td style="color:green;"><?php echo $res['id'];  ?></td>
                                <td style="color:green;"><?php echo $res['fname'];  ?></td>
                                <td style="color:green;"><?php echo $res['panel'];  ?></td>
                                <td style="color:green;"><?php echo $res['vote'];  ?></td>
                                </tr>
                            <?php
                                $cnt++;
                                }
                                else{
                                    ?>        
                                    <tr>
                                    <td style="color:red;"><?php echo $res['id'];  ?></td>
                                    <td style="color:red;"><?php echo $res['fname'];  ?></td>
                                    <td style="color:red;"><?php echo $res['panel'];  ?></td>
                                    <td style="color:red;"><?php echo $res['vote'];  ?></td>
                                    </tr>
                                    <?php                                            
                                }
                            }
                            ?>
                        </tbody>
                </table>
                </center> 
                </div>
            </div>
        </div>
    </div>
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