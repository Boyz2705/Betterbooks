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
		<link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">

		<!-- script-->
		<script src="js/modernizr.js"></script>
	</head>

<body>
    
    @include('partials.header')

        <div>
            <figure class="product-style">
                <img src="images/{{ $booksdetail['image'] }}" alt="Books" class="product-item">
                {{-- <button class="add-to-cart"><a href="/detailProduct/{{ $booksdetail["id"] }}" style="color: #fff">Add to Cart</a></button> --}}
                <figcaption>
                    <h3>{{ $buku->nama}}</h3>
                    <p>{{ $buku->tglMasuk }}</p>
                    <div class="item-price">{{ $buku->harga }}</div>
                </figcaption>
            </figure>
        </div>


    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/slideNav.min.js"></script>
	<script src="js/slideNav.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>	

</body>
</html>
