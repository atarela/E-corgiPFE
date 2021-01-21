
<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>E-corgi - Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====Modification de la taille de l'écaran en fonction de la taille de l'écran===============================================================-->	
	<link rel="icon" type="image/png" href="images/icons/icon.png"/>
<!--Le logo à la barre du titre===================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="efonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->


</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v3">
		<!-- le menu dur la largeur de la page avec bootstrap 3 -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="home-03.php" class="logo">
						<img src="images/icons/logo" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="home-03.php">Accueil</a>
							</li>

							<li>
								<a href="#">Magasin</a>
								<ul class="sub-menu">
									<li><a href='location.php'>Louer un corgi</a></li>
									<li><a href='accessoires.php'>Accessoires</a></li>
									<li><a href='alimentation.php'>Alimentation</a></li>
								</ul>
							</li>

							<li>
								<a href="about.html">A propos</a>
							</li>

							<li>
								<a href="achteur.html">Mon Compte</a>
								
							</li>
							<li>
								<a href="panier.php">Panier</a>
							</li>

						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">			
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

</header>	

	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					<li class="p-b-13">
						<a href="home-03.php" class="stext-102 cl2 hov-cl1 trans-04">
							Accueil
						</a>
					</li>

					<li class="p-b-13">
						<a href="https://fr.wikipedia.org/wiki/Welsh_Corgi_Pembroke" class="stext-102 cl2 hov-cl1 trans-04">
							En savoir plus sur les corgis
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Conditions de location
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Rembouresement
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Aide & FAQs
						</a>
					</li>
				</ul>

				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ E-corgi
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor1.jpg"
							data-lightbox="gallery"  
							style="background-image: url('images/cor1.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor2.jpg"
							data-lightbox="gallery" 
							style="background-image: url('images/cor2.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor3.jpg"
							data-lightbox="gallery" 
							style="background-image: url('images/cor3.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor4.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor4.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor5.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor5.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor6.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor6.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor7.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor7.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor8.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor8.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/cor9.jpg" data-lightbox="gallery" 
							style="background-image: url('images/cor9.jpg');"></a>
						</div>
					</div>
				</div>

				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						A propos
					</span>

					<p class="stext-108 cl6 p-t-27">
						Un nouveau concept, pour quelques jours ou quelques années, louez un animal de compagnie.<br>
						Dites OUI, mais pas pour la vie, grâce à nos services de location, adoptez des animeaux de compagnie de façon éphémère.<br>
						
						<br>
						E-corgi...Toujours présent pour vous<br>
					</p>
				</div>
			</div>
		</div>
	</aside>





	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url(images/corgi1.jpg);" data-thumb="images/corgi1.jpg" data-caption="Corgi">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Choisissez un nouveau compagnon
								</span>
							</div>
							
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="location.php" class="flex-c-m stext-101 cl0 size-101 bg10 bor1 hov-btn2 p-lr-15 trans-04">
									Découvrez nos Corgis
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(images/corgi3.jpg);" data-thumb="images/corgi3.jpg" data-caption="Accessoires">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Chouchoutez votre corgis
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="accessoires.php" class="flex-c-m stext-101 cl0 size-101 bor1 bg10 hov-btn2 p-lr-15 trans-04">
									Voir produits
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(images/corgi6.jpg);" data-thumb="images/corgi6.jpg" data-caption="Alimentation">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Des croquettes à tous les goûts
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="alimentation.php" class="flex-c-m stext-101 cl0 size-101 bg10 bor1 hov-btn2 p-lr-15 trans-04">
									Voir la collection
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<strong><span class="ltext-202 txt-center cl5 respon2" style="margin-left: 350PX;margin-right: 350px;">
		Comment louer un animal de compagnie ?
	</span></strong>
	<!-- Banner -->
	<div class="sec-banner bg0 p-t-40 p-b-55">
		<div class="container">
		
			<div class="row">

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w" style="border: none;">
						<!--<img src="/anciens/images/choix.png" alt="livre" >-->

						<div class="icon-box-icon fa-container">
						<span class="text-color-192233-color btn-disable-hover">
						<i class="fa fa-tag fa-3x fa-fw" style="color: orange;"></i>
						</span>
						</div>
						<div class="icon-box-content" >
						<div class="icon-box-heading icon-box-fa-3x" >
						<strong><h5 class="ltext-202 txt-center cl5 respon2">JE CHOISIS...</h5></strong>
						</div>
						
						<p class="ltext-203 txt-center cl5 respon2">Nous mettons à votre disposition une large collection d'animaux de compagnie. Il y en a pour tous les goûts : <strong>choisissez celui qui vous ressemble</strong> !</p></div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w" style="border: none;">

					<div class="icon-box icon-box-left">
					<div class="icon-box-icon fa-container">
					<span class="text-color-192233-color btn-disable-hover">
					<i class="fa fa-cart-arrow-down fa-3x fa-fw" style="color: orange;">
					</i></span></div><div class="icon-box-content">
					<div class="icon-box-heading icon-box-fa-3x">
					<strong><h5 class="ltext-202 txt-center cl5 respon2">JE COMMANDE ...</h5></strong>
					</div><p class="ltext-203 txt-center cl5 respon2"><strong>À chacun sa formule</strong> ! Choisissez parmi nos 3 formules de location à la carte :&nbsp;"<strong>Un peu</strong>" location/jour ; "<strong>Beaucoup</strong>" location/mois ; "<strong>À la folie</strong>" location/an.</p>
					</div></div>
				</div>
				</div>

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w" style="border: none;">

					<div class="uncol style-light">
					<div class="uncoltable">
					<div class="uncell  boomapps_vccolumn no-block-padding">
					<div class="uncont">
					<div class="icon-box icon-box-left">
					<div class="icon-box-icon fa-container">
					<span class="text-color-192233-color btn-disable-hover">
					<i class="fa fa-gift fa-3x fa-fw" style="color: orange;">
					</i></span></div>
					<div class="icon-box-content">
					<div class="icon-box-heading icon-box-fa-3x">
					<strong><h5 class="ltext-202 txt-center cl5 respon2">JE REÇOIS !</h5></strong>
					</div>
					<p class="ltext-203 txt-center cl5 respon2">Nous vous proposons différents modes de livraison : "<strong>À la maison</strong>" ou en "<strong>Point relais</strong>" (<em>animaleries...</em>), selon <strong>vos envies, vos disponibilités et vos attentes !</strong>
					</p></div></div></div></div></div></div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url(images/corgi2.png);">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="2000">
								<a href="location.php" class="flex-c-m stext-101 cl0 size-101 bg10 bor1 hov-btn2 p-lr-15 trans-04">
									Découvrez nos Corgis
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5 txt-center">
					Nos Produits
				</h3>
			</div>

			<div class="sec-banner bg0 p-t-95 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w layer-slick1 animated bounceIn " data-appear="fadeInDown" data-delay="2000">
						<img src="images/corgi3.jpg" alt="game">

						<a href="accessoires.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Collection d'accessoire
								</span>

								<span class="block1-info stext-102 trans-04">
									Nouveautés
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Voir la collection
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/corgi8.jpg" alt="food">

						<a href="alimentation.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Alimentation
								</span>

								<span class="block1-info stext-102 trans-04">
									Nouveautés
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Voir la collection
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
		</div>
	</section>

	


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Nos services
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="location.php" class="stext-107 cl7 hov-cl1 trans-04">
								louer un corgi
							</a>
						</li>

						<li class="p-b-10">
							<a href="accessoires.php" class="stext-107 cl7 hov-cl1 trans-04">
								Accessoires
							</a>
						</li>

						<li class="p-b-10">
							<a href="alimentation.php" class="stext-107 cl7 hov-cl1 trans-04">
								Alimentations
							</a>
						</li>

						<li class="p-b-10">
							<a href="allproduct.php" class="stext-107 cl7 hov-cl1 trans-04">
								Tous les produits
							</a>
						</li>

					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30 ">
						Les Membres de l'équipe
					</h4>

					<ul>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Alexandre AVAKIAN
						</li>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Atar EL AZIZ
						</li>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Louis FERAY BEAUMONT
						</li>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Duy NGUYEN
						</li>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Vithusha SIVAKUMARAN
						</li>
						<li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">
							Noha ZAHRAN
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Nos contacter
					</h4>

					<p class="stext-107 cl7 size-201">
						Vous avez des questions ? Venez nous voir au 37 Quai de Grenelle, 75015, Paris, France. Ou Apelez nous au : +33 7 00 00 00 00
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com" method="post" >
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg10 bor1 hov-btn2 p-lr-15 trans-04" name="send" type="submit">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>


			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>