<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
	<script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bdy">
 <div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-6">
   <img src="img/logo.svg" id="image1"> 
  </div>
  <div class="col-md-6">
</div>
<div class="col-md-6">
<form>

  <div class="form-row">
  	<div class="form-group col-md-12">
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" required>
    </div>
    <div class="form-group col-md-12">
      <input type="text" class="form-control" id="inputEmail4" placeholder="Prénom" required>
    </div>
      <div class="form-group col-md-12">
      <input placeholder="Date de Naissance" onfocus="(this.type='date')" type="text" class="form-control" id="inputEmail4" required>
    </div>
    <div class="form-group col-md-12">
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
       <div class="form-group col-md-12">
      <input type="hidden" class="form-control" id="inputEmail4" value="<?php echo $_GET["ariv"]; ?>">
      </div>
       <div class="form-group col-md-12">
      <input type="hidden" class="form-control" id="inputEmail4" placeholder="Date de Départ" id="from" name="from" value="<?php echo $_GET["depDate"]; ?>">
    </div> 
      <div class="form-group col-md-12">
      <input type="hidden" class="form-control" id="inputEmail4" placeholder="Date de Retour" id="to" name="to" value="<?php echo $_GET["arivDate"]; ?>">
    </div>
   <div class="col-md-12">
  <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
<a href="mailto:nullepart@mozilla.org?subject=reservation%des%billets%avion&body=Nombre d'enfants :<?php echo $_GET['child'] ?>%20%21%0D%0A%0D%0Anombre d'adulte : <?php echo $_GET['adulte']; ?>">
envoyer
<a>
</div>
</div>
</div>
</body>
</html>