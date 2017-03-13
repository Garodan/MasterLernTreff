<?php
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
$query ="SELECT * FROM forumeintraege ORDER BY ID DESC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html ng-app>

<head>
  <title>LernTreff Forum</title>
  <meta charset="utf-8" lang="DE">

  <!--viewport-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/upload.css">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Navbar -->
  <link href="css/navbar.css" rel="stylesheet">
  <!-- K.A. -->
  <link href="css/indexmenu.css" rel="stylesheet">
  <!-- Forumliste Anzeige -->
  <link rel="stylesheet" href="css/bootgrid.css" />

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
  <!-- Forumliste Anzeige -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>


</head>
<body>
  <ng-include src="'templates/header.html'"></ng-include>

  <br /><br />
  <div class="container">
       <h3 align="center">Liste der Forumbeiträge</h3>
       <br />
       <div class="table-responsive">
            <table id="beitraege_data" class="table table-striped table-bordered">
                 <thead>
                      <tr>
                           <th data-column-id="id" data-type="numeric">Beitragsnr.</th>
                           <th data-column-id="thema">Thema</th>
                           <th data-column-id="beitrag">Beitrag</th>
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
                           <td>'.$row["thema_forum"].'</td>
                           <td>'.$row["beitrag_forum"].'</td>
                           <td>'.$row["userID"].'</td>
                      </tr>
                      ';
                 }
                 ?>
                 </tbody>
            </table>
       </div>
  </div>



<!-- Footer -->
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
$("#beitraege_data").bootgrid();
</script>
