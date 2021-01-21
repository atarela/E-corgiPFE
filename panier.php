<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Mon Panier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	
	<!-- Header -->
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

	


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/orange.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Mon Panier
		</h2>
	</section>	


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="home-03.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Panier</th>
									<th class="column-2">Nom</th>
									<th class="column-3">Price</th>
									
									
                                    <th class="column-5">supprimer article</th>
								</tr>
                                <?php 
                                    $database = "projet_web";
                                    //connectez-vous dans votre BDD
                                    //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
                                    $db_handle = mysqli_connect('localhost', 'root', '' );
                                    $db_found = mysqli_select_db($db_handle, $database);
                                    $_SESSION['total']=0;
                                
                                ?>
                                <?php if (isset($_SESSION["panier"])	) 
                                {   $max = sizeof($_SESSION['panier'])-1;
                                    //echo "taille" . $max;
                                    for($i = 0; $i < $max ;$i++)
                                    { $j=$i+2;          //resoudre probleme car refuse d'envoyer 0 pour le bouton supr
                                    
                                    
                                 ?>
								<tr class="table_row">
                                    <?php if ($db_found) {
                                         $sql = "SELECT * FROM items ";
                                         $result = mysqli_query($db_handle, $sql);
                                         $sql .= "WHERE id LIKE ".$_SESSION['panier'][$i] ;
                                         $result = mysqli_query($db_handle, $sql);
                                         $data = mysqli_fetch_assoc($result);
                                     ?>
									<td class="column-1">
										<div class="how-itemcart1">
											<?php echo '<img src="'.$data['photo'].'" alt="produit" id="images" />'; ?>
										</div>
									</td>
									<td class="column-2">
                                     <?php echo $data['nom'];echo $i ;?>   
                                    <!--<?php echo $_SESSION['panier'][$i] ;?>-->
                                    
                                    </td>
									<td class="column-3">
                                        <?php 
                                        echo $data['prix'] . "€";
                                        $_SESSION['total'] += $data['prix'];
                                        
                                        ?>
                                
                                    </td>
								    <td class="column-5">
                                        <form method="post" action="panier.php">                             
                                            <input type="submit" name="supr<?php echo"$j" ;?>" value="supp" />
                                        </form>
                                    <?php if(isset($_POST['supr'.$j]))
                                         { 
                                         //echo $i ;
                                         //if(!isset($i)){$i=0;}
                                         
                                          array_splice( $_SESSION['panier'],$i+=1,1);
                                          
                                         break;
                                         
                                         }
                                     
                                         
                                         
                                    
                                    ?>
                                    
                                    </td>
                                    <?php
                                        } 
                                    ?>
								</tr>
                                <?php 
                                        
                                    }
                                }else
                                {
    
                                echo "panier vide ";
        
                                }
                                mysqli_close($db_handle);
                                
                                ?>
                                        

								
							</table>
						</div>

						
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $_SESSION['total']; ?>
								</span>
							</div>
						</div>

						

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									<?php echo $_SESSION['total']; ?>
								</span>
							</div>
						</div>
                        <a href="achteur.html" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        
							Proceed to Checkout
						
						</a>
							
						
					</div>
				</div>
			</div>
		</div>
	</form>
		
	
		

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
	<script src="js/main.js"></script>

</body>
</html>