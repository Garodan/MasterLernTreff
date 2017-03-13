<?php
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
?>

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
        <!-- Treffen Liste  CSS -->
        <link href="css/trefflist.css" rel="stylesheet">
        <!--Bootsgrid-->
        <link rel="stylesheet" href="css/bootgrid.css" />
        <!-- Scripts -->
        <!-- Angularjs -->

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
        <!-- Header(Navbar) -->
        <ng-include src="'templates/header.php'"></ng-include>

        <div class="container">
            <h2 align="center">Liste der aktuellen Treffen</h2>
        </div>

        <div class="container" ng-controller="entryctrl">
            <div is="entries">
                <p>
                    <input ng-model="suchtext" class="form-control" placeholder="Suchtext..."/>
                </p>
                <div class="row" style="padding-top: 65px;">
                    <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                        <ul class="event-list">
                            <div ng-repeat="entry in entries | orderBy: 'timestamp':true | formattedTimestamp:'timestamp':'formattedTimestamp':'dd.MM.yyyy' | filter: suchtext" class="well">

                                <li>
                                    <time datetime="2016-11-02 0000">
                                        <span class="day"><?php $query1 = "SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC";
                                            $result1 = mysqli_query($connect, $query1);

                                            while ($row1 = mysqli_fetch_array($result1))
                                            {
                                                echo substr("{$row1['datum_treff']}", 9, 2);
                                            } ?></span>
                                        <span class="month"><?php $query1 = "SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC";
                                            $result1 = mysqli_query($connect, $query1);

                                            while ($row1 = mysqli_fetch_array($result1))
                                            {
                                                echo substr("{$row1['datum_treff']}", 5, 2);
                                            } ?></span>
                                        <span class="year"><?php $query1 = "SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC";
                                            $result1 = mysqli_query($connect, $query1);

                                            while ($row1 = mysqli_fetch_array($result1))
                                            {
                                                echo substr("{$row1['datum_treff']}", 1, 4);
                                            } ?></span>
                                        <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title"><?php $query1 = "SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC";
                                            $result1 = mysqli_query($connect, $query1);

                                            while ($row1 = mysqli_fetch_array($result1))
                                            {
                                                echo "{$row1['beschreibung_treff']}";
                                            } ?></h2>
                                        <p class="desc"><?php $query1 = "SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC";
                                            $result1 = mysqli_query($connect, $query1);

                                            while ($row1 = mysqli_fetch_array($result1))
                                            {
                                                echo "{$row1['ort_treff']}";
                                            } ?></p>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <ng-include src= "'templates/footer.php'"></ng-include>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
        <!-- Own Script -->
        <script src="js/app.js"></script>
    </body>
</html>

