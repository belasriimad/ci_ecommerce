<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Codeigniter Shop</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Codeigniter Shop</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url()?>">Home</a></li>
          </ul>
          <?php if(!$this->session->userdata('logged') && empty($this->session->userdata('id'))):?>
          <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url();?>users/register">Register</a></li>
          </ul>
          <form action="<?php echo base_url();?>users/login" method="post" class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Email" name="email" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" name="password"  class="form-control" required="">
              </div>
              <button type="submit" class="btn btn-success">Login</button>
          </form>
          <?php else:?>
             <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
             </ul>
          <?php endif;?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
  
