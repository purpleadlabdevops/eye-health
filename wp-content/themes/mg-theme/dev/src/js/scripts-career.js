//= partials/header.js
//= partials/ajaxRequest.js
//= partials/eye.js
//= partials/bookAnAppointment.js

(function(){

  // Submit Contact form
  document.querySelector('.form__apply').addEventListener('submit', e => {
    e.preventDefault()
    let requestCheckout = [{
      action: 'formApply',
      name: document.getElementById('full_name').value,
      email: document.getElementById('email').value,
      msg: document.getElementById('msg').value,
      position: document.getElementById('position').value,
      attached_cv: document.getElementById('attached_cv').value,
    }]
    requestAction(requestCheckout, result => {
      let data = JSON.parse(result)
      if(data.status == 'success'){
        alert(data.msg)
        e.target.reset()
      } else if(data.status == 'error'){
        alert(data.msg)
        console.dir(data);
      } else {
        alert('OOPS! Something went wrong, please try againe later.')
        console.log('other error')
      }
    })
  })

})()
