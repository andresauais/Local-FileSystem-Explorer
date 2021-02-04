<?php
if (isset($_POST['name'])){
  $name= $_POST['name'];
  $dir = "../../../$name";
  $a = scandir($dir);
  for($i = 2; $i < count($a); $i++){
  echo "
    <li>
      <div class='list-item'>
        <i class='bx bx-right-arrow'></i>
        <p><i class='bx bxs-folder-open'></i>$a[$i]</p>
      </div>
    </li>
";
  }
}