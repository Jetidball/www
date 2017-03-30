 $(document).ready(function()  {
   $("button").click(function() {
     var toggle_el = $(this).data("toggle");
     var element = document.getElementById(this);
     $(toggle_el).toggleClass("open-botmenu");
     $(toggle_el).toggleClass("botmenu-button");
      $('.botmenu').toggle(1000,function(){
      });


      document.getElementById('toggle').style.display;



     if (display != "none") {
       $(this).toggleClass("botmenu-toggle");
       document.getElementsById(toggle_el).style.display = 'block';
     }
     else {
       $(this).toggleClass("botmenu-button");
       document.getElementsById(toggle_el).style.display = 'none';
     }

   });
 });


//    $("[data-toggle]").click(function() {
//      var toggle_el = $(this).data("toggle");
//      var element = document.getElementById(toggle_el);
//
//
//       if ((element) == ("botmenu-toggle")) {
//          var display = element.style.display;
//         if (display == "none") {
//             element.style.display = "block";
//             // $(toggle_el).toggleClass("open-botmenu");
//         }
//         else {
//           element.style.display = "none";
//           // $(toggle_el).toggleClass("open-botmenu");
//         }
//       }
//       var element2 = document.getElementById(toggle_el);
//       if ((element2) == ("open-botmenu")) {
//         var display = element.style.display;
//         if (display == "none") {
//           element2.style.display = "block";
//           // $(toggle_el).toggleClass('.botmenu');
//         }
//         else {
//           element2.style.display = "none";
//           // $(toggle_el).toggleClass('.botmenu');
//         }
//       }
//   });
// });
