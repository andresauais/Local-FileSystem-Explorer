$(".list-item").click(getDir);
var dir = "../../../";

function getDir(e){
  if($(e.target).hasClass('bx-right-arrow')){
    $(e.target).removeClass('bx-right-arrow');
    $(e.target).addClass('bx-down-arrow');
    $($(e.target).next()).children().removeClass("bxs-folder");
    $($(e.target).next()).children().addClass("bxs-folder-open");
    $.ajax({
      type:'POST',
      url: './assets/helpers/getDir.php',
      data: {'name': $(e.currentTarget).find("p").text(),
             'path': dir + $(e.currentTarget).find("p").text()},
    }).done(
        function(data){
          $($(e.currentTarget).next()).append(data);
          $(".list-item").off();
          $(".list-item").click(getDir);
          dir = dir + $(e.currentTarget).find("p").text() + '/';
      })
  }
  else if($(e.target).hasClass('bx-down-arrow')){
    $(e.target).removeClass('bx-down-arrow');
    $(e.target).addClass('bx-right-arrow');
    $($(e.target).next()).children().removeClass("bxs-folder-open");
    $($(e.target).next()).children().addClass("bxs-folder");
    $($(e.currentTarget).next()).children().remove();
    dir = dir.split(($(e.currentTarget).find("p").text()));
    dir = dir[0];
  }
}
//FIX this