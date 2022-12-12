<!DOCTYPE html>
<html lang="en">
<head>
	<title>BetterBooks</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('images\Logo Universitas Airlangga (UNAIR).png') }}" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="{{ asset('icomoon/icomoon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	
	<!-- Load fonts style after rendering the layout styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
	
	<!-- script-->
	<script src="js/modernizr.js"></script>
	
</head>

<body>
	
	@include('partials.header')
	
	<section class="bg-light">
		<div class="container pb-5">
			<div class="row">
				<div class="col-lg-5 mt-5">
					<div class="card mb-3">
						<img class="card-img img-fluid" src="{{ asset('images/'.$buku->image) }}" alt="Card image cap" id="product-detail">
					</div>
					<div class="row">
					</div>
				</div>
				<!-- col end -->
				<div class="col-lg-7 mt-5">
					<div class="card">
						<div class="card-body">
							<h1 class="h1 text-dark">{{ $buku->nama }}</h1>
							<p class="h3 py-2 text-dark">Rp {{ number_format($buku->harga) }}</p>
						</div>
						<form action="/customer-buy" method="POST">
							@csrf
							<input type="hidden" name="checks" value="{{ $buku->id }}">
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Pelanggan</label>
								<input type="text" class="form-control" name="nama" value="">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">E-Mail</label>
								<input readonly type="text" class="form-control" name="email" value="{{ $pgn->email }}">
							</div>
							<input hidden type="text" class="form-control" name="harga" value="{{ $buku->harga }}">
							<button type="submit" name="submit" class="btn btn-primary">Checkout</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/templatemo.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ asset('js/slideNav.min.js') }}"></script>
	<script src="{{ asset('js/slideNav.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	
</body>
</html>
