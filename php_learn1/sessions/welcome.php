<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>


<!-- ======================== PHP =========================== -->
<?php

    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
    $alldata = unserialize($_SESSION['alldata']);
    print_r($alldata);



 ?>


<!-- =================================HTML =========================== -->

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div>
            <nav class="navbar navbar-dark bg-dark">
                <!-- Navbar content -->
                <a class="navbar-brand" href="#"><h2></h2><?php echo "Welcome ".$name?></a>
            </nav>
        </div>

        <div>
            <a href="next.php" ><h4>go to next page</h4></a>
        </div>





        <script src="" async defer></script>
    </body>
</html>