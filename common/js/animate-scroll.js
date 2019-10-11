// var eles = Array.prototype.slice.call(document.querySelectorAll('.animated'));
// document.addEventListener('scroll', animatedFadeInUp);
// var eles50 = Array.prototype.slice.call(document.querySelectorAll('.animated50'));
// document.addEventListener('scroll', animatedFadeInUp50);
// animatedFadeInUp();
// animatedFadeInUp50();
//
// function animatedFadeInUp() {
//     eles = eles.filter(function(ele) {
//         var rect = getRect(ele);
//         if (rect.isVisible) {
//             ele.classList.add('slideUp');
//             return false;
//         }
//         return true;
//     });
//     if (eles.length <= 0) document.removeEventListener('scroll', animatedFadeInUp);
// }
//
// function animatedFadeInUp50() {
//     eles50 = eles50.filter(function(ele) {
//         var rect = getRect(ele);
//         if (rect.isVisible) {
//             ele.classList.add('slideUp50');
//             return false;
//         }
//         return true;
//     });
//     if (eles50.length <= 0) document.removeEventListener('scroll', animatedFadeInUp50);
// }
//
// function getRect(ele) {
//     var inHeight = window.innerHeight;
//     var rect = ele.getBoundingClientRect();
//     rect.isVisible = rect.top - inHeight < 0;
//     return rect;
// }
