
<article class="container_modal__background container_modal__move-file">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <form class="modal_form__group" method="POST" action="./assets/helpers/moveFiles.php" enctype="multipart/form-data">
            <p>You're moving the file <i>"<?php echo (isset($_GET['file']) ? $_GET['file'] : (isset($_GET['dir']) ? $_GET['dir'] : "root")); ?>"</i></p>
            <label for="move-file">To:</label>
            <select class="" name="move-file" id="move-file">
            <?php
              foreach($currentDir as $element){
                if(is_dir($dir . '/' . $element)){
                  echo "<option value='$element'>$element</option>";
                }
              }
            ?>
            </select>
            <input type='hidden' name='dir' value='<?php echo (isset($_GET['dir']) ? $_GET['dir'] : "root");?>'/>
            <input type='hidden' name='file' value='<?php echo (isset($_GET['file']) ? $_GET['file'] : "");?>'/>
            <input class="btn_submit" type="submit" name="submit" value="Move File"/>
        </form>
    </section>
</article>
