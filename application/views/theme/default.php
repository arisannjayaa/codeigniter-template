<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>@yield('title')</title>
	@include('components/css')
</head>

<body>
	<script src="<?= base_url('assets/') ?>dist/js/demo-theme.min.js?1684106062"></script>
	<div class="page">
		<!-- Sidebar -->
		<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
					aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h1 class="navbar-brand navbar-brand-autodark">
					<a href=".">
						<h1>Codeigniter 3</h1>
					</a>
				</h1>
				<div class="navbar-nav flex-row d-lg-none">
					<div class="nav-item d-none d-lg-flex me-3">
						<div class="btn-list">
							<a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
								<!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path
										d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
									</svg>
								Source code
							</a>
							<a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
								<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path
										d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
									</svg>
								Sponsor
							</a>
						</div>
					</div>
					<div class="d-none d-lg-flex">
						<a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
							data-bs-toggle="tooltip" data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path
									d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
								</svg>
						</a>
						<a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
							data-bs-toggle="tooltip" data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
								<path
									d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
								</svg>
						</a>
						<div class="nav-item dropdown d-none d-md-flex me-3">
							<a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
								aria-label="Show notifications">
								<!-- Download SVG icon from http://tabler-icons.io/i/bell -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path
										d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
									<path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
								<span class="badge bg-red"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Last updates</h3>
									</div>
									<div class="list-group list-group-flush list-group-hoverable">
										<div class="list-group-item">
											<div class="row align-items-center">
												<div class="col-auto"><span
														class="status-dot status-dot-animated bg-red d-block"></span>
												</div>
												<div class="col text-truncate">
													<a href="#" class="text-body d-block">Example 1</a>
													<div class="d-block text-muted text-truncate mt-n1">
														Change deprecated html tags to text decoration classes (#29604)
													</div>
												</div>
												<div class="col-auto">
													<a href="#" class="list-group-item-actions">
														<!-- Download SVG icon from http://tabler-icons.io/i/star -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
															width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
															</svg>
													</a>
												</div>
											</div>
										</div>
										<div class="list-group-item">
											<div class="row align-items-center">
												<div class="col-auto"><span class="status-dot d-block"></span></div>
												<div class="col text-truncate">
													<a href="#" class="text-body d-block">Example 2</a>
													<div class="d-block text-muted text-truncate mt-n1">
														justify-content:between ⇒ justify-content:space-between (#29734)
													</div>
												</div>
												<div class="col-auto">
													<a href="#" class="list-group-item-actions show">
														<!-- Download SVG icon from http://tabler-icons.io/i/star -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
															width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
															</svg>
													</a>
												</div>
											</div>
										</div>
										<div class="list-group-item">
											<div class="row align-items-center">
												<div class="col-auto"><span class="status-dot d-block"></span></div>
												<div class="col text-truncate">
													<a href="#" class="text-body d-block">Example 3</a>
													<div class="d-block text-muted text-truncate mt-n1">
														Update change-version.js (#29736)
													</div>
												</div>
												<div class="col-auto">
													<a href="#" class="list-group-item-actions">
														<!-- Download SVG icon from http://tabler-icons.io/i/star -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
															width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
															</svg>
													</a>
												</div>
											</div>
										</div>
										<div class="list-group-item">
											<div class="row align-items-center">
												<div class="col-auto"><span
														class="status-dot status-dot-animated bg-green d-block"></span>
												</div>
												<div class="col text-truncate">
													<a href="#" class="text-body d-block">Example 4</a>
													<div class="d-block text-muted text-truncate mt-n1">
														Regenerate package-lock.json (#29730)
													</div>
												</div>
												<div class="col-auto">
													<a href="#" class="list-group-item-actions">
														<!-- Download SVG icon from http://tabler-icons.io/i/star -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
															width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
															</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
							aria-label="Open user menu">
							<span class="avatar avatar-sm"
								style="background-image: url(<?= base_url('assets/') ?>static/avatars/000m.jpg)"></span>
							<div class="d-none d-xl-block ps-2">
								<div>Paweł Kuna</div>
								<div class="mt-1 small text-muted">UI Designer</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
							<a href="#" class="dropdown-item">Status</a>
							<a href="<?= base_url('assets/') ?>profile.html" class="dropdown-item">Profile</a>
							<a href="#" class="dropdown-item">Feedback</a>
							<div class="dropdown-divider"></div>
							<a href="<?= base_url('assets/') ?>settings.html" class="dropdown-item">Settings</a>
							<a href="<?= base_url('assets/') ?>sign-in.html" class="dropdown-item">Logout</a>
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="sidebar-menu">
					@include('components/sidebar')
				</div>
			</div>
		</aside>
		<!-- Navbar -->
		@include('components/navbar')
		<div class="page-wrapper">
			<!-- Page header -->
			<div class="page-header d-print-none">
				<div class="container-xl">
					<div class="row g-2 align-items-center">
						<div class="col">
							<h2 class="page-title">
								@yield('title')
							</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- Page body -->
			<div class="page-body">
				<div class="container-xl">
					@yield('content')
				</div>
			</div>
			<footer class="footer footer-transparent d-print-none">
				<div class="container-xl">
					<div class="row text-center align-items-center flex-row-reverse">
						<div class="col-lg-auto ms-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
										class="link-secondary" rel="noopener">Documentation</a></li>
								<li class="list-inline-item"><a href="<?= base_url('assets/') ?>license.html" class="link-secondary">License</a>
								</li>
								<li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
										class="link-secondary" rel="noopener">Source code</a></li>
								<li class="list-inline-item">
									<a href="https://github.com/sponsors/codecalm" target="_blank"
										class="link-secondary" rel="noopener">
										<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
										<svg xmlns="http://www.w3.org/2000/svg"
											class="icon text-pink icon-filled icon-inline" width="24" height="24"
											viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path
												d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
											</svg>
										Sponsor
									</a>
								</li>
							</ul>
						</div>
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									Copyright &copy; 2023
									<a href="." class="link-secondary">Tabler</a>.
									All rights reserved.
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/') ?>changelog.html" class="link-secondary" rel="noopener">
										v1.0.0-beta19
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">New report</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" class="form-control" name="example-text-input"
							placeholder="Your report name">
					</div>
					<label class="form-label">Report type</label>
					<div class="form-selectgroup-boxes row mb-3">
						<div class="col-lg-6">
							<label class="form-selectgroup-item">
								<input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
								<span class="form-selectgroup-label d-flex align-items-center p-3">
									<span class="me-3">
										<span class="form-selectgroup-check"></span>
									</span>
									<span class="form-selectgroup-label-content">
										<span class="form-selectgroup-title strong mb-1">Simple</span>
										<span class="d-block text-muted">Provide only basic data needed for the
											report</span>
									</span>
								</span>
							</label>
						</div>
						<div class="col-lg-6">
							<label class="form-selectgroup-item">
								<input type="radio" name="report-type" value="1" class="form-selectgroup-input">
								<span class="form-selectgroup-label d-flex align-items-center p-3">
									<span class="me-3">
										<span class="form-selectgroup-check"></span>
									</span>
									<span class="form-selectgroup-label-content">
										<span class="form-selectgroup-title strong mb-1">Advanced</span>
										<span class="d-block text-muted">Insert charts and additional advanced analyses
											to be inserted in the report</span>
									</span>
								</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<div class="mb-3">
								<label class="form-label">Report url</label>
								<div class="input-group input-group-flat">
									<span class="input-group-text">
										https://tabler.io/reports/
									</span>
									<input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="mb-3">
								<label class="form-label">Visibility</label>
								<select class="form-select">
									<option value="1" selected>Private</option>
									<option value="2">Public</option>
									<option value="3">Hidden</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Client name</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Reporting period</label>
								<input type="date" class="form-control">
							</div>
						</div>
						<div class="col-lg-12">
							<div>
								<label class="form-label">Additional information</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
						Cancel
					</a>
					<a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
						<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
							stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M12 5l0 14" />
							<path d="M5 12l14 0" /></svg>
						Create new report
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Libs JS -->
	<script src="<?= base_url('assets/') ?>dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
	<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
	<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
	<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
	<!-- Tabler Core -->
	<script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
	<script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>
	@include('components/script')
</body>

</html>
