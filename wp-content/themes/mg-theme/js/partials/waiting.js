(function(){

  const waitingItems = document.querySelectorAll('.waiting__item'),
        waitingAreas = document.querySelectorAll('.waiting__area'),
        waitingActives = document.querySelectorAll('.waiting__active'),
        nyStates = document.querySelectorAll('.ny_states')
  waitingItems.forEach(item => {
    item.addEventListener('click', e => {
      // e.preventDefault();
      waitingItems.forEach(el => el.classList.remove('active'))
      waitingAreas.forEach(el => el.classList.remove('active'))
      waitingActives.forEach(el => el.classList.remove('active'))

      e.target.classList.add('active')
      document.querySelector(`.${ e.target.dataset.state }__active`).classList.add('active')
      document.querySelector(`.${ e.target.dataset.state }__area`).classList.add('active')
    })
  })

  const tabNavs = document.querySelectorAll('.waiting__nav-btn'),
        maps = document.querySelectorAll('.waiting__map svg'),
        lists = document.querySelectorAll('.waiting__list')
  tabNavs.forEach(navBtn => {
    navBtn.addEventListener('click', e => {
      e.preventDefault()
      tabNavs.forEach(el => el.classList.remove('active'))
      maps.forEach(el => el.style.display = 'none')
      lists.forEach(el => el.style.display = 'none')
      document.getElementById(e.target.dataset.map).style.display = 'block'
      document.querySelector('.waiting__list__'+e.target.dataset.map).style.display = 'block'
      e.target.classList.add('active')
    })
  })

})();