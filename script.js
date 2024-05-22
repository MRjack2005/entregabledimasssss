const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('input[type="password"]');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    
  
});

function validateEmail() {
  const emailInput = document.getElementById('usuario');
  const feedbackElement = document.getElementById('emailFeedback');
  const emailRegex = /.*@.*/;

  if (emailRegex.test(emailInput.value)) {
    feedbackElement.textContent = '';
  } else {
    feedbackElement.textContent = 'Please enter a valid email address.';
  }
}
