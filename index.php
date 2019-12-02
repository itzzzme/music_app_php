<?php
include 'conn.php';
?>
<?php
include 'header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel=" stylesheet" href="style.css">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
session_start();
?>
<div class="container">
    <h1 class="text-center">Albums</h1>


    <div class="row">
        <div class="col-md-4">
            <div class="single-blog">
                <p class="blog-meta">By admin<span>September 24,2018</span></p>
                <img src="img/Sa.jpg" class="img">
                <h2 >creator</h2>
                <p class="blog-text">album discription</p>
                <span ><i class="fa fa-heart-o" aria-hidden="true"></i><strong>Favorite</strong></span>
            </div>
        </div>

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="single-blog">
                <p class="blog-meta">By admin<span>September 24,2018</span></p>
                <img src="img/Sa.jpg" class="img">
                <h2 >new</h2>
                <p class="blog-text">album discription</p>
                <span ><i class="fa fa-heart-o" aria-hidden="true"></i><button class="fav-btn">Favorite</button> </span>
            </div>
    </div>
</div>




</body>
</html>