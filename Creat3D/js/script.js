document.addEventListener("DOMContentLoaded", function () {
// Declarando variables
var barras_busqueda = document.getElementById("ctn-bars-search");
var cubierta_ctn_search = document.getElementById("cover-ctn-search");
var entradaBusqueda = document.getElementById("inputSearch");
var cuadro_busqueda = document.getElementById("box-search");

// Ejecutando funciones
document.getElementById("ctn-icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

// Boton de subir
document.querySelector(".button-up").addEventListener("click", scrollUp);

function scrollUp() {
    var currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 0) {
        window.scrollTo(0, 0);
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
    console.log("ocultando buscador");
    barras_busqueda.style.top = "-80px";
    cubierta_ctn_search.style.display = "none";
    entradaBusqueda.value = "";
}

function buscador_interno() {
  var filter = entradaBusqueda.value.toUpperCase();
  var li = cuadro_busqueda.getElementsByTagName("li");

  // Recorriendo elementos a filtrar mediante los li
  for (var i = 0; i < li.length; i++) {
      var a = li[i].getElementsByTagName("a")[0];

      if (a) { // Verificar si 'a' no es undefined
          var textValue = a.textContent || a.innerText;

          if (textValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "block";
          } else {
              li[i].style.display = "none";
          }
      }
  }
}
// Evento para escuchar cambios en el campo de búsqueda
entradaBusqueda.addEventListener("keyup", buscador_interno);
})