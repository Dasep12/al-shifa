<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Al-Shifa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/starter-template/">    

    <!-- Bootstrap core CSS -->
<link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/css/bootstrap-datepicker.min.css" rel="stylesheet">

<script src="<?= base_url('assets/js/') ?>jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/') ?>starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
  <a class="navbar-brand" href="#">Report Al-shifa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Laporan<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Input</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">

  <?= $contents ?>

</main><!-- /.container -->


    
      <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url() ?>/assets/js/bootstrap-datepicker.js"></script>

     <script>
      $(function(){
          $('#datepicker').datepicker({
              format : 'yyyy-mm-dd' ,
              autoclose : true 
          });
      })
    </script>
  </body>
</html>
