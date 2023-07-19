(function(){

  const eye = document.querySelector('.eye'),
        links = document.querySelectorAll('.link-page'),
        eyeOpening = () => {
          eye.classList.add('eye__opening')
          setTimeout(() => eyeOpened(), 250)
        },
        eyeOpened = () => {
          eye.classList.remove('eye__opening')
          eye.classList.add('eye__opened')
        },
        eyeClose = url => {
          eye.classList.remove('eye__opened')
          setTimeout(() => location.href = url+window.location.search, 250)
        }

  setTimeout(() => eyeOpening(), 50)
  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault()
      eyeClose(e.target.href)
    })
  })

})();