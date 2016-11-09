<?php
$connect = mysqli_connect("localhost", "root", "lerntreff", "lerntreff_db");
$query ="SELECT * FROM treffeneintraege ORDER BY ID DESC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LernTreff Liste</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/trefflist.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <!--link href="css/buttons.css" rel="stylesheet"-->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
    <link rel="stylesheet" href="css/bootgrid.css" />
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
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


    <br /><br />
    <div class="container">
         <h3 align="center">Liste der Treffen</h3>
         <br />
         <div class="table-responsive">
              <table id="treffen_data" class="table table-striped table-bordered">
                   <thead>
                        <tr>
                             <th data-column-id="id" data-type="numeric">Treffennr.</th>
                             <th data-column-id="ueberschrift">Überschrift</th>
                             <th data-column-id="studiengang">Studiengang</th>
                             <th data-column-id="semester">Semester</th>
                             <th data-column-id="modul">Modul</th>
                             <th data-column-id="ort">Ort</th>
                             <th data-column-id="datum">Datum</th>
                             <th data-column-id="zeit">Uhrzeit</th>
                             <th data-column-id="beschreibung_treff">Beschreibung</th>
                             <th data-column-id="userID">Ersteller</th>
                        </tr>
                   </thead>
                   <tbody>
                   <?php
                   while($row = mysqli_fetch_array($result))
                   {
                        echo '
                        <tr>
                             <td>'.$row["ID"].'</td>
                             <td>'.$row["ueberschrift_treff"].'</td>
                             <td>'.$row["studiengang_treff"].'</td>
                             <td>'.$row["semester_treff"].'</td>
                             <td>'.$row["modul_treff"].'</td>
                             <td>'.$row["ort_treff"].'</td>
                             <td>'.$row["datum_treff"].'</td>
                             <td>'.$row["zeit_treff"].'</td>
                             <td>'.$row["beschreibung_treff"].'</td>
                             <td>'.$row["userID"].'</td>
                        </tr>
                        ';
                   }
                   ?>
                   </tbody>
              </table>
         </div>
    </div>


    <div class="container">
        <div class="row" style="padding-top: 65px;">
            <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                <ul class="event-list">
                    <li>
                        <!--Testeinträge für Design und Funktionalität-->
                        <time datetime="2016-11-01">
                            <span class="day">4</span>
                            <span class="month">Nov</span>
                            <span class="year">2016</span>
                            <span class="time">ALL DAY</span>
                        </time>
                        <div class="info">
                            <h2 class="title">Lerngruppe Sem. 1 Diskrete Mathematik</h2>
                            <p class="desc">Bibliothek Campus Lichtenberg</p>
                            <h3>An LernTreff teilnehmen</h3>
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label style="font-size: 2.5em">
                                        <input type="checkbox" value="" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Huge
                                    </label>
                                </div>
                            </div>

                    </li>
                    <li>
                        <time datetime="2016-11-02 0000">
                            <span class="day">4</span>
                            <span class="month">Nov</span>
                            <span class="year">2016</span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title">HA Logik Höhne</h2>
                            <p class="desc">6B 173 Campus Lichtenberg</p>
                        </div>
                    </li>
                    <li>
                        <time datetime="2016-11-03 2000">
                            <span class="day">20</span>
                            <span class="month">Dez</span>
                            <span class="year">2016</span>
                            <span class="time">8:00 PM</span>
                        </time>
                        <div class="info">
                            <h2 class="title">Klausurvorbereitung Sem. 2 BWL</h2>
                            <p class="desc">Bibliothek Campus Sch&oumlneberg</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
$("#treffen_data").bootgrid();
</script>
