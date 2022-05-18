<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nano Folio - Simple HTML Template</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
	<link href="css/magnific-popup.min.css" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
	<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-users fa-3x"></i>
			<h1><a href="login.php">Connexion</a></h1>
		</section>
</div>
	<div class="tm-container-fluid">

		<div class="tm-gallery-section tm-mb-10">
			<!-- <ul class="filters-button-group tm-mb-40">
				<li><a href="#" data-filter=".city">City</a></li>
				<li><a href="#" data-filter=".nature">Nature</a></li>
				<li><a href="#" data-filter=".portraits">Portraits</a></li>
				<li><a href="#" class="active" data-filter="*">Show All</a></li>
			</ul> -->
				<div class="tm-gallery">				
					<div class="tm-gallery-item city portraits">
						<a href="img/img-01.jpg">
							<img src="img/tn-img-01.jpg" alt="City Scape" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item portraits">
						<a href="img/img-02.jpg">
							<img src="img/tn-img-02.jpg" alt="Beautiful Lady" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item city">
						<a href="img/img-03.jpg">
							<img src="img/tn-img-03.jpg" alt="City over cloud" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature">
						<a href="img/img-04.jpg">
							<img src="img/tn-img-04.jpg" alt="Autumn Forest" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item city">
						<a href="img/img-05.jpg">
							<img src="img/tn-img-05.jpg" alt="Skyscrapers Reflected" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item city">
						<a href="img/img-06.jpg">
							<img src="img/tn-img-06.jpg" alt="City Night" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature portraits">
						<a href="img/img-07.jpg">
							<img src="img/tn-img-07.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature">
						<a href="img/img-08.jpg">
							<img src="img/tn-img-08.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature">
						<a href="img/img-09.jpg">
							<img src="img/tn-img-09.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature portraits">
						<a href="img/img-10.jpg">
							<img src="img/tn-img-10.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item nature">
						<a href="img/img-11.jpg">
							<img src="img/tn-img-11.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
					<div class="tm-gallery-item portraits">
						<a href="img/img-12.jpg">
							<img src="img/tn-img-12.jpg" alt="Gallery item" class="img-fluid" />
						</a>
					</div>
				</div>			
			</div>

		<footer class="tm-footer">
			Copyright 2020 Nano Folio - Design: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Tooplate</a>
		</footer>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
		<script>
			$(function(){
				// Init the image gallery
				var $gallery = $(".tm-gallery").isotope({
					itemSelector: ".tm-gallery-item",
					layoutMode: "fitRows"
				});
			
				// Layout Isotope after each image loads
				$gallery.imagesLoaded().progress(function() {
					$gallery.isotope("layout");
				});

				$(".filters-button-group").on("click", "a", function(e) {
					e.preventDefault();
					var filterValue = $(this).attr("data-filter");
					$gallery.isotope({ filter: filterValue });
					$('.filters-button-group a').removeClass('active');
					$(this).addClass('active');
				});

				// Magnific Pop up
				$('.tm-gallery').magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: { enabled: true }
				});
			});
		</script>
</body>
</html>