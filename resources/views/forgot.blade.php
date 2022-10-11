<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PWBF Bookstore</title>
        <link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styleSignUp.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
		<style type="text/css">
			button {
				padding: 1em;
				background-color: #1560bd;
				color: #ffffff;
				border-radius: 0.2em;
				border-style: none;
				cursor: pointer;
			}
		</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav> --}}
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styleSignUp.css">
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section" style="height: 100vh">
		<a class="btn text-light ms-6" href="/">Home</a>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5 mt-5">
					<h2 class="heading-section">Input your e-mail</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      			<form action="#" class="forgot-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="E-Mail">
							</div>
							<main>
								<button id="showAlert" class="d-flex justify-content-center align-items-center text-light form-control">Submit</button>
							</main>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<script>
    $("#showAlert").click(function(){
        Swal.fire(
            'Wait for our customer service contacts you',
        )
    });
</script>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
    </body>
</html>