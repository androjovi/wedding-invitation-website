<!-- 
Remake from parallax template
Remaker : Joviandro
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>You are invited </title>

	<!-- CSS  -->
	<script src="js/jquery.3.2.1.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<style>
	.kh-imgbanner {
		filter: blur(1.2px) brightness(0.9);

	}

	.img-marr {
		width: 250px;
		height: 250px;
		border-radius: 50%;
	}

	.sm {
		width: 150px;
		height: 150px;
	}

	.img-car {
		width: 150px;
		height: 150px;
	}


	#map {
		height: 80%;
		width: 50%;
		margin-left: 25%;
		margin-right: 30%;
		margin-bottom: 50px;
	}

	@media screen and (max-device-width: 720px) {
		#map {
			margin-left: 10%;
			margin-right: 10%;
			width: 80%;
		}
	}

	/* Optional: Makes the sample page fill the window. */

	html,
	body {
		height: 100%;
		margin: 0;
		padding: 0;
	}

	.preloader {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background-color: #fff;
	}

	.preloader .loading {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		font: 14px arial;
	}

</style>

<body>
	<div class="preloader">
		<div class="loading">
			<img src="img/loading.png" width="80">
			<p>Harap Tunggu</p>
		</div>
	</div>
	<div id="index-banner" style="width: 100%; " class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center white-text text-lighten-1">ANDA DIUNDANG</h1>
				<div class="row center">

				</div>
				<div class="row center">
					<div id="tabs-swipe-demo">
						<a href="#map" id="download-button" class="btn waves-effect waves-light blue lighten-1 map">Lokasi</a>
						<a href="javascript:void(0)" id="download-button" class="btn waves-effect waves-light teal lighten-1">Gallery</a>
					</div>
				</div>
				<div class="row center" style="margin-top: 10%;">
					<div class="carousel">
						<h5 class="header center white-text text-lighten-1" style="margin-top: 50px;">Our story <small>*Scroll out</small></h5>
						<a class="carousel-item img-car" href="#one!"><img src="img/carousel/1.jpg"></a>
						<a class="carousel-item img-car" href="#three!"><img src="img/carousel/3.jpg"></a>
						<a class="carousel-item img-car" href="#four!"><img src="img/carousel/1.jpg"></a>
						<a class="carousel-item img-car" href="#five!"><img src="img/carousel/3.jpg"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax sf"><img src="background1.jpg" class="kh-imgbanner" alt="Unsplashed background img 1" style=""></div>
	</div>


	<div class="container">
		<div class="section">
			<!--   Icon Section   -->
			<h5 id="getting-started" style="text-align : center;"></h5>
			<div class="row">
				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center brown-text"><img src="img/man.jpg" class="img-marr" alt="Unsplashed background img 3"></h2>
						<h5 class="center">Lorem ipsum</h5>
						<p class="light center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. </p>
					</div>
				</div>
				<div class="col s12 m4" style="margin-top: 50px;">
					<div class="icon-block">
						<h2 class="center brown-text"><img src="img/heart.png" class="img-marr sm" alt="Unsplashed background img 3"></h2>

					</div>
				</div>
				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center brown-text"><img src="img/woman.jpg" class="img-marr" alt="Unsplashed background img 3"></h2>
						<h5 class="center">April petra</h5>

						<p class="light center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax-container two valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">Akad nikah <br> Hari minggu 14 Oktober 2022 <br> Pukul 08.00 WIB - selesai <br> Bertempat di Hotel Santika Bintaro
					</h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>UNDANGAN</h4>
					<p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				</div>
			</div>

			<div class="row">
				<form class="col s12" action="" method="post">
					<div class="card">
						<div class="card-content">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
									<input placeholder="Nama lengkap anda" name="fulln" id="first_name" type="text" class="validate">
									<label for="first_name">Full name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">email</i>
									<input id="email" type="email" class="validate" name="emal">
									<label for="email">Email anda</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select class="icons" name="stat">
      
      <option data-icon="" class="circle" value="Pasti datang">Pasti datang</option>
      <option data-icon="" class="circle" value="Ragu">Ragu Ragu</option>
      <option data-icon="" class="circle" value="Telat">Terlambat</option>
    </select>
									<label>Images in select</label>
								</div>
							</div>
							<input type="submit" name="submt" class="waves-effect waves-light btn">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="map"></div>
	<div class="container">
		<div class="row center">

			<a href="https://www.google.co.id/maps/dir/-6.2594834,106.6814805/Hotel+Santika+Premiere+Bintaro+Jl.+Prof.+Dr.+Satrio+Blok+B7%2FA3-01/@-6.2694145,106.6829734,14z/data=!3m1!4b1!4m15!1m6!3m5!1s0x2e69f6bd98dfef5f:0x6f193537ecbba94a!2sHotel+Santika+Premiere+Bintaro!8m2!3d-6.2770758!4d106.7210621!4m7!1m0!1m5!1m1!1s0x2e69f6bd98dfef5f:0x6f193537ecbba94a!2m2!1d106.7210621!2d-6.2770758?hl=id" class="waves-effect waves-light btn">Dapatkan petunjuk arah</a>

		</div>
	</div>


	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2018 Copyright Joviandro Marbun
				<a class="grey-text text-lighten-4 right" href="#!">Created with love for a better web</a>
			</div>
		</div>
	</footer>
	<!--  Scripts-->
	<script src="js/materialize.min.js"></script>
	<script src="js/init.min.js"></script>
	<script>
		var map;

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {
					lat: -6.2770758,
					lng: 106.718868
				},
				zoom: 17,
				mapTypeId: 'roadmap'
			});
			map.setTilt(45);

			var marker = new google.maps.Marker({
				position: {
					lat: -6.2770758,
					lng: 106.718868
				},
				map: map,
				title: 'Hello World!'
			});
		}

		var styles = {
			default: null,
			hide: [{
					featureType: 'poi.business',
					stylers: [{
						visibility: 'off'
					}]
				},
				{
					featureType: 'transit',
					elementType: 'labels.icon',
					stylers: [{
						visibility: 'off'
					}]
				}
			]
		};


		$("#getting-started")
			.countdown("2121/01/01", function(event) {
				$(this).text(
					event.strftime('%D days %H:%M:%S')
				);
			});
		$(document).ready(function() {
			$(".preloader").fadeOut();


		})

		$(function() {
			$('#download-button').scrollTop(300);
		});
		// Scroll to specific values
		// scrollTo is the same
		window.scroll({
			top: 2500,
			left: 0,
			behavior: 'smooth'
		});
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5PB4HujkQK0-nOReikWNlNZmR3SQBsQ8&callback=initMap" async defer></script>
</body>

</html>

<?php 
/*
 	Kalo ga ngerti mending ga usah ganti
*/
	if (isset($_POST['submt']) ){
		@mail("alikeitsas@gmail.com",
				 "DIA DATANG !!",
				 "Nama : ".$_POST['fulln']."<br> Email : ".$_POST['emal']."<br> Status : ".$_POST['stat'],
				 "From Website wedding"
				);
		if (@mail){
			echo "<script>alert('Berhasil');window.location.href='#'</script>";
		}else{
			echo "<script>alert('Tidak berhasil')</script>";
		}
	}

?>
