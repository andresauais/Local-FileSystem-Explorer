<?php
//If "file" param is set, return file name as current name
if(isset($_GET['file'])){
    $fileName = explode(".",$_GET['file'],2)[0];
    $currentName =  $fileName;
} 

//If "dir" param is set, return directory name as current name
elseif(isset($_GET['dir'])){
    $currentDir = explode("/",$_GET['dir']);
    $folderName = array_pop($currentDir);   
    $currentName =  $folderName;
}

?>

<article class="container_modal__background container_modal__rename">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <div class="modal_form__group">
            <div class="modal_info__currentfilename">
                <p>Current name</p>
                <p><span><?= $currentName ?></span></p>
            </div>
            <form method="POST" action="./assets/helpers/rename.php">
                <label for="new-name">New name</label>
                <input class="input_text" type="text" name="new-name" />
                <input type='hidden' name='dir' value='<?php echo (isset($_GET['dir']) ? $_GET['dir'] : "root"); ?>' />
                <input type='hidden' name='file' value='<?php echo (isset($_GET['file']) ? $_GET['file'] : false); ?>' />
                <input class="btn_submit" type="submit" name="submit" value="Add" />
            </form>
        </div>
    </section>
</article>