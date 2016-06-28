<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pwitter</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/static/css/style.css">
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Pwitter</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="<?= base_url(); ?>">Home</a>
					<?= anchor('authentication/logout', 'Logout', array('class' => 'mdl-navigation__link')); ?>
				</nav>
			</div>
		</header>
		<main class="mdl-layout__content">
			<div class="mdl-grid">
  				<div class="mdl-cell mdl-cell--1-col"></div>
  				<div class="mdl-cell mdl-cell--10-col">