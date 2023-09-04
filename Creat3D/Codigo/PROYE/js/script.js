// Declarando variables
var barras_busqueda = document.getElementById("ctn-bars-search");
var cubierta_ctn_search = document.getElementById("cover-ctn-search");
var entradaBusqueda = document.getElementById("inputSearch");
var cuadro_busqueda = document.getElementById("box-search");

// Ejecutando funciones
document.getElementById("ctn-icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);


//boton de subir

document.querySelector(".button-up").addEventListener("click", scrollUp);
function scrollUp(){
  var currentScroll = document.documentElement.scrollTop;
  if (currentScroll > 0){
    window.scrollTo (0, 0);
  }
}


// Función para mostrar el buscador
function mostrar_buscador() {
console.log("mostrando buscador");
  barras_busqueda.style.top = "80px";
  cubierta_ctn_search.style.display = "block";
  entradaBusqueda.focus();
}

// Función para ocultar el buscador
function ocultar_buscador() {
    console.log("ocultando buscador")
  barras_busqueda.style.top = "-10px";
  cubierta_ctn_search.style.display = "none";
  entradaBusqueda.value = "";
}
