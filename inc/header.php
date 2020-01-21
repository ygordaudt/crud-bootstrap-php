<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>CRUD com Bootstrap</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      body {
          padding-top: 50px;
          padding-bottom: 20px;
      }
  </style>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">PGC SIT</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">          
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Clientes <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo BASEURL; ?>customers/index.php">Gerenciar Clientes</a></li>
                  <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
              </ul>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Relatórios <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                  <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
              </ul>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Relatórios <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                  <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
              </ul>
          </li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>

  <main class="container">