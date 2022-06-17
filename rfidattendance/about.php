<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/Users.css"> -->

    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="css/about.css?v=<?php echo time(); ?>">
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
    </script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/ae8fea21dc.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include'header.php'; ?> 
<main>
<section>
<div class="white-text">
    <h1 class="slideInDown animated">Thank you for visiting our Website!</h1>

    <h4 class="middle slideInDown animated">We are Group 2 of SY-CS-D, and this is our EDI Project.</h4>
</div>
<div class="row">
    <div class="col-md-4">
    <i class="fa-solid fa-1 middle"></i>
        <h3 class="middle line">Atharva Sawaleshwarkar</h3>
        <p class="middle subline">Roll No. 19</p>
    </div>

    <div class="col-md-4">
    <i class="fa-solid fa-2 middle"></i>
        <h3 class="middle line">Tanmay Shah</h3>
        <p class="middle subline">Roll No. 20</p>
    </div>

    <div class="col-md-4">
    <i class="fa-solid fa-3 middle"></i>
        <h3 class="middle line">Farhan Shaikh</h3>
        <p class="middle subline">Roll No. 21</p>
    </div>

    <div class="col-md-6">
    <i class="fa-solid fa-4 middle"></i>
        <h3 class="middle line">Yash UG Shejwal</h3>
        <p class="middle subline">Roll No. 22</p>
    </div>

    <div class="col-md-6">
    <i class="fa-solid fa-5 middle"></i>
        <h3 class="middle line">Mohiddin Shikalgar</h3>
        <p class="middle subline">Roll No. 23</p>
    </div>
</div>

<hr>

<div class="white-text">

</div>


</section>
</main>
</body>
</html>