<?php
//moves file and stores it to trash
if(isset($_POST["submit"]) && $_POST['file'] != ""){
  $dir = $_POST['dir'];
  $file = $_POST['file'];
  $element = $_POST['move-file'];
  $path = "../../../" . $dir ."/" . $file;
  $newPath = "../../../". $dir ."/" . $element . "/" . $file;
  rename($path, $newPath);

  $url = "../../index.php?dir=" . $dir . "/".$element;
  header ('Location:' . $url);
  exit();
}
//error
else{
  $dir = $_POST['dir'];
  $url = "../../index.php?dir=$dir&notWorking" ;
  header ('Location:' . $url);
  exit();
}