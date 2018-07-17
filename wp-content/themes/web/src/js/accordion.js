// jQuery(function ($) {
//     var $accrodions = $(".js-accordions");
//     var $accrodion = $accrodions.find(".dropdown-arrow");
//     var closeClass = "is-close";
//     var speed = 200;
//     var isClose = false;
//
//     function openAccordion() {
//         closeAll();
//         $(this).removeClass(closeClass);
//         $(this).find(".sub-menu").addClass('open-ac');
//     }
//
//     function closeAccordion() {
//         $(this).addClass(closeClass);
//         $(this).find(".sub-menu").removeClass('open-ac');
//     }
//
//     function closeAll() {
//         $accrodion.each(function (i, el) {
//             closeAccordion.call(el);
//         });
//     }
// function check() {
//
// }
//     if($accrodion.length) {
//         $accrodion.each(function (i, el) {
//             var btn = $(el);
//             if(!isClose) {
//                 closeAccordion.call(el);
//             }
//
//             btn.on("mouseover", function (e) {
//
//                 if($(el).hasClass(closeClass)) {
//                     openAccordion.call(el);
//                 } else {
//                     closeAccordion.call(el);
//                 }
//             });
//         });// end .each()
//     }
//
// });