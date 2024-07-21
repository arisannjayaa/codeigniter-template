<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Error <?= $status_code ?></title>
	<!-- CSS files -->
	<!-- CSS files -->
	<link href="<?= base_url('assets/') ?>dist/css/tabler.min.css?1684106062" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>dist/css/demo.min.css?1684106062" rel="stylesheet" />
	<style>
		<blade import|%20url(%26%2339%3Bhttps%3A%2F%2Frsms.me%2Finter%2Finter.css%26%2339%3B)%3B%0D> :root {
																									  --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
																								  }

		body {
			font-feature-settings: "cv03", "cv04", "cv11";
		}
	</style>
</head>
<body  class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
	<div class="container-tight py-4">
		<div class="empty">
			<div class="empty-header"><?= $status_code ?></div>
			<p class="empty-title"><?= $heading ?></p>
			<p class="empty-subtitle text-muted">
				<?= $message ?>
			</p>
			<div class="empty-action">
				<a href="<?= base_url('') ?>" class="btn btn-primary">
					<!-- Download SVG icon from http://tabler-icons.io/i/arrow-left -->
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
					Kembali Ke Beranda
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<!-- Libs JS -->
<script src="<?= base_url('assets/') ?>dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
<script src="<?= base_url('assets/') ?>dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
<!-- Tabler Core -->
<script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
<script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>
</body>
</html>
