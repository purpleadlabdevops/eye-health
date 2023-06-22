(function(){

  const banner = document.querySelector('.banner'),
        mainHeader = document.querySelector('.main-header')

  document.addEventListener('scroll', e => {
    if(window.scrollY > banner.clientHeight){
      mainHeader.classList.add('active')
    } else {
      mainHeader.classList.remove('active')
    }
  })

  document.querySelector('.main-header__btn').addEventListener('click', e => {
    e.preventDefault()
    e.target.classList.toggle('active')
    document.querySelector('.main-header__nav').classList.toggle('active')
  })

  const headerLinks = document.querySelectorAll('.main-header__nav a'),
        location = window.location.href,
        slug = url => {
          const linksArr = new URL(url).pathname.match(/[^\/]+/g)
          return linksArr[linksArr.length - 1]
        }

  headerLinks.forEach(link => {
    if( slug(link.href) === slug(location) ){
      link.classList.add('current')
    }
  })

  const changeStyle = document.querySelector('.change-style')
  changeStyle.addEventListener('click', e => {
    e.preventDefault();
    globalStyle.innerHTML = e.target.dataset.style === 'default' ? styleDark : styleDefault
    e.target.dataset.style = e.target.dataset.style === 'default' ? 'dark' : 'default'
    localStorage.setItem('localStyle', e.target.dataset.style)
  })
  if( localStorage.getItem('localStyle') ){
    changeStyle.dataset.style = localStorage.getItem('localStyle') === 'default' ? 'default' : 'dark'
  }

})();
(function(){

  const eye = document.querySelector('.eye'),
        links = document.querySelectorAll('.link-page'),
        eyeOpening = () => {
          eye.classList.add('eye__opening')
          setTimeout(() => eyeOpened(), 1000)
        },
        eyeOpened = () => {
          eye.classList.remove('eye__opening')
          eye.classList.add('eye__opened')
        },
        eyeClose = url => {
          eye.classList.remove('eye__opened')
          setTimeout(() => location.href = url+window.location.search, 1000)
        }

  setTimeout(() => eyeOpening(), 100)
  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault()
      eyeClose(e.target.href)
    })
  })

})();
(function(){

  const bookAnAppointment = document.querySelectorAll('.book-an-appointment')
  bookAnAppointment.forEach(el => {
    el.href = el.href+window.location.search
  })

})();

(function(){

  document.querySelector('.main-header').classList.add('active')

})();