    <?php

    require dirname(__FILE__).'/../helpers/getFiles.php';

    ?>
    
    <article class="container_filepanel">
        <section class="section">
            <div class="container_path">
                <p><?=(isset($_GET['dir']) ? $_GET['dir'] : "root")?></p>
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
                
                <!-- Loop iterates over filesArray and prints a file_info__group for each Fileinfo object-->
                <?php 
                    foreach($filesArray as $k => $v):
                ?>
                    
                <div class="file_info__group">

                    <div class="file_info__icon">
                        <img src="<?=$v->image?>" alt=""/>
                    </div>
                    <p class="file_info__name"><?=$v->name?></p>
                    <p class="file_info__type"><?=$v->type?></p>
                    <p class="file_info__size"><?=$v->size?></p>
                    <p class="file_info__created"><?=$v->created?></p>
                    <p class="file_info__modified"><?=$v->modified?></p>
                </div>

                <?php 
                endforeach; 
                ?>
                <!-- End of foreach loop -->

            </div>
        </section>
    </article>


