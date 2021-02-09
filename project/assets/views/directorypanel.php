<?php
echo '
<section id="directoryPanel">
    <ul id="directoryTree">
        <li id="directoryRoot" >
            <div class="list-item">
                <i class="bx bx-right-arrow"></i>
                <a href="index.php?dir=root" onclick="document.getElementById("myform").submit()><i class="bx bxs-folder"></i>root</a>
            </div>
            <ul class="directoryRoot-children"></ul>
        </li>
    </ul>
</section>';
?>