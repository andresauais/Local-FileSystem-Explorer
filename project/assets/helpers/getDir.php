<?php
if (isset($_POST['path'], $_POST['name'])){
  $name = $_POST['name'];
  $path = $_POST['path'];
  $a = scandir($path);
  for($i = 2; $i < count($a); $i++){
    if(is_dir($path . '/' . $a[$i])){
      echo "
    <li>
      <div class='list-item'>
        <i class='bx bx-right-arrow'></i>
        <a href='index.php?dir=$name/$a[$i]' onclick='document.getElementById('myform').submit()><i class='bx bxs-folder'></i>$a[$i]</a>
      </div>
      <ul class='directoryRoot-children'></ul>
    </li>
";
    }
  }
}