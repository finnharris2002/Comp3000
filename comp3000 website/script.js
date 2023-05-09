const wrapper = document.querySelector('.wrapper');
const LoginLink = document.querySelector('.Login-Link');
const RegisterLink = document.querySelector('.Resiter-Link');

RegisterLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
})

LoginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
})