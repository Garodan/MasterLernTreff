<?php
// loop through the array of files
foreach($_FILES as $index => $file)
{
  // for easy access
  $fileName     = $file['name'];
  // for easy access
  $fileTempName = $file['tmp_name'];
  // check if there is an error for particular entry in array
  if(!empty($file['error'][$index]))
  {
    // some error occurred with the file in index $index
    // yield an error here
    return false;
  }

  // check whether file has temporary path and whether it indeed is an uploaded file
  if(!empty($fileTempName) && is_uploaded_file($fileTempName))
  {
    // move the file from the temporary directory to somewhere of your choosing
    move_uploaded_file($fileTempName, "../uploads/" . $fileName);
    // mark-up to be passed to jQuery's success function.
    echo '<a href="uploads/' . $fileName . '" target="_blank" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>' . $fileName . '</a>';
  }
}
?>
