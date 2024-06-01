
const loginForm = document.getElementById("loginForm");


loginForm.addEventListener("submit", (evento) => {
    
    console.log("El evento funciona");

    if ( !validarLogin() ) {
        alert("DEBE INGRESAR UN MAIL Y UNA CONTRASEÑA");
        evento.preventDefault();
    } else {
        console.log("PUEDE INGRESAR");
    }
    
});


function validarLogin() {

    validarEmail() && validarLogin()  ? true : false;

}

function validarEmail() {

    const campoEmail = document.querySelector(".email");
    const valorEmail = campoEmail.value

    valorEmail == " " ? true : false;
}

function validarPassword() {
    
    const campoPassword = document.querySelector(".password");
    const valorPassword = campoPassword.value

    valorPassword == " " ? true : false;
}
