$(document).ready(function () {
    $("[data-toggle]").click(function () {
        var toggle_el = $(this).data("toggle");
        var delay=100;
        setTimeout(function() {
        $(toggle_el).toggleClass("open-sidebar");
      },delay);

          if ($(toggle_el).hasClass("open-sidebar")){
              console.log($("open-sidebar").width());
            console.log(parseInt($("open-sidebar").width())-240);
          }

          else
            $('.space').css('width','100%');
    });
});
