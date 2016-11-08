<?php
//insert.php


$connect = mysqli_connect("http://euve82217.serverprofi24.de", "root", "lerntreff", "LernTreff");
$data = json_decode(file_get_contents("php://input"));
if(count)($data) > 0)
{
  $themaforum = mysqli_real_escape_string($connection, $data->thema);
  $beitragforum = mysqli_real_escape_string($connection, $data->beitrag);
  $query = "INSERT INTO forumeintraege(thema, beitrag) VALUES ('$themaforum', '$beitragforum')";
  if(mysqli_query($connect, $query))
  {
    echo "Data Insert"
  }
  else {
      echo 'Error':
  }

}
 ?>
