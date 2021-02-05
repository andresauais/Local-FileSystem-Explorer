<?php
if (isset($_POST['path'])){
  $path = $_POST['path'];
  $a = scandir($path);
  for($i = 2; $i < count($a); $i++){
    if(is_dir($path . '/' . $a[$i])){
      echo "
    <li>
      <div class='list-item'>
        <i class='bx bx-right-arrow'></i>
        <p><i class='bx bxs-folder'></i>$a[$i]</p>
      </div>
      <ul class='directoryRoot-children'></ul>
    </li>
";
    }
  }
}