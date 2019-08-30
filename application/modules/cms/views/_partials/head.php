<?php 
// $this->simple_login->cek_login(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">
	
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png">
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png" sizes="16x16">


	<title>SIMRS - Responsive Admin Template</title>

	<link href="<?= base_url();?>assets/backend/css/app.css" rel="stylesheet">
	<!-- <link href="assets/css/datepicker3.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/datetimepicker.css" rel="stylesheet"> -->
	<!-- <link href="assets/editable/css/bootstrap-editable.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/custom.css" rel="stylesheet"> -->
<script src="<?= base_url()?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url('assets/backend/ckeditor/ckeditor.js')?>"></script>
<script src="<?= base_url()?>assets/js/sweetalert2.all.js"></script>

</head>

<body>
	<div class="wrapper">
		<div class="d-flex">			
			<nav class="sidebar">
                <?php include "side_menu.php";?>
            </nav>

			<div class="main">
            <?php
            include "navbar.php";
            ?>
				<main class="content">