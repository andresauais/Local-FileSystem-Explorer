$(".list-item").click(getDir);

function getDir(e){
  if($(e.target).hasClass('bx-right-arrow')){
    console.log(e.target)
    $(e.target).removeClass('bx-right-arrow');
    $(e.target).addClass('bx-down-arrow');
    $.ajax({
      type:'POST',
      url: './assets/helpers/getDir.php',
      data: {'name': 'root'}}).done(//cogerlo dinamico
        function(data){
          $(".directoryRoot-children").append(data);//cogerlo dinamico
          $(".list-item").off();
          $(".list-item").click(getDir);
      })
  }
  else if($(e.target).hasClass('bx-down-arrow')){
    $(e.target).removeClass('bx-down-arrow');
    $(e.target).addClass('bx-right-arrow');
    $($(e.currentTarget).next()).children().remove();
    console.log($(e.currentTarget).next().text());
  }
  
}
//FIX this