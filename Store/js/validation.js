const name = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const cpassword = document.getElementById('cpassword')
const form = document.getElementById('submit')

const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null) {
      messages.push('Name is required')
      alert('this is alert')
    }
    if (email.value === '' || email.value == null) {
      messages.push('Email is required')
    }
  
    if (password.value.length <= 6) {
      messages.push('Password must be longer than 6 characters')
    }
  
    if (password.value.length >= 20) {
      messages.push('Password must be less than 20 characters')
    }
  
    if (password.value === 'password') {
      messages.push('Password cannot be password')
    }
    if (cpassword.value !== password) {
      messages.push('Password Does not matching')
    }
  
    if (messages.length > 0) {
      e.preventDefault()
      errorElement.innerText = messages.join(', ')
    }
  })