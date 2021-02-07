<article class="container_modal__background container_modal__create-dir">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <form class="modal_form__group" method="POST" action="./assets/helpers/create-dir.php">
            <label for="directory">Directory name</label>
            <input class="input_text" type="text" name="directory"/>
            <input type='hidden' name='dir' value='<?php echo $_GET['dir'];?>'/>
            <input class="btn_submit" type="submit" name="submit" value="Add"/>
        </form>
    </section>
</article>