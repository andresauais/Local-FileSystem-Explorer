//Opens modal for creating new directories
$('.btn_add').on('click', function(e){
    e.preventDefault();
    $('.container_modal__create-dir').addClass('active');
})

//Opens modal for uploading files
$('.btn_upload').on('click', function(e){
    e.preventDefault();
    $('.container_modal__upload-file').addClass('active');
})
//Opens modal for deleting
$('.btn_delete-directory').on('click', function(e){
    e.preventDefault();
    $('.container_modal__delete').addClass('active');
})

//open modal for moving dir
$('.btn_move').on('click', function(e){
    e.preventDefault();
    $('.container_modal__move-dir').addClass('active');
})

//open modal for moving file
$('.btn_move-file').on('click', function(e){
    e.preventDefault();
    $('.container_modal__move-file').addClass('active');
})

//Opens modal for renaming files
$('.btn_rename').on('click', function(e){
    e.preventDefault();
    $('.container_modal__rename').addClass('active');
})

//To be used for all modal closing events
$('.btn_close').on('click',function(e){
    e.preventDefault();
    $(e.target.closest('article')).removeClass('active');
})

