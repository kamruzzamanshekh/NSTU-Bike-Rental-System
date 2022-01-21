<!DOCTYPE html>
<?php
require_once"admin/dbconfig.php";
if(isset($_SESSION['login']))
{

}
else
{
	header("location:login.php");
}
?>
<html>
<head>
  <title>About Us</title>
  <meta charset="UTF-8">
  <!-- For IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- For Resposive Device -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About US Rental</title>

  <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/bicycleicon.png">


  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body data-spy="scroll" data-target="#navbarResponsive">
  <header class="theme-main-header" style="background-color:#000000">
    <div class="container-fluid" >
      <a href="index.php" class="logo float-left tran4s"><img  width="100" height="100" src="images/logo/bicyclelogo1.png" alt="NSTU-bicycle logo"></a>

      <!-- ========================= Theme Feature Page Menu ======================= -->
         <?php include"nav.php";?><!-- /.navbar-collapse -->
      <!-- /.theme-feature-menu -->
    </div>
  </header>
<br>
<br><br>
   <!-- /.theme-main
  <div class="container text-center">
    <div class="row text-center">
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-light rounded shadow py-5 px-4"><img src="../res/abrar.jpg" alt="" width="100" class="rounded-circle mb-3 img-thumbnail shadow-sm" height="100">
          <p class="mb-0">Abrar Hossain Asif</p>
          <!-- <span class="small text-uppercase text-muted"></span> -->
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="mailto:s96mini.cube@gmail.com" class="social-link"><i class="google"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-light rounded shadow py-5 px-4"><img src="images/logo/logo.png" alt="" width="100" class="rounded-circle mb-3 img-thumbnail shadow-sm" height="100">
          <p class="mb-0">Kamruzzaman Shekh</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="mailto:shekhnstuiit@gmail.com" class="social-link"><i class="google"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-light rounded shadow py-5 px-4"><img src="images/logo/logo.png" alt="" width="100" class="rounded-circle mb-3 img-thumbnail shadow-sm" height="100">
          <p class="mb-0">Munuddin</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="mailto:dr.mynuddin@gmail.com" class="social-link"><i class="google"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

</body>

</html>
