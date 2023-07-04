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
          return linksArr ? linksArr[0] : ''
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
function requestAction(values, callback){
	let formData = new FormData();

	for (let i = 0, l = values.length; i < l; i++) {
		var keys = Object.keys(values[i]);
		for (var j = 0, k = keys.length; j < k; j++) {
			let key = keys[j],
				value = values[i][keys[j]];
			formData.append(key, value);
		}
	}

	let request = new XMLHttpRequest();
	request.open('POST', data.ajax, true);
	request.onload = function() {
		if (this.status >= 200 && this.status < 400) {
			let result = this.response;
			if(callback) callback(result);
		} else {
			alert('Request status: '+this.status);
		}
	}

	request.onerror = function() {
		alert('Request error!');
	};

	request.send(formData);
}
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

  const waitingItems = document.querySelectorAll('.waiting__item'),
        waitingAreas = document.querySelectorAll('.waiting__area'),
        waitingActives = document.querySelectorAll('.waiting__active'),
        nyStates = document.querySelectorAll('.ny_states')
  waitingItems.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
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

(function(){

  // Submit Contact form
  document.querySelector('.form__contact-us').addEventListener('submit', e => {
    e.preventDefault()
    let requestCheckout = [{
      action: 'formContacts',
      name: document.getElementById('full_name').value,
      email: document.getElementById('email').value,
      msg: document.getElementById('msg').value,
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