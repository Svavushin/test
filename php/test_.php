<?php
echo '<pre>';
var_dump($_FILES['file1']);
var_dump($_POST['num']);
var_dump($_POST['string']);
echo '</pre>';


$files = "./files/" . $_FILES['file1']['name'];

var_dump(move_uploaded_file($_FILES['file1']['tmp_name'], $files));

if (move_uploaded_file($_FILES['file1']['tmp_name'], $files)) {
  echo $_FILES['file1']['name'] . "успешно загружен";
}
