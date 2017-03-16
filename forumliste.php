<?php
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
$query ="SELECT * FROM forumeintraege ORDER BY ID DESC";
$result = mysqli_query($connect, $query);
$query2 ="SELECT * FROM kommentare ORDER BY ID DESC";
$result2 = mysqli_query($connect, $query2);
?>

<!DOCTYPE html>
<html ng-app='lerntreff'>

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
  <link rel="stylesheet" href="css/forum.css" />
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <!-- Scripts -->
  <!-- Angularjs -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- Own Script -->
  <script src="js/app.js"></script>
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
  <ng-include src="'templates/header.php'"></ng-include>

  <br /><br />
  <div class="container">
       <h3 align="center">Liste der Forumbeiträge</h3>      
       <?php
                 while($row = mysqli_fetch_array($result))
                 {
                      echo '
                            <div class="col-sm-12">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>'.$row["ID"].'</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">not long ago</h6>
                </div>
            </div> 
            <div class="post-description"> 
                <p>'.$row["beitrag_forum"].'</p>
                <div class="stats">
                    
                </div>
            </div>
            <div class="post-footer">
                <div class="input-group"> 
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>  
                    </span>
                </div>
                      ';
                while($row2 = mysqli_fetch_array($result2))
                {
                  if($row2["ForenID"]==$row["ID"])
                  {
                  echo '
                        <ul class="comments-list">
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">'.$row2["Autor"].'</h4>
                                <h5 class="time">not long ago</h5>
                            </div>
                            <p>'.$row2["Text"].'</p>
                        </div>
                        </li>
                        </ul>
                  ';
                }
                 }
                 echo '
                      </div>
        </div>
    </div>
                 ';
                 }
                 ?>
                 </body>
       </div>
  </div>



<!-- Footer -->
<footer class="bs-footer" role="contentinfo">
    <div style="position: relative; height: 300px;">
<p style="position: absolute; bottom: 0;"></p>
</div>
  <div class="container" style="width:500px;">
    <center> hwr-lerntreff.de <a href="impressum.php" target="_blank">Impressum</a> | <a href="agbs.php" target="_blank">AGBs</a> | <a href="faq.php" target="_blank">FAQ</a></center>
  </div>
</footer>

</body>
</html>

<script>
$("#beitraege_data").bootgrid();
</script>
