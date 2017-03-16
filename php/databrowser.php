<?php
$dir = "../uploads";

$uploads = scandir($dir);

for ($i=2; $i < count($uploads) ; $i++) {
  echo '<a href="uploads/' . $uploads[$i] . '" target="_blank" class="list-group-item list-group-item-success">' . $uploads[$i] . '</a>';
}
?>
