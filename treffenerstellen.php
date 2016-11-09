<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LernTreff erstellen</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/trefflist.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <!--link href="css/buttons.css" rel="stylesheet"-->


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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    </head>
    <div ng-app="myapp2" ng-controller="forumcontroller">
    <form class="form-horizontal" >
        <fieldset>

            <!-- Form Name -->
            <!--<legend>Neuer LernTreff</legend>-->

            <!-- Text input-->
            <div class="form-group">
                <br /><br />
                <label class="col-md-4 control-label" for="ueberschrift_treff">Überschrift</label>
                <div class="col-md-4">
                    <input id="ueberschrift_treff" name="ueberschrift_treff" ng-model="ueberschrift" type="text" placeholder="Thema" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="studiengang_treff">Studiengang</label>
                <div class="col-md-4">
                    <select id="studiengang_treff" name="studiengang_treff" ng-model="studiengang" class="form-control">
                        <option value="Industrielle Elektrotechnik">Industrielle Elektrotechnik</option>
                        <option value="Bauingenieurwesen">Bauingenieurwesen</option>
                        <option value="Konstruktion und Fertigung">Konstruktion und Fertigung</option>
                        <option value="Technisches Facility Management">Technisches Facility Management</option>
                        <option value="Informatik">Informatik</option>
                        <option value="Wirtschaftsinformatik">Wirtschaftsinformatik</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="semester_treff">Semester</label>
                <div class="col-md-4">
                    <select id="semester_treff" name="semester_treff" ng-model=semester class="form-control">
                        <option value="1. Semester">1. Semester</option>
                        <option value="2. Semester">2. Semester</option>
                        <option value="3. Semester">3. Semester</option>
                        <option value="4. Semester">4. Semester</option>
                        <option value="5. Semester">5. Semester</option>
                        <option value="6. Semester">6. Semester</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="modul_treff">Modul</label>
                <div class="col-md-4">
                    <input id="modul_treff" name="modul_treff" ng-model="modul" type="text" placeholder="z.B. Software-Engineering I" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ort_treff">Lernort</label>
                <div class="col-md-4">
                    <input id="ort_treff" name="ort_treff" ng-model="ort" type="text" placeholder="z.B. HWR Bücherei " class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="datum_treff">Datum</label>
                <div class="col-md-4">
                    <input id="datum_treff" name="datum_treff" ng-model="datum" type="date" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="zeit_treff">Zeit:</label>
                <div class="col-md-4">
                    <input id="zeit_treff" name="zeit_treff" ng-model="zeit" type="time" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="beschreibung_treff">Beschreibung:</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="beschreibung_treff" name="beschreibung_treff" ng-model="beschreibung" placeholder="eine kurze Beschreibung zur Orientierung"></textarea>
                </div>
            </div>
            <div class="container" style="width:650px;">
              <br />
            <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Treffen erstellen"/>
          </div>
        </fieldset>
    </form>
</div>
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
var app = angular.module("myapp2",[]);
app.controller("forumcontroller", function($scope, $http){
     $scope.insertData = function(){
          $http.post(
               "php/insertliste.php",
               {'ueberschrift':$scope.ueberschrift, 'studiengang':$scope.studiengang, 'semester':$scope.semester, 'modul':$scope.modul, 'ort':$scope.ort, 'datum':$scope.datum, 'zeit':$scope.zeit, 'beschreibung':$scope.beschreibung}
          ).success(function(data){
               alert(data);
               $scope.ueberschrift = null;
               $scope.studiengang = null;
               $scope.semester = null;
               $scope.modul = null;
               $scope.ort = null;
               $scope.datum = null;
               $scope.zeit = null;
               $scope.beschreibung = null;
          });
     }
});
</script>
