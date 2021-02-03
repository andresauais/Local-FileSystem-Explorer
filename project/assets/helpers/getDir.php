<?php
function listDir($a){
  for($i = 2; $i < count($a); $i++){
      echo "
      <li>
          <div class='list-item'>
              <i class='bx bx-right-arrow'></i>
              <p class='list-item_p'><i class='bx bxs-folder-open'></i>$a[$i]</p>
          </div>
      </li>";
  };
}

function searchDir($a){
  echo realpath($a);
}