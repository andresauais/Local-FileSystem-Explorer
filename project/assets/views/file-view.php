<?php 
if(isset($_GET['file'])):
    foreach ($filesArray as $k => $v):
        if ($_GET['file'] ==  $v->basename):
?>

<article class="container_fileview">
    <section class="section">
        <p class="file_preview__name"><?=$v->basename?></p>
        <!-- <iframe class="file_preview__iframe"></iframe> -->
        <img class="file_preview__iframe" src="<?=$v->image?>" alt=""/>

        <div class="file_preview__main">
            <p class="preview_info">Type <span><?=$v->type?></span></p>
            <p class="preview_info">Size <span><?=$v->size?></span></p>
            <p class="preview_info">Created <span><?=$v->created?></span></p>
            <p class="preview_info">Modified <span><?=$v->modified?></span></p>
        </div>
        <div class="file_update__options">
<<<<<<< HEAD
        <button class="btn_delete-directory btn_transparent btn_preview"><i class='bx bx-trash'></i></button>
=======
            <button class="btn_remove btn_transparent btn_preview"><i class='bx bx-trash'></i></button>
>>>>>>> 284dfb7f4a6bc2a511b20ee765ad407f752cbfdc
            <button class="btn_remove btn_transparent btn_preview"><i class='bx bx-rename'></i></button>
            <button class="btn_remove btn_transparent btn_preview"><i class='bx bx-move-horizontal'></i></button>
        </div>
    </section>
</article>

<?php endif; endforeach; endif?>

