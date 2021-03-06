<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MyBikeTraffic.com<?php echo isset($title)?' '.$title:'';?></title>

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('assets/css/default.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="<?php echo site_url('assets/css/iThing-min.css'); ?>" rel="stylesheet">

    <!-- Need to make sure jquery is loaded before maps -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo site_url('assets/js/jQRangeSlider-min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    
	<script type="text/javascript">
		var site_url = "<?php echo site_url(''); ?>";
	</script>
    <style>
      .stationary { display:none; }
    </style>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Bike Traffic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php echo anchor('welcome/home','Home',['class'=>'nav-link active', 'aria-current'=>'page']); ?>
        </li>
        <li class="nav-item">
          <?php echo anchor('welcome/rides','Rides',['class'=>'nav-link active', 'aria-current'=>'page']); ?>
        </li>
        <li class="nav-item">
          <?php echo anchor('welcome/ridelist','Ride List',['class'=>'nav-link active', 'aria-current'=>'page']); ?>
        </li>      
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit">Donate</button>
      </form>
      <button class="btn btn-outline-danger" type="submit">Import new rides</button>
    </div>
  </div>
</nav>
    <main role="main" class="container" style="max-width:100%">
