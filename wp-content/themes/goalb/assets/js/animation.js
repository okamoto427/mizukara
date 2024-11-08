// const observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     // const square = entry.target.querySelector('.animate-on-scroll');
//     if (entry.isIntersecting) {
//       // square.classList.add('do-animate');
//       entry.target.classList.add('appear-start');
// 	  return; // if we added the class, exit the function
//     }

//     // We're not intersecting, so remove the class!
//     // square.classList.remove('do-animate');
//     entry.target.classList.remove('appear-start');
//   });
// });

// const elements = document.querySelectorAll('[data-appear-on="scroll"]')
// elements.forEach(function(element) {
//   observer.observe(element)
// })

// $(window).on('load',function(){
//   $('[data-appear-on="load"]').addClass('appear-start')
// })

document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('appear-start');
        return;
      }
      entry.target.classList.remove('appear-start');
    });
  });

  const elements = document.querySelectorAll('[data-appear-on="scroll"]');
  elements.forEach(function(element) {
    observer.observe(element);
  });

  $(window).on('load', function() {
    $('[data-appear-on="load"]').addClass('appear-start');
  });
});
