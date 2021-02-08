<header class="container_header">
    <div class="container_brand">
        <h1>File Manager</h1>
    </div>
    <nav class="container_navbar">
        <button class="btn_add"><i class='bx bx-plus'></i>NEW</button>
        
        <div class="container_navbar__actions">
            <form class="form_search" method="POST" action="./assets/helpers/search.php">
                <input class="input_text" type="text" name="search-file"/>
                <input type='hidden' name='dir' value='<?php echo (isset($_GET['dir']) ? $_GET['dir'] : "root");?>'/>
                <button type="submit" class="btn_search btn_transparent btn_nav">
                    <i class='bx bx-search' ></i>
                </button>
            </form> 
        
            <button class="btn_delete-directory btn_transparent btn_nav"><i class='bx bx-trash'></i></button>
            <button class="btn_rename btn_transparent btn_nav"><i class='bx bx-rename'></i></button>
            <button class="btn_move btn_transparent btn_nav"><i class='bx bx-move-horizontal'></i></button>
            <button class="btn_upload btn_transparent btn_nav"><i class='bx bx-upload' ></i></button>
        </div>
    </nav>
</header>