const form=document.getElementById('form');
const email=document.getElementById('email');
const password=document.getElementById('password');
const emailError=document.getElementById('emailError')
const passError=document.getElementById('passError')
const name1=document.getElementById('name1');
const nameError=document.getElementById('nameError')
const confpassError=document.getElementById('confpassError')
const confpassword=document.getElementById('confpassword');
form.addEventListener('submit',(e)=>{
if(email.value==='' || email.value===null){
   e.preventDefault();
   emailError.innerHTML='email is required!'
   console.log('error in console')
}
if(password.value==='' || password.value===null){
    e.preventDefault();
    passError.innerHTML='password is required!'}
    if(name1.value==='' || name1.value===null){
        e.preventDefault();
        nameError.innerHTML='name is required!'}
        if(password.value !== confpassword.value){
            e.preventDefault();
            confpassError.innerHTML="passwords doesn't match!"
        }
})