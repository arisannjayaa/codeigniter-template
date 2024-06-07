<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Login</title>
	@include('components/css')
</head>

<body class=" d-flex flex-column">
	<script src="<?= base_url('assets/') ?>dist/js/demo-theme.min.js?1684106062"></script>
	<div class="page page-center">
		<div class="container container-tight py-4">
			<div class="text-center mb-4">
				<a href="." class="navbar-brand navbar-brand-autodark"><img
						src="<?= base_url('assets/') ?>static/logo.svg" height="36" alt=""></a>
			</div>
			<div class="card card-md">
				<div class="card-body">
					<h2 class="h2 text-center mb-4">Login to your account</h2>
					<form id="form-login">
						<div class="mb-3">
							<label class="form-label">Email address</label>
							<input type="email" class="form-control" placeholder="your@email.com" autocomplete="off"
								name="email">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="your@email.com" autocomplete="off"
								name="password">
						</div>
<!--						<div class="mb-2">-->
<!--							<label class="form-check">-->
<!--								<input type="checkbox" class="form-check-input" />-->
<!--								<span class="form-check-label">Remember me on this device</span>-->
<!--							</label>-->
<!--						</div>-->
						<div class="form-footer">
							<button id="btn-login" type="submit" class="btn btn-primary w-100">Sign in</button>
						</div>
					</form>
				</div>
			</div>
			<div class="text-center text-muted mt-3">
				Don't have account yet? <a href="<?= base_url('assets/') ?>sign-up.html" tabindex="-1">Sign up</a>
			</div>
		</div>
	</div>
	<!-- Libs JS -->
	<!-- Tabler Core -->
	<input type="hidden" id="login-url" value="<?= base_url('login') ?>">
	@include('components/script')
	<script src="<?= base_url('assets/') ?>dist/js/login.js" defer></script>
	<script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
	<script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>
</body>

</html>
