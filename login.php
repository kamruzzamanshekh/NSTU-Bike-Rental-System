<?php
require_once"admin/dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Welcome NSTU-Bike Rental</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/bicycleicon.png">
             <script src='https://kit.fontawesome.com/a076d05399.js'></script>

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="main-page-wrapper">



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header" style="background-color:#000000">
				<div class="container-fluid" >
		<a href="index.php" class="logo float-left tran4s"><img  width="100" height="100" src="images/logo/bicyclelogo1.png" alt="NSTU-bicycle logo"></a>
					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					<!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->

			<!--
			=====================================================
				Blog Page Details
			=====================================================
			-->
			</br>
		</br>




		<div id="blog-section">
				<div class="container border border-secondary">
					<div class="theme-title">
						<h2 class="text-success">Login</h2>




</div> <!-- /.theme-title -->

					<div class="clear-fix">

						<div id="contact-section">
				<div class="container">
					 <!-- /.contact-address-content -->

					<!-- Contact Form -->
					<div class="send-message">
						<h2></h2>
<div class="col-lg-4"></div>
<div class="col-lg-4 mx-auto">
						<form   class="" method="post">
							<div class="row">
								<div class="">
									<div class="single-input">
										<input type="text" placeholder="Email" name="email">
									</div>
								</div>
								<div class="">
									<div class="single-input">
										<input type="password" placeholder="Password" name="password">
									</div>
								</div>

							</div>
							</br>

							 <!-- /.single-input -->


							<button  class="tran3s p-color-bg mx-auto btn-success" name="book">Login</button>
						</form>
						</br>
						</br>
								<p class="text-center">New User..?<a  href="register.php"> Register</a></p>

                    </div>



<?php

/* if login is pressed it extract the info from db */
if(isset($_REQUEST['book']))
{
	extract($_REQUEST);
 $nn="select * from register where email='$email' and password='$password'";

 $i=select($nn);
	 $num=mysqli_num_rows($i);

	if($num==1)
	{
		while($r=mysqli_fetch_array($i))
		{
		$_SESSION['login']=$r[0];
		echo"<script>
		window.location='index.php';
		</script>";

		}
			}
	else
	{
		echo"<script>alert('Something Went Wrong Please Try Again Later');
		window.location='index.php';
		</script>";
	}
}
?>
				</div> <!-- /.container -->
			</div>  <!-- /.col- -->
<!--
						 -->
			</div>
			</div>

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			 <?php include"footer.php";?>




			<!-- =============================================
				Loading Transition
			============================================== -->



	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
