<!DOCTYPE html>
<html lang="de" ng-app>
<?php
session_start(true); 
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
$name = $_SESSION['name'];
$test='"';

$query1 = "SELECT * FROM userliste WHERE username=$test$name$test ORDER BY username DESC";
file_put_contents("text.txt", $query1);
$result1 = mysqli_query($connect, $query1);
$row2 = mysqli_fetch_array($result1);
$_SESSION['row1'] = $row2;
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User profile form requirement</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!--viewport-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <!-- Navbar -->
    <link href="css/navbar.css" rel="stylesheet">
    <!-- K.A. -->
    <link href="css/indexmenu.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Scripts -->
    <!-- Angularjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Own Script -->
    <!--script src="app.js"></script-->
    <!-- kein Plan -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <!-- kein Plan -->
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Dateibrowser Startseite -->
    <script src="js/upload.js"></script>
</head>

<body>
<!-- HEADER(Navbar) -->
    <ng-include src="'templates/header.php'"></ng-include>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" action="" method="POST" onSubmit="window.location.reload()">
<fieldset>

<!-- Form Name -->
<legend>Dein Profil <?php if($row2['name']!="Name"){echo ($row2['name']);}?></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name (Full name)">Name</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="name2" type="text" placeholder="<?php echo $row2['name'];?>" class="form-control input-md">
      </div>
  </div>  
</div>


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Geschlecht</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Gender-0">
      <input type="radio" name="Gender" id="Gender-0" value="1" <?php if($row2['geschlecht']==1){echo 'checked="checked"';}?>>
      Mann
    </label> 
    <label class="radio-inline" for="Gender-1">
      <input type="radio" name="Gender" id="Gender-1" value="2" <?php if($row2['geschlecht']==2){echo 'checked="checked"';}?>>
      Frau
    </label> 
    <label class="radio-inline" for="Gender-2">
      <input type="radio" name="Gender" id="Gender-2" value="3" <?php if($row2['geschlecht']==3){echo 'checked="checked"';}?>>
      Anderes
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Primary Occupation">Studiengang</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <input id="Primary Occupation" name="studiengang" type="text" placeholder="<?php echo $row2['studiengang'];?>" class="form-control input-md">
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email Addresse</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email Address" name="email" type="text" placeholder="<?php echo $row2['email'];?>" class="form-control input-md">
    
      </div>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="License No.">Matrikelnummer</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-sticky-note-o"></i>
        
       </div>
   <input id="License No." name="matnr" type="text" placeholder="<?php echo $row2['matrikelnummer'];?>" class="form-control input-md">
    
      </div>
 
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Overview (max 200 words)">Über dich: (max 200 Wörter)</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="beschreibung"><?php echo $row2['text'];?></textarea>
  </div>
</div>


<div ng-controller="MyCtrl" class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4" >
  <button class="btn btn-success" type="submit" ng-click="reloadPage()"><span class="glyphicon glyphicon-thumbs-up"></span> Aktualisieren</a></button>
  <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove-sign"></span> Rückgängig</a>
    
  </div>
</div>


</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Footer -->
    <ng-include src="'templates/footer.php'"></ng-include>

  
</body>

</html>
<?php
if(isset($_POST['name2'])||isset($_POST['Gender'])||isset($_POST['studiengang'])||isset($_POST['email'])||isset($_POST['matnr'])||isset($_POST['beschreibung']))
{
  $name = $_SESSION['name'];
  if($_POST['name2']!="") {$name2 = $_POST['name2'];} else {$name2 = $row2['name'];}
  if($_POST['Gender']!="") {$geschlecht = $_POST['Gender'];} else {$geschlecht = $row2['geschlecht'];}
  if($_POST['studiengang']!="") {$studiengang = $_POST['studiengang'];} else {$studiengang = $row2['studiengang'];}
  if($_POST['email']!="") {$email = $_POST['email'];} else {$email = $row2['email'];}
  if($_POST['matnr']!="") {$matrikelnummer = $_POST['matnr'];} else {$matrikelnummer = $row2['matrikelnummer'];}
  if($_POST['beschreibung']!="") {$text = $_POST['beschreibung'];} else {$text = $row2['text'];}
  $test='"';
  $eintrag= "UPDATE userliste SET name=$test$name2$test,geschlecht=$test$geschlecht$test,studiengang=$test$studiengang$test,email=$test$email$test,matrikelnummer=$test$matrikelnummer$test,text=$test$text$test WHERE username=$test$name$test";
  //$eintrag = "UPDATE userliste (username,name,geschlecht,studiengang,email,matrikelnummer,text) VALUES ('$name','$name2','$geschlecht','$studiengang','$email','$matrikelnummer','$text')";
  $eintragen = mysqli_query($connect, $eintrag);
}
?>
    <script>
    var myApp = angular.module('myApp',[]);

  function MyCtrl($scope) {
    $scope.reloadPage = function(){window.location.reload();}
}
</script>