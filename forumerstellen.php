
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LernTreff Forumeintrag erstellen</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/kalender.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

</head>
<body>

  <header>
      <div class="navbar-wrapper">
          <div class="container-fluid">
              <nav class="navbar navbar-fixed-top">
                  <div class="container">
                      <div class="navbar-header">
                          <a class="navbar-brand" href="startseite.html">LernTreff</a>
                      </div>
                      <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forum <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class=" dropdown">
                                        <a href="forumerstellen.php">Forumsbeitrag erstellen</a>
                                    </li>
                                    <li><a href="forumliste.php">Forumsbeiträge</a></li>
                                </ul>
                            </li>
                              <li class=" dropdown">
                                  <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Treffen <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li class=" dropdown">
                                          <a href="treffenerstellen.php">Neues Treffen erstellen</a>
                                      </li>
                                      <li><a href="treffenliste.php">Liste der Treffen</a></li>
                                  </ul>
                              </li>
                              <li class="active"><a href="kalender.html">Kalender</a></li>
                          </ul>
                          <ul class="nav navbar-nav pull-right">
                              <li class=" dropdown">
                                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eingeloggt als  <span class="caret"></span></a>
                                  <ul class="dropdown-menu">

                                      <li><a href="#">Mein Profil</a></li>
                                  </ul>
                              </li>
                              <li class=""><a href="index.html">Logout</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </header>

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



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
            <!-- Footer-->
<footer class="bs-footer" role="contentinfo">
    <div style="position: relative; height: 300px;">
<p style="position: absolute; bottom: 0;"></p>
</div>
  <div class="container" style="width:500px;">
    <center> hwr-lerntreff.de <a href="impressum.html" target="_blank">Impressum</a> | <a href="agbs.html" target="_blank">AGBs</a> | <a href="faq.html" target="_blank">FAQ</a></center>
  </div>
</footer>

</body>
</html>

<script>
var app = angular.module("myapp",[]);
app.controller("forumcontroller", function($scope, $http){
     $scope.insertData = function(){
          $http.post(
               "php/insert.php",
               {'thema':$scope.thema, 'beitrag':$scope.beitrag}
          ).success(function(data){
               alert(data);
               $scope.thema = null;
               $scope.beitrag = null;
          });
     }
});
</script>
