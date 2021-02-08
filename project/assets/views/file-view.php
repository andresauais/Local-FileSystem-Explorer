<?php 
if(isset($_GET['file'])):
    foreach ($filesArray as $k => $v):
        if ($_GET['file'] ==  $v->basename):
?>

<article class="container_fileview">
    <section class="section">
        <p class="file_preview__name"><?=$v->basename?></p>
        <!-- <iframe class="file_preview__iframe"></iframe> -->
        <!-- <?php
            // $dir = $_GET['dir'];
            // $ext = explode(".",$v->basename);
            // if($ext[1] == "jpg"){
            //     echo "../..$dir/$v->basename";
            //     echo "<img class='' src='../..$dir/$v->basename' alt='../../..$dir/$v->basename'/>";
            // };
        ?> -->
        <img class="file_preview__iframe" src="<?=$v->image?>" alt=""/>

        <div class="file_preview__main">
            <p class="preview_info">Type <span><?=$v->type?></span></p>
            <p class="preview_info">Size <span><?=$v->size?></span></p>
            <p class="preview_info">Created <span><?=$v->created?></span></p>
            <p class="preview_info">Modified <span><?=$v->modified?></span></p>
        </div>
        <div class="file_update__options">
            <button class="btn_delete-directory btn_transparent btn_preview"><i class='bx bx-trash'></i></button>
            <button class="btn_rename btn_transparent btn_preview"><i class='bx bx-rename'></i></button>
            <button class="btn_move btn_transparent btn_preview"><i class='bx bx-move-horizontal'></i></button>
        </div>
    </section>
</article>

<?php endif; endforeach; endif?>

