//Ejecutando funciones
document.getElementById("btn btn-dark btn-lg btn-block").addEventListener("click", iniciarSesion);
document.getElementById("btn btn-dark btn-lg btn-block1").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            formulario_register.style.display = "none";

        }else{
            formulario_login.style.display = "block";
            formulario_register.style.display = "none";

        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            formulario_login.style.display = "none";

        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";

        }
}