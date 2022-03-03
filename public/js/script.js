const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password2 = document.getElementById('cPassword');

//Functions-------------------------------------------------------------
function showError(input, message) {//Afficher les messages d'erreur
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
//accueil
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success'; 
}
//
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
 if(testEmail(input)){
        showSuccess(input);
    } else {
        showError(input,`Email is not valid!`);
    }
}
function testEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    } else {
        return false;
    }
}
//
function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input,`${getFieldName(input)} is required`);
        }else{
            showSuccess(input);
        }
    });
}

//
function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function checkLength(input, min) {//Tester la longueur de la valeur  d'un input
   const re = input.value;
    const number = /[0-9]/;
   const letter = /[a-zA-Z]/;
    if( (re.length < min) || !number.test(re)  || !letter.test(re)){
        showError(input, "Invalid Password");
    }else{
        showSuccess(input);
    }
}

//
function checkPasswordMatch(input1, input2) {
    if (input1.value !== input2.value) {
        showError(input2, 'Passwords do not match!');
    }
}

form.addEventListener('submit',function(e){
    if(!testEmail(login)){
        e.preventDefault();
        checkRequired([nom, prenom, login, password, password2]);
        checkLength(password, 6);
        checkEmail(login);
        checkPasswordMatch(password,password2);
    }
   

});
