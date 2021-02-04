$(".list-item").click(getDir);

function getDir(e){
  if($(e.target).hasClass('bx-right-arrow')){
    console.log($(e.currentTarget).find("p").text());
    $(e.target).removeClass('bx-right-arrow');
    $(e.target).addClass('bx-down-arrow');
    $.ajax({
      type:'POST',
      url: './assets/helpers/getDir.php',
      data: {'name': $(e.currentTarget).find("p").text()}}).done(//cogerlo dinamico
        function(data){
          $($(e.currentTarget).next()).append(data);
          $(".list-item").off();
          $(".list-item").click(getDir);
      })
  }
  else if($(e.target).hasClass('bx-down-arrow')){
    $(e.target).removeClass('bx-down-arrow');
    $(e.target).addClass('bx-right-arrow');
    $($(e.currentTarget).next()).children().remove();
  }
}
//FIX this