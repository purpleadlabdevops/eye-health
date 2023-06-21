(function(){

  const waitingItems = document.querySelectorAll('.waiting__item'),
        nyStates = document.querySelectorAll('.ny_states')
  waitingItems.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      waitingItems.forEach(el => el.classList.remove('active'))
      nyStates.forEach(el => el.classList.remove('active'))
      document.getElementById(e.target.dataset.state).classList.add('active')
      e.target.classList.add('active')
    })
  })

})();