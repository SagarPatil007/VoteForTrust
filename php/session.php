<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votes</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"       rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                    <a class="me-3 py-2 text-dark text-decoration-none" href="../Login/cindex.php">About</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="./Login/Contactus.html">Contact</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="logout.php">Logout</a>
                </nav>
            </header>
        </div>
    <!-- navbar end -->

    
    <div class="container">
    <form action="calc_vote.php" method=POST>
        <div class="row">
            <div class="col">
 
                <h4 style="text-align:center">Panel 1</h4>
                <hr>
                <table class="table" border="2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Panel</th>
                            <th scope="col">Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
 
                            $count = 1;
                            $rad_nm = 1;
                            $panelcode = "P1";
                            include 'db_connect.php';
                            $selectquery= " select id,fname,panel,vote from creg where panel = 'P1' ";
                            $query = mysqli_query($con,$selectquery);
                            $nums = mysqli_num_rows($query);
                            while($res = mysqli_fetch_array($query))
                            { 
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $res['fname'];  ?></td>
                                <td><?php echo $res['panel'];  ?></td>
 
                                <td><input type="radio" id="chk1" name="<?php echo $rad_nm++; ?>" value="<?php echo $res['id'];?>"> </td>
                            </tr>
                            <?php
                                }
                           ?>
                    </tbody>
                </table>
            </div>
 
            <div class="col">
            <h4 style="text-align:center">Panel 2</h4>
            <hr>
            <table class="table"  border="2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Panel</th>
                            <th scope="col">Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            $rad_nm = 1;
                            $panelcode = "P2";
                            include 'db_connect.php';
                            $selectquery=" select id,fname,panel,vote from creg where panel = 'P2' ";
                            $query = mysqli_query($con,$selectquery);
                            $nums = mysqli_num_rows($query);
                            while($res = mysqli_fetch_array($query))
                            { 
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $res['fname'];  ?></td>
                                <td><?php echo $res['panel'];  ?></td>
                                <td><input type="radio" id="chk2" name="<?php echo $rad_nm++; ?>" value="<?php echo $res['id'];?>"> </td>
                            </tr>
                            <?php
                                }
                           ?>
                    </tbody>
                </table>
 
            </div>
            <button type="submit" name="fsubmit" onClic>Give Vote</button>
        </form>     
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