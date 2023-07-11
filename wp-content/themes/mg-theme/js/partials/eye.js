(function(){

  const eye = document.querySelector('.eye'),
        links = document.querySelectorAll('.link-page'),
        eyeOpening = () => {
          eye.classList.add('eye__opening')
          setTimeout(() => eyeOpened(), 500)
        },
        eyeOpened = () => {
          eye.classList.remove('eye__opening')
          eye.classList.add('eye__opened')
        },
        eyeClose = url => {
          eye.classList.remove('eye__opened')
          setTimeout(() => location.href = url+window.location.search, 500)
        }

  setTimeout(() => eyeOpening(), 100)
  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault()
      eyeClose(e.target.href)
    })
  })

})();