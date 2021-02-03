$(".list-item").click(getDir);

function getDir(e){
  if($(e.target).hasClass('bx-right-arrow')){
    $(e.target).removeClass('bx-right-arrow');
    $(e.target).addClass('bx-down-arrow');
    $.ajax({
      type:'POST',
      url: './assets/helpers/getDir.php',
      data: {'name': 'root'}}).done(
        function(data){
          $(".directoryRoot-children").append(data);
      })
  }
}
