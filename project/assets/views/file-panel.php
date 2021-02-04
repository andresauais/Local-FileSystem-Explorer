    <?php

    require dirname(__FILE__).'/../helpers/getFiles.php';

    ?>
    
    <article class="container_filepanel">
        <section class="section">
            <div class="container_path">
                <p>Root>Documents>File 4</p>
            </div>
        </section>
        <section class="section">
            <div class="container_tags">
                <p class="tags_name"><span>Name</span></p>
                <p class="tags_type"><span>Type</span></p>
                <p class="tags_size"><span>Size</span></p>
                <p class="tags_created"><span>Created</span></p>
                <p class="tags_modified"><span>Modified</span></p>
            </div>
            <div class="container_files">
                
                <?php 
                    foreach($file as $k => $v):
                ?>
                    
                <div class="file_info__group">

                    <div class="file_info__icon">
                        <img src="./assets/img/word_icon.png" alt=""/>
                    </div>
                    <p class="file_info__name"><?=$v?></p>
                    <p class="file_info__type"><?=""?></p>
                    <p class="file_info__size">20KB</p>
                    <p class="file_info__created">02-02-2021</p>
                    <p class="file_info__modified">13:19</p>
                </div>

                <?php 
                endforeach; 
                ?>

            </div>
        </section>
    </article>


