<?php
if (isset($_POST['name'])){
  $name= $_POST['name'];
  $dir = "../../../$name";
  $a = scandir($dir);
  for($i = 2; $i < count($a); $i++){
  echo "
    <li class='list-item'>
        <i class='bx bx-right-arrow'></i>
        <i class='bx bxs-folder-open'></i>
        $a[$i]
    </li>
";
  }
}