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
    </style>
</head>

<body>

    <!-- navbar start -->
    <div style="padding: 20px;">
        <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom border-shadow">
            <a href="./index.php" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-3">VoteForTrust.com</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="./php/notice.php">About Election</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="../NewVotingSystem/php/results.php">Results</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="./Login/Contactus.html">Contact</a>
                <?php
                 $cookie_name="uname";
                if(isset($_COOKIE[$cookie_name])){ ?>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="php/logout.php">Logout</a><?php 
                }else{ ?>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="Login/signIn.html">Login</a><?php
                }
                ?>
            </nav>
        </header>
    </div>
    <!-- navbar end -->

                
    <!-- fixed Image  -->
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="leftpane">
                <div class="text" style="padding-top: 40px;text-align: right;">
                    <p class="text-1">Easy and Best Online Election Excellence</p>
                </div>
                <div>
                    <p style="color: gray;text-align: justify-self;font-size: 24px;">VoteForTrust guarantees election integrity, boosts voter engagement and saves serious hours. It's free to test and free for up to 100 voters.</p>
                </div>
                <div>
                    <p style="color: gray;text-align: justify-self;font-size: 24px;">VoteForTrust guarantees election integrity, boosts voter engagement and saves serious hours. It's free to test and free for up to 100 voters.</p>
                </div>
                <div class="d-grid gap-1">
                    <button class="btn btn-warning btn-lg "><a href="./Login/signIn.html" visibility:hidden style="text-decoration: none;">Get Started</a></button>
                </div>
                
            </div>
          </div>
          <div class="col">
              <div class="rightpane">
                  <img src="./Images/home-cover.jpg" alt="sample image" width="734px" max-width:"734px">
              </div>
          </div>
        </div>
      </div>

    <!-- fixed image end -->


      <!-- Slider start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Images/banner1.jpg" class="d-block w-100" alt="banner1">
                <div class="carousel-caption d-none d-md-block">
               
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/banner2.jpg" class="d-block w-100" alt="banner2">
                <div class="carousel-caption d-none d-md-block">
        
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/banner3.jpg" class="d-block w-100" alt="banner3">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/banner4.jpg" class="d-block w-100" alt="banner4  ">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider end -->

    <!-- About eVote -->
    <div class="container px-4 py-5">
        <h1>About eVote</h1>
        <div class="row">
          <div class="col">
            <img src="https://www.evote.co.in/img/using-laptop.jpg" alt="adimage" class="adimage">
          </div>
          <div class="col">
            <p>eVote is an election system that facilitates voters to record their secure and secret ballot electronically. It has a friendly user interface and enables voters to cast their votes in few simple steps. We ensures the authenticity of the voters and the votes cast by them along with non-traceability of the casted vote. eVote's robust architecture has persistently manifested to be one of the most reliable, comprehensible and economical electronic voting solution.</p>

            <p>It renders <strong>Simple</strong> and <strong>Accessible </strong> voter experience that eventually increases voter engagement and turnout. Auditable, Easy To Use, Secure and Reliable is what sets eVote apart from its competitors.</p>
                
            <p>eVote has facilitated several organizations, across a wide range of industries to conduct hassle-free electronic voting with utmost security and integrity. Some of our fortes include outstanding and prompt customer support, highly secure and trustworthy elections and last but not the least; our potential to be able to tabulate expeditious and accurate results.</p>
                
          <p>We’d welcome the opportunity to work with you to provide exceptional and unparalleled service and add you to our ever-growing list of satisfied clients.</p>
          </div>
        </div>
    </div>
    <!-- About eVote -->

    <!-- footer start -->

    <div class="container-fluid" style="margin-bottom: 3px;">
        <div class="footer">
            <div class="text">
                <h5 class="h5">
                    <i class="fa fa-copyright " aria-hidden="true">
                        copyright 2021-2022 for VoteForTrust.com </i>
                </h5>
            </div>
        </div>
    </div>
    <!-- footer end -->

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