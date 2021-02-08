<article class="container_modal__background container_modal__delete">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <form class="modal_form__group" method="POST" action="./assets/helpers/delete.php" enctype="multipart/form-data">
            <p>Are you sure you want to delete <i><?php echo (isset($_GET['file']) ? $_GET['file'] : (isset($_GET['dir']) ? $_GET['dir'] : "root")); ?></i> ?</p>
            <input type='hidden' name='dir' value='<?php echo (isset($_GET['dir']) ? $_GET['dir'] : "root");?>'/>
            <input type='hidden' name='file' value='<?php echo (isset($_GET['file']) ? $_GET['file'] : "");?>'/>
            <input class="btn_submit" type="submit" name="submit" value="Delete"/>
        </form>
    </section>
</article>