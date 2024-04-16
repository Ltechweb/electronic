<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<title>Electronics home</title>
</head>

<body>
	<section class="website_wrapper">
		<div style="background:var(--thirdC);width:100%;padding:1rem 0;"></div>

		<header class="bg-white py-2">
			<?php include('components/header.php'); ?>
		</header>

		<main class="main">
			<section class="hero container-fluid custom_align">
				<?php
				$head = "Search";
				include('partials/hero.php');
				?>
			</section>


			<!--first section-->

			<section class="boxes custom_align">
				<?php include('partials/boxes-1.php'); ?>
			</section>

			<section class="titles bg-first">
				<?php
				$head = "About <br>ELECTRONICS AND HOME APPLIANCES";
				$para = "";
				include("partials/section-titling-2.php");
				?>
			</section>
			<section class="boxes custom_align">
				<?php include('partials/boxes.php'); ?>
			</section>


			<section class="boxes bg-white custom_align">
				<?php include('partials/boxes-1.php'); ?>
			</section>
		</main>

		<!-- <section class="about  btn-third">
			<?php
			$head = "Available <br>ELECTRONICS AND THEIR ACCESSORIES";
			$para = "";
			include("partials/section-titling-2.php");
			?>
		</section> -->
		<footer class="pt-5 bg-first">
			<?php include('components/footer.php'); ?>
		</footer>

	</section>
</body>

</html>