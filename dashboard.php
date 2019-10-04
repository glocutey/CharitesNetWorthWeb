<!DOCTYPE html>
<html>

<head>
    <title>New Member Welcome | Charites Finance</title>
    <!-- Font awesome -->
    <!-- <link href="font-awesome.css" type='text/css' rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/howto.css">
</head>


<body>
    
    <nav class="navbar navbar-expand-md text-white navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="css/img/nav.png" id='logo' alt="Brand"></a>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.html">CALCULATOR</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="howto.html">TIPS</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">SIGN OUT</a>
                    </li>                
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
        <div class="row mt-5">
            <div class="col-md-7 col-lg-6 ">
                <h1 class='mb-3' id="solar"><strong>Are You Ready To Calculate Your Net Worth?</strong><br><strong>Glad you could join us!</strong></h1>
                <p class='mb-2 text-justify'><p>Your new Member Account gives you access to the Assets and Liabilities Entry Page. You will enter the current values of cash and cash equivalents assets, invested assets, use assets, current and long-term liabilities.</p>
            </div>

            <div class="col-md-5 col-lg-6">
                <img src="css/img/networth.png" id='side' alt="img-fluid">
            </div>
        </div>


        <div class="container text-primary  mb-5">
            <div class="row">
                <div class="col-md-12  new">
                    <form action="calculator.html" method="post">
                     <input type="submit" value="NET WORTH CALCULATION">
                    </form>
                    <form action="index.php" method="post">
                     <input type="submit" value="Home Page">
                    </form>
                </div>
            </div>
         </div>
      </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class='  bounce'>About Us</h3>
                    <p>Charites Finance is a start up that aims to create a stable financial life for its users. We are
                        interested in helping you have a knowledge of your current financial status and assist you in
                        maximizing your money for a secure future.</p>
                </div>
                <div class="col-md-4">
                    <h3 class='  bounce'>About the App</h3>
                    <p>This free calculator helps you get a view of your financial positon by adding the values of your
                        assets and substracting your liabilites.</p>
                </div>
                <div class="col-md-3">
                    <h3 class='  bounce'>Contact Us</h3>
                    <address style="margin-bottom:30px;">
                        Team Charites <br>
                        3, Remote House,<br>
                        HNG Avenue, Nigeria <br>
                        +234-1111-0000 <br>
                        info@charitesfinance.com
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style='text-align: center' class='  rollIn'>
                        CharitesFinance.com &copy; 2019
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


</html>
