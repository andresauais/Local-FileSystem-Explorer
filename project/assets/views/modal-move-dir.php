
<article class="container_modal__background container_modal__move-dir">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <form class="modal_form__group" method="POST" action="./assets/helpers/upload.php" enctype="multipart/form-data">
            <label for="move-dir">Which directory?</label>
            <select class="" name="move-dir" id="move-dir">
            <?php
              foreach($currentDir as $element){
                if(is_dir($dir . '/' . $element)){
                  echo "<option value='$element'>$element</option>";
                }
              }
            ?>
            </select>
            <label for="direction-dir">To:</label>
            <select class="" name="move-dir" id="move-dir">
            <?php
              foreach($currentDir as $element){
                if(is_dir($dir . '/' . $element)){
                  echo "<option value='$element'>$element</option>";
                }
              }
            ?>
            </select>
            <input type='hidden' name='dir' value='<?php echo (isset($_GET['dir']) ? $_GET['dir'] : "root");?>'/>
            <input class="btn_submit" type="submit" name="submit" value="Move Directory"/>
        </form>
    </section>
</article>
