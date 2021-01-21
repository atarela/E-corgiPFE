<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ajouter un vendeur</title>
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
								<a href="#">Mon Compte</a>
								<ul class="sub-menu">
									<li><a href='achteur.html'>Achteur</a></li>
									<li><a href='admi.html'>Administateur</a></li>
									<li><a href='vendeur.html'>Vendeur</a></li>
								</ul>
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
							Savoir plus sur les corgis
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


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/orange.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Connectez-vous
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<!-- le PHP pour le formulaire ---------------->

		<?php

		// identifier la BDD
 				$database = "projet_web";

 			//connectez-vous dans votre BDD
 			$db_handle = mysqli_connect('localhost', 'root', '');
 			$db_found = mysqli_select_db($db_handle, $database);


				//recuperer les donnees venant de la page HTML
			$nom = isset($_POST["nom"])?$_POST["nom"] : ""; //if then else
			$prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
			$pseudo= isset($_POST["pseudo"])?$_POST["pseudo"] : "";
			$email = isset($_POST["email"])?$_POST["email"] : "";
 			$mdp = isset($_POST["mdp"])?$_POST["mdp"] : "";
 			$photo = isset($_POST["photoToUpload"])?$_POST["photoToUpload"] : "";
 			
 			$image = isset($_POST["image"])?$_POST["image"] : "";
 			

 			//vérification des champs du formulaire

 			$erreur = "";
 			if($nom == "") {$erreur .= "Le champ Nom est vide. <br>";}
 			if($prenom == "") {$erreur .= " Le champ Age est vide. <br>";}
 			if($pseudo == "") {$erreur .= "Le champ Numero de carte est vide. <br>";}
 			if($photo == "") {$erreur .= "Le champ Cryptogramme est vide. <br>";}
 			if($email == "") {$erreur .= "Le champ email est vide. <br>";}
 			if($mdp == "") {$erreur .= "Le champ mot de passe est vide. <br>";}
 			if($image == "") {$erreur .= "Le champ adresse est vide. <br>";}
 			

 			if ($erreur == "") {
 			 
 				echo "Formulaire valide";
 		}
 					else 
 			{
 				echo "Erreur : $erreur";
 			}

 			if ($_POST["button1"])
 			{
 				if($db_found) {
 					$sql = "SELECT * FROM vendeur";
 					if ($email !=""){
 						//on cherche un utilasateur avec l'email et le mdp
 						$sql .= "WHERE Email LIKE '%$email%' ";
 						if ($mdp != "")
 						{ 
 							$sql .= "AND Mdp LIKE '%$mdp%' ";
 						}
 				}
 				$result = mysqli_query($db_handle, $sql);
						//regarder s'il y a de résultat
				if (mysqli_num_rows($result) != 0) {
					//le livre recherché n'existe pas
					echo "utilisateur existant";
					} 
 			
 				
 				else
 				{
 					$sql = "INSERT INTO vendeur(nom, prenom,pseudo,Email, Mdp, photoToUpload, image_fond)
 					VALUES('$nom' , '$prenom' ,'$pseudo','$email', '$mdp' , '$photo' , '$image')";
 				$result = mysqli_query($db_handle, $sql);
 				echo "Vous etes bien inscrits." . "<br>";
 				}
 			}
 			}
 			
 			
 		
 		
			

			?>

	<!--=================================-->
			
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>