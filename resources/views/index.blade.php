<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>BetterBooks</title>
		<link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">

		<!-- script-->
		<script src="js/modernizr.js"></script>

	</head>

<body>

<!-- Modal -->
{{-- <div class="modal fade" id="books" role="dialog" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="books">Product Detail</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Add to Cart</button>
        <button type="button" class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
</div> --}}

<!-- <div id="entire-wrapper"> -->
@include('partials.header')
<!--header-wrap-->

{{-- <section id="billboard" class="pattern-overlay">
	<button class="prev slick-arrow">
		<i class="icon icon-arrow-left"></i>
	</button>

	<div class="main-slider">
		<div class="slider-item">
			<div class="banner-content" data-aos="fade-up">
				<h2 class="banner-title">Life of the wild</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
				<div class="btn-wrap">
					<a href="#" class="btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div><!--banner-content--> 
			<a href=""><img src="images/main-banner1.jpg" alt="banner" class="banner-ima</a>ge">
		</div><!--slider-item-->

		<div class="slider-item">
			<div class="banner-content">
				<h2 class="banner-title">Simple way of piece life</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
				<div class="btn-wrap">
					<a href="#" class="btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div><!--banner-content-->
			<a href=""><img src="images/main-banner2.jpg" alt="banner" class="banner-ima</a>ge"> 
		</div><!--slider-item-->
	</div><!--slider-->
		
	<button class="next slick-arrow">
		<i class="icon icon-arrow-right"></i>
	</button>
</section> --}}

<section id="featured-books" class="bookshelf">
	<div class="container">
		<div class="row">
			<div class="inner-content">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Featured Books</h2>
			</div>

			<div class="product-list" data-aos="fade-up">
				<div class="product-grid">
					
					@foreach ($bukus as $buku)
						<figure class="product-style">
							<img src="images/{{ $buku->image }}" alt="Books" class="product-item">
							<button class="add-to-cart"><a href="/detailProduct/{{ $buku->id }}" style="color: #fff">Buy Now</a></button>
							<figcaption>
								<h3>{{ $buku->nama }}</h3>
								<p>{{ $buku->tglMasuk }}</p>
								<div class="item-price">Rp {{ $buku->harga }}</div>
							</figcaption>
						</figure>
					@endforeach

			    </div><!--ft-books-slider-->
			</div><!--grid-->
			<div class="container">
				<div class="row">
					<div class="inner-content">	
						<div class="product-list" data-aos="fade-up">
							<div class="grid product-grid">				
								<figure class="product-style">
									<img src="images/product-item5.jpg" alt="Books" class="product-item">
									<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
									<figcaption>
										<h3>Simple way of piece life</h3>
										<p>Armor Ramsey</p>
										<div class="item-price">
										$ 40.00</div>
									</figcaption>
								</figure>
							
								<figure class="product-style">
									<img src="images/product-item6.jpg" alt="Books" class="product-item">
									<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
									<figcaption>
										<h3>Great travel at desert</h3>
										<p>Sanchit Howdy</p>
										<div class="item-price">
										$ 38.00</div>
									</figcaption>
								</figure>
							
								<figure class="product-style">
									<img src="images/product-item7.jpg" alt="Books" class="product-item">
									<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
									<figcaption>
										<h3>The lady beauty Scarlett</h3>
										<p>Arthur Doyle</p>
										<div class="item-price">
										$ 45.00</div>
									</figcaption>
								</figure>
							
								<figure class="product-style">
									<img src="images/product-item8.jpg" alt="Books" class="product-item">
									<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
									<figcaption>
										<h3>Once upon a time</h3>
										<p>Klien Marry</p>
										<div class="item-price">
										$ 35.00</div>
									</figcaption>
								</figure>
		
								<figure class="product-style">
									<img src="images/product-item2.jpg" alt="Books" class="product-item">
									<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
									<figcaption>
										<h3>Simple way of piece life</h3>
										<p>Armor Ramsey</p>
										<div class="item-price">$ 40.00</div>
									</figcaption>
								</figure>					
							</div><!--grid-->
						</div>
					</div><!--inner-content-->
				</div>
			</div>
			<div class="btn-wrap align-right">
				<a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
			</div>

			</div><!--inner-content-->
		</div>
	</div>
</section>

<section id="quotation" class="align-center">
	<div class="inner-content">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</q>
			<div class="author-name">Dr. Seuss</div>			
		</blockquote>
	</div>		
</section>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/slideNav.min.js"></script>
	<script src="js/slideNav.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>	

</body>
</html>	