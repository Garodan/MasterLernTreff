<!DOCTYPE html>
<html ng-app>
    <head>
        <title>LernTreff Treffen erstellen</title>
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
        <!-- Treffen erstellen  CSS -->
        <link href="css/treffenErstellen.css" rel="stylesheet">

        <!-- Scripts -->

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <!-- kein Plan -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <!-- kein Plan -->
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>



    </head>

    <body>
        <!-- HEADER(Navbar) -->
        <ng-include src="'templates/header.php'"></ng-include>

        <!-- Treffen erstellen FORM -->
        <div>
            <form class="form-horizontal" >
                <fieldset>



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
                        <input type="submit" name="btnInsert" class="btn btn-info" ng-click="treffenInsert()" value="Treffen erstellen"/>
                    </div>
                </fieldset>
            </form>
        </div>

        <!-- Footer-->
        <ng-include src="'templates/footer.php'"></ng-include>
        <!-- Angularjs -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
        <!-- Own Script -->
        <script src="js/app.js"></script>
    </body>
</html>

