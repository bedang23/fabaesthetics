<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="{{asset('login_assets/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('login_assets/css/my-login.css')}}">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{asset('login_assets/img/logo.jpg')}}" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							@if(!empty($msg))
							<p class="alert alert-danger alert-block">{{$msg}}</p>
							@endif
							<form method="POST" class="my-login-validation" novalidate="" action="{{url('/admin/login')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
									<label for="username">UserName</label>
									<input id="username" type="username" class="form-control" name="username" value="" required autofocus>
									<span style="color: red; float: left;"></span>
									<div class="invalid-feedback">
										UserName is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<span style="color: red; float: left;"></span>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>							
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Chahal Academy 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('login_assets/js/jquery-3.3.1.slim.min.js')}}" crossorigin="anonymous"></script>
	<script src="{{asset('login_assets/js/popper.min.js')}}" crossorigin="anonymous"></script>
	<script src="{{asset('login_assets/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
