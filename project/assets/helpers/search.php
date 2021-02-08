<?php
if(!empty($_POST['search-file'])){
  $dir = $_POST['dir'];
  $search = $_POST['search-file'];
  $url = "../../index.php?dir=" . $dir . "&search=" . $search;
  header ('Location:' . $url);
  exit();
}
else{
  $dir=$_POST['dir'];
  $url = "../../index.php?dir=" . $dir;
  header ('Location:' . $url);
  exit();
}