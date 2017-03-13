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

  <!-- Scripts -->
  <!-- Angularjs -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- Own Script -->
  <script src="app.js"></script>
  <!-- kein Plan -->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <!-- kein Plan -->
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <ng-include src="'header.html'"></ng-include>

  <div class="container">
    <h2 align="center">Liste der aktuellen Treffen</h2>
  </div>

  <div class="container">
    <div class="row" style="padding-top: 65px;">
      <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
        <ul class="event-list">
          <li>
            <time datetime="2016-11-02 0000">
                            <span class="day"><?php $query1 ="SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC"; $result1 = mysqli_query($connect, $query1); while($row1 = mysqli_fetch_array($result1)){echo substr("{$row1['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query1 ="SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC"; $result1 = mysqli_query($connect, $query1); while($row1 = mysqli_fetch_array($result1)){echo substr("{$row1['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query1 ="SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC"; $result1 = mysqli_query($connect, $query1); while($row1 = mysqli_fetch_array($result1)){echo substr("{$row1['datum_treff']}",1,4);}?></span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query1 ="SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC"; $result1 = mysqli_query($connect, $query1); while($row1 = mysqli_fetch_array($result1)){echo "{$row1['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query1 ="SELECT * FROM treffeneintraege WHERE ID=1 ORDER BY ID DESC"; $result1 = mysqli_query($connect, $query1); while($row1 = mysqli_fetch_array($result1)){echo "{$row1['ort_treff']}";}?></p>
                        </div>
                    </li>
                    <li>
                        <time datetime="2026-22-02 0000">
                            <span class="day"><?php $query2 ="SELECT * FROM treffeneintraege WHERE ID=2 ORDER BY ID DESC"; $result2 = mysqli_query($connect, $query2); while($row2 = mysqli_fetch_array($result2)){echo substr("{$row2['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query2 ="SELECT * FROM treffeneintraege WHERE ID=2 ORDER BY ID DESC"; $result2 = mysqli_query($connect, $query2); while($row2 = mysqli_fetch_array($result2)){echo substr("{$row2['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query2 ="SELECT * FROM treffeneintraege WHERE ID=2 ORDER BY ID DESC"; $result2 = mysqli_query($connect, $query2); while($row2 = mysqli_fetch_array($result2)){echo substr("{$row2['datum_treff']}",1,4);}?></span>
                            <span class="time">22:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query2 ="SELECT * FROM treffeneintraege WHERE ID=2 ORDER BY ID DESC"; $result2 = mysqli_query($connect, $query2); while($row2 = mysqli_fetch_array($result2)){echo "{$row2['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query2 ="SELECT * FROM treffeneintraege WHERE ID=2 ORDER BY ID DESC"; $result2 = mysqli_query($connect, $query2); while($row2 = mysqli_fetch_array($result2)){echo "{$row2['ort_treff']}";}?></p>
                        </div>
                    </li>
					   <li>
                        <time datetime="2016-11-02 0000">
                            <span class="day"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo substr("{$row3['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo substr("{$row3['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo substr("{$row3['datum_treff']}",1,4);}?></span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo "{$row3['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo "{$row3['ort_treff']}";}?></p>
                            <p class="desc"><?php $query3 ="SELECT * FROM treffeneintraege WHERE ID=3 ORDER BY ID DESC"; $result3 = mysqli_query($connect, $query3); while($row3 = mysqli_fetch_array($result3)){echo "Beschreibung: {$row3['beschreibung_treff']}";}?></p>
                     </div>
                    </li>
                       <li>
                        <time datetime="2016-11-02 0000">
                            <span class="day"><?php $query4 ="SELECT * FROM treffeneintraege WHERE ID=4 ORDER BY ID DESC"; $result4 = mysqli_query($connect, $query4); while($row4 = mysqli_fetch_array($result4)){echo substr("{$row4['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query4 ="SELECT * FROM treffeneintraege WHERE ID=4 ORDER BY ID DESC"; $result4 = mysqli_query($connect, $query4); while($row4 = mysqli_fetch_array($result4)){echo substr("{$row4['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query4 ="SELECT * FROM treffeneintraege WHERE ID=4 ORDER BY ID DESC"; $result4 = mysqli_query($connect, $query4); while($row4 = mysqli_fetch_array($result4)){echo substr("{$row4['datum_treff']}",1,4);}?></span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query4 ="SELECT * FROM treffeneintraege WHERE ID=4 ORDER BY ID DESC"; $result4 = mysqli_query($connect, $query4); while($row4 = mysqli_fetch_array($result4)){echo "{$row4['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query4 ="SELECT * FROM treffeneintraege WHERE ID=4 ORDER BY ID DESC"; $result4 = mysqli_query($connect, $query4); while($row4 = mysqli_fetch_array($result4)){echo "{$row4['ort_treff']}";}?></p>
                        </div>
                    </li>
					   <li>
                        <time datetime="2016-11-02 0000">
                            <span class="day"><?php $query5 ="SELECT * FROM treffeneintraege WHERE ID=5 ORDER BY ID DESC"; $result5 = mysqli_query($connect, $query5); while($row5 = mysqli_fetch_array($result5)){echo substr("{$row5['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query5 ="SELECT * FROM treffeneintraege WHERE ID=5 ORDER BY ID DESC"; $result5 = mysqli_query($connect, $query5); while($row5 = mysqli_fetch_array($result5)){echo substr("{$row5['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query5 ="SELECT * FROM treffeneintraege WHERE ID=5 ORDER BY ID DESC"; $result5 = mysqli_query($connect, $query5); while($row5 = mysqli_fetch_array($result5)){echo substr("{$row5['datum_treff']}",1,4);}?></span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query5 ="SELECT * FROM treffeneintraege WHERE ID=5 ORDER BY ID DESC"; $result5 = mysqli_query($connect, $query5); while($row5 = mysqli_fetch_array($result5)){echo "{$row5['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query5 ="SELECT * FROM treffeneintraege WHERE ID=5 ORDER BY ID DESC"; $result5 = mysqli_query($connect, $query5); while($row5 = mysqli_fetch_array($result5)){echo "{$row5['ort_treff']}";}?></p>
                        </div>
                    </li>
                       <li>
                        <time datetime="2016-11-02 0000">
                            <span class="day"><?php $query6 ="SELECT * FROM treffeneintraege WHERE ID=6 ORDER BY ID DESC"; $result6 = mysqli_query($connect, $query6); while($row6 = mysqli_fetch_array($result6)){echo substr("{$row6['datum_treff']}",9,2);}?></span>
                            <span class="month"><?php $query6 ="SELECT * FROM treffeneintraege WHERE ID=6 ORDER BY ID DESC"; $result6 = mysqli_query($connect, $query6); while($row6 = mysqli_fetch_array($result6)){echo substr("{$row6['datum_treff']}",5,2);}?></span>
                            <span class="year"><?php $query6 ="SELECT * FROM treffeneintraege WHERE ID=6 ORDER BY ID DESC"; $result6 = mysqli_query($connect, $query6); while($row6 = mysqli_fetch_array($result6)){echo substr("{$row6['datum_treff']}",1,4);}?></span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title"><?php $query6 ="SELECT * FROM treffeneintraege WHERE ID=6 ORDER BY ID DESC"; $result6 = mysqli_query($connect, $query6); while($row6 = mysqli_fetch_array($result6)){echo "{$row6['beschreibung_treff']}";}?></h2>
                            <p class="desc"><?php $query6 ="SELECT * FROM treffeneintraege WHERE ID=6 ORDER BY ID DESC"; $result6 = mysqli_query($connect, $query6); while($row6 = mysqli_fetch_array($result6)){echo "{$row6['ort_treff']}";}?></p>
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
