<?php
//insertliste.php
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0)
{
     $ueberschrift = mysqli_real_escape_string($connect, $data->ueberschrift);
     $studiengang = mysqli_real_escape_string($connect, $data->studiengang);
     $semester = mysqli_real_escape_string($connect, $data->semester);
     $modul = mysqli_real_escape_string($connect, $data->modul);
     $ort = mysqli_real_escape_string($connect, $data->ort);
     $datum = mysqli_real_escape_string($connect, $data->datum);
     $zeit = mysqli_real_escape_string($connect, $data->zeit);
     $beschreibung = mysqli_real_escape_string($connect, $data->beschreibung);

     $query = "INSERT INTO  `treffeneintraege`(`ID`, `ueberschrift_treff`, `studiengang_treff`, `semester_treff`, `modul_treff`, `ort_treff`, `datum_treff`, `zeit_treff`, `beschreibung_treff`, `userID`) VALUES ('', '$ueberschrift', '$studiengang', '$semester','$modul','$ort','$datum,','$zeit','$beschreibung','')";
     if(mysqli_query($connect, $query))
     {
          echo "Treffen wurde erstellt.";
     }
     else
     {
          echo $data->ueberschrift;
     }
}
?>
