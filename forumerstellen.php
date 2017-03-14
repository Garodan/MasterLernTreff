<!DOCTYPE html>
<html ng-app='lerntreff'>

<head>
  <meta charset="utf-8" lang="DE">
  <!--viewport-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LernTreff Forum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/indexmenu.css" rel="stylesheet">

    <!-- Scripts -->
    <!-- Muss drin bleiben wegen Angualrjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <!-- Jquery muss auch unbedingt drin bleiben -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Own Script -->
    <script src="app.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>



<body>
  <!-- HEADER(Navbar) -->
  <ng-include src="'templates/header.php'"></ng-include>

  <div class="container" style="width:500px;">
                  <h3 align="center">Forumbeitrag erstellen</h3>
                  <div ng-app="myapp" ng-controller="forumcontroller">
                       <label>Thema</label>
                       <input type="text" name="thema_forum" ng-model="thema" class="form-control" required/>
                       <br />
                       <label>Beitrag</label>
                       <textarea input type="text" name="beitrag_forum" ng-model="beitrag" class="form-control" required/></textarea>
                       <br />
                       <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Beitrag erstellen"/>
             </div>

<!-- TODO | CSS lässt den Footer ausblenden -->
<!-- Footer -->
<ng-include src="'templates/footer.php'"></ng-include>

<!-- Own Script -->
<script src="app.js"></script>
</body>

</html>

<!-- TODO | Externes Script -->
<script>
var app = angular.module('lerntreff',[]);
app.controller("forumcontroller", function($scope, $http){
     $scope.insertData = function(){
          $http.post(
               "php/insert.php",
               {'thema':$scope.thema, 'beitrag':$scope.beitrag}
          ).success(function(data){
               alert(data);
               alert("Hallo");
               $scope.thema = null;
               $scope.beitrag = null;
          });
     }
});
</script>
