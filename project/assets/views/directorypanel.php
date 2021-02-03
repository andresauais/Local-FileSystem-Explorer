<?php
include 'assets/helpers/getDir.php';
echo '
<section id="directoryPanel">
    <ul id="directoryTree">
        <li id="directoryRoot">
            <div class="list-item">
                <i class="bx bx-right-arrow"></i>
                <p class="list-item_p"><i class="bx bxs-folder-open"></i>Root</p>
            </div>
            <ul class="directoryRoot-children">';
            $dir = "../root";
            $a = scandir($dir);
            listDir($a);
            echo '</ul>
        </li>
    </ul>
</section>';
?>