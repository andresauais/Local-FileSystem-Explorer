<?php 
if(isset($_GET['file'])):
    foreach ($filesArray as $k => $v):
        if ($_GET['file'] ==  $v->basename):
?>

<article class="container_fileview">
    <section class="section">
        <p class="file_preview__name"><?=$v->basename?></p>
        <!-- <iframe class="file_preview__iframe"></iframe> -->
        <?php
            $dir = $_GET['dir'];
            $ext = explode(".",$v->basename);
            if($ext[1] == "png" || $ext[1] == "jpg"){
                $dirFile = "../$dir/$v->basename";
                if(file_exists($dirFile)){
                    $imageData = base64_encode(file_get_contents($dirFile));
                    $src = 'data: '.mime_content_type($dirFile).';base64,'.$imageData;
                    echo '<img class="file_preview__iframe" src="' . $src . '">';
                }
            }
            else if($ext[1] == "mp3"){
                echo '<img class="file_preview__iframe" src="'. $v->image .'" alt=""/>';
                $dirFile = "../$dir/$v->basename";
                if(file_exists($dirFile)){
                    $imageData = base64_encode(file_get_contents($dirFile));
                    $src = 'data: '.mime_content_type($dirFile).';base64,'.$imageData;
                    echo '<audio controls>
                    <source src="'. $src .'" type="audio/ogg"></audio>';
                }
            }
            else if($ext[1] == "mp4"){
                $dirFile = "../$dir/$v->basename";
                if(file_exists($dirFile)){
                    $imageData = base64_encode(file_get_contents($dirFile));
                    $src = 'data: '.mime_content_type($dirFile).';base64,'.$imageData;
                    echo '<video controls>
                    <source src="'. $src .'" type="video/ogg"></video>';
                }
            }
            else{
                echo '<img class="file_preview__iframe" src="'. $v->image .'" alt=""/>';
            }
        ?>
        

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

