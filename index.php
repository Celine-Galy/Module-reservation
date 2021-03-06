<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Simplairline</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body id="bdy">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/logo.svg" alt="" id="image1">
            </div>
            <div class="col-md-6">
            </div>
            <h1></h1>
            <form method="post" action="">
            <div class="col-md-6">
                <div class="form-row">
                    <div class="col-md-2">
                        <i class="material-icons">flight_takeoff</i>
                        
                    </div>
                    
                    <div class="form-group col-md-10">
                        <div class="ui-widget">
                        <input type="text" name="depart" class="form-control" id="depart" placeholder="Départ de..." required>
                    </div>
                    </div>
                    <div class="col-md-2">
                        <i class="material-icons">flight_land</i>
                    </div>
                    
                    <div class="form-group col-md-10">
                        <div class="ui-widget">
                        <input type="text" name="ariver" class="form-control" id="arrivee" placeholder="Arrivée à..." required>
                        </div>
                    </div>
            
                    <div class="col-md-2">
                        <i class="material-icons">event</i>
                    </div>
                    <div class="form-group col-md-4">
                        <input id="fromDate" name="departDate" class="form-control" id="inputEmail4" placeholder="Date de départ" required>
                    </div>
                    <div class="col-md-2">
                        <i class="material-icons">event</i>
                    </div>
                    <div class="form-group col-md-4">
                        <input id="toDate" name="ariverDate" class="form-control" id="inputEmail4" placeholder="Date de retour" required>
                    </div>
                    <div class="col-md-2">
                        <img src="img/tourist.svg" id="tourist">
                    </div>
                    <div class="form-group col-md-5">
                        <select name="maj" class="form-control" id="inputEmail4" placeholder="Nombre d'adultes" required>
        <option>Nombre d'adultes</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
        </div>
    <div class="form-group col-md-5">
    <select type="" name="child" class="form-control" id="inputEmail4" placeholder="Nombre d'enfants">
        <option>Nombre d'enfants</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
        <button id="submit" type="submit" name="submit" class="btn btn-primary col-md-12">Rechercher</button>

    </div>
</form>
  <div class="col-md-6">
  </div>

 </div>
</div>
<script src="js/script.js"></script>
</body>
<?php
if(isset($_POST["submit"])){
        $depart = $_POST["depart"];
        $ariv = $_POST["ariver"];
        $depDate = $_POST["departDate"];
        $arivDate = $_POST["ariverDate"];
        $adulte = $_POST["maj"];
        $child = $_POST["child"];
        $link ="<script>open('inscription.php?depart=$depart&ariv=$ariv&depDate=$depDate&arivDate=$arivDate&adulte=$adulte&child=$child')</script>";
            echo $link;
    }
?>
</html>