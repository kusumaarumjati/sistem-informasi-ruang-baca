<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href={!! asset('assets/css/bootstrap.min.css') !!}>
	<link rel="stylesheet" href={!! asset('assets/vendor/font-awesome/css/font-awesome.min.css') !!}>
	<link rel="stylesheet" href={!! asset('assets/vendor/linearicons/style.css') !!}>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href={!! asset('assets/css/main.css') !!}>
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href={!! asset('assets/css/demo.css') !!}>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href={!! asset('assets/img/apple-icon.png') !!}>
	<link rel="icon" type="image/png" sizes="96x96" href={!! asset('assets/img/favicon.png') !!}>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="/masuk" method="post">
								@csrf
								 @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
								<div class="form-group">
									<label for="username" class="control-label sr-only">Email</label>
									<input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
									@error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required autocomplete="current-password">
									   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left" for="remember">
										<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>


</html>
