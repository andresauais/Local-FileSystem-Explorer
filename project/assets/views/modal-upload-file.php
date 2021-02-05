<article class="container_modal__background container_modal__upload-file">
    <section class="container_modal__form">
        <div class="modal_header">
            <button class="btn_close btn_transparent">
                <i class='bx bx-x'></i>
            </button>
        </div>
        <form class="modal_form__group" method="POST" action="./assets/helpers/upload.php">
            <!-- <label for="upload-file"><i class='bx bx-upload' ></i></label> -->
            <!-- <label for="upload-file"></label> -->
            <label for="upload-file"><img src="./assets/img/upload.png" alt="upload file" /></label>
            <input class="input_file" type="file" name="upload-file" id="fileToUpload"/>
            <input class="btn_submit" type="submit" name="submit" value="Add"/>
        </form>
    </section>
</article>