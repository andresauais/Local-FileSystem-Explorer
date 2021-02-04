<?php
if (isset($_POST['name'])){
  $n= $_POST['name'];
  $name = strtolower($n);
  $path = scanAllDir($name);
  $a = scandir($path);
  for($i = 2; $i < count($a); $i++){
  echo "
    <li>
      <div class='list-item'>
        <i class='bx bx-right-arrow'></i>
        <p><i class='bx bxs-folder-open'></i>$a[$i]</p>
      </div>
      <ul class='directoryRoot-children'></ul>
    </li>
";
  }
}

function scanAllDir($name) {
  $path = "../../..";
  return pathE($path, $name);
}

function pathE($path, $name){
  foreach(scandir($path) as $element){
    if($element == $name){
      $elPath = $path . '/' . $name;
      return $elPath;
    }
    else{
      $elPath = $path . '/' . $element;
      pathE($elPath, $name);
    }
  }
}