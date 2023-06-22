//= partials/tiny-slider.js
//= partials/header.js
//= partials/waiting.js
//= partials/professionals.js
//= partials/eye.js
//= partials/bookAnAppointment.js

(function(){

  const servicesMenu = document.querySelectorAll('.services__menu li'),
        servicesTabs = document.querySelectorAll('.services__tab')
  servicesMenu.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      servicesMenu.forEach(item => item.classList.remove('active'))
      servicesTabs.forEach(item => item.classList.remove('active'))
      e.target.classList.add('active')
      document.getElementById(e.target.dataset.tab).classList.add('active')
    })
  })

})();
