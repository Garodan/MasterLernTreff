<!DOCTYPE html>
<html ng-app>

<head>
  <title>LernTreff Startseite</title>
  <meta charset="utf-8" lang="DE">

  <!--viewport-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Navbar -->
  <link href="css/navbar.css" rel="stylesheet">
  <!-- K.A. -->
  <link href="css/indexmenu.css" rel="stylesheet">
  <!-- Upload CSS -->
  <link rel="stylesheet" type="text/css" href="css/upload.css">

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
  <!-- TODO | muss noch in CSS geändert werden -->
</br>
</br>
<article>
  <div class="row">
    <div class="col-md-3">
      <span class="center-menu">
        <ul>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Allgemein Fachbereich 2</a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Bank </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Bauwesen </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Dienstleistungen </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Elektrotechnik </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Handel </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Immobilien </a></li>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Industrie </a></li>
          <li><a href="" id="infodata"><i class="fa fa-chevron-right" aria-hidden="true"></i> Informatik </a></li>
          <div id="infoappend"></div>
          <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Maschinenbau </a></li>
        </ul>
        <span>
    </div>

        <div class="col-md-9">
          <span class="text">
            <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading"><strong>Dateien hochladen</strong></div>
                <div class="panel-body">


                  <!-- Standar Form -->
                  <h4>Bitte wählen Sie eine Datei von ihrem Computer aus!</h4>
                  <form action="submit" method="post" enctype="multipart/form-data" id="js-upload-form">
                    <div class="form-inline">
                      <div class="form-group">
                        <input type="file" name="files[]" id="js-upload-files" multiple>
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Datei hochladen</button>
                    </div>
                  </form>

                  <!-- Drop Zone -->
                  <h4>Oder benutzen Sie Drag & Drop</h4>
                  <div class="upload-drop-zone" id="drop-zone">
                    Ziehen Sie Ihre Datei in das Fenster.
                  </div>
                  <div class="form-horizontal" >
                    <div class="form-group">
                      <label class="col-md-2 control-label">Studiengang</label>
                      <div class="col-md-9">
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
                  </div>
                  <div class="js-upload-finished">
                    <h3>Processed files</h3>
                    <div class="list-group" id="list">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /container -->
          </span>
        </div>

      </div>
    </article>

    <!-- Footer -->
    <ng-include src="'templates/footer.php'"></ng-include>
  </body>
  </html>
