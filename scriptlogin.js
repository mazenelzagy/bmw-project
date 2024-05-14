const form=document.getElementById('form');
const email=document.getElementById('email');
const password=document.getElementById('password');
const nameError=document.getElementById('nameError')
const passError=document.getElementById('passError')
form.addEventListener('submit',(e)=>{
if(email.value==='' || email.value===null){
   e.preventDefault();
   nameError.innerHTML='email is required!'
   console.log('error in console')
}
if(password.value==='' || password.value===null){
    e.preventDefault();
    passError.innerHTML='password is required!'}
})