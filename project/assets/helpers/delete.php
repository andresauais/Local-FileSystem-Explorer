<?php
//delete file and stores it to trash
if(isset($_POST["submit"]) && $_POST['file'] != ""){
  $dir = $_POST['dir'];
  $file = $_POST['file'];
  $path = "../../../" . $dir ."/" . $file;
  $trashPath = "../../../trash/";
  rename($path, $trashPath . $file);
  //unlink($path);

  $url = "../../index.php?dir=" . $dir;
  header ('Location:' . $url);
  exit();
}
//delete full directory
else{
  $dir = "../../../" . $_POST['dir'];
  $trashPath = "../../../trash/";
  $scanDir = scandir($dir);
  $currentDir = array_slice( $scanDir, 2);

  //create directory in trash
  $arr = explode("/",$dir);
  mkdir($trashPath . $arr[count($arr)-1]);

  //for each loop to remove each file on that directory
  foreach($currentDir as $element){
    rename("$dir/$element", $trashPath. $arr[count($arr)-1] . "/" . $element);
  }
  //removes directory after files are deleted
  rmdir($dir);
  $url = "../../index.php?dir=" . implode("/", array_slice($arr ,3, count($arr) - count($arr)-1));
  header ('Location:' . $url);
  exit();
}