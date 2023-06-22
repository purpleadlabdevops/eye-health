(function(){

  const bookAnAppointment = document.querySelectorAll('.book-an-appointment')
  bookAnAppointment.forEach(el => {
    el.href = el.href+window.location.search
  })

})();