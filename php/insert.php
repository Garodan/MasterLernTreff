<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "lerntreff", "lerntreff_db");
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0)
{
     $thema = mysqli_real_escape_string($connect, $data->thema);
     $beitrag = mysqli_real_escape_string($connect, $data->beitrag);
     $query = "INSERT INTO `forumeintraege` (`ID`, `thema_forum`, `beitrag_forum`, `userID`) VALUES ('', '$thema', '$beitrag', '')";
     if(mysqli_query($connect, $query))
     {
          echo "Beitrag wurde erstellt.";
     }
     else
     {
          echo 'Error';
     }
}
?>
