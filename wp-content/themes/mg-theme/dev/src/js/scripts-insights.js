//= partials/header.js
//= partials/eye.js
//= partials/bookAnAppointment.js

(function(){

  const insightsCats = document.querySelectorAll('.insights__subcat'),
        insightsPosts = document.querySelectorAll('.insights__post')
  insightsCats.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault()
      // console.dir(e.target.id)
      insightsPosts.forEach(post => post.style.display = 'none')
      insightsCats.forEach(item => item.classList.remove('active'))
      const posts = document.querySelectorAll(`[data-subcat="${e.target.id}"]`)
      posts.forEach(post => post.style.display = 'block')
      e.target.classList.add('acctive')
    })
  })

  document.getElementById('showAll').addEventListener('click', e => {
    e.preventDefault();
    insightsCats.forEach(item => item.classList.remove('active'))
    insightsPosts.forEach(post => post.style.display = 'block')
    e.target.classList.add('active')
  });

})();
