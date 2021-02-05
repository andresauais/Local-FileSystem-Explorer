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

//To be used for all modal closing events
$('.btn_close').on('click',function(e){
    e.preventDefault();
    $(e.target.closest('article')).removeClass('active');
})
