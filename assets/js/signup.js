'use strict'

const signupForm = document.querySelector('#signupForm')
const signupFormBtn = signupForm.querySelector('button')
const errorTxt = document.querySelector('.error-txt')


signupForm.addEventListener('submit', (e) => e.preventDefault())


signupFormBtn.addEventListener('click',  async (e) => {

	const response = await fetch('php/signup.php', {
		method: 'POST',
		body: new FormData(signupForm)

	})
	const result   = await response.json()

	if(result.status) {
		location.href = '/user.php'
	} else {
		errorTxt.style.display = 'block'
		errorTxt.innerHTML = result.msg
	}

	 console.log(result)
})