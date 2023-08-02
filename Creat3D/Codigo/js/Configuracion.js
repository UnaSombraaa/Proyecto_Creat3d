document.getElementById("accountInfoButton").addEventListener("click", function() {
  showContent("accountInfo");
});

document.getElementById("privacySecurityButton").addEventListener("click", function() {
  showContent("privacySecurity");
});

document.getElementById("transactionsDonationsButton").addEventListener("click", function() {
  showContent("transactionsDonations");
});

document.getElementById("accessibilityButton").addEventListener("click", function() {
  showContent("accessibility");
});

document.getElementById("darkModeButton").addEventListener("click", function() {
  // Lógica para cambiar a modo oscuro
});

function showContent(contentId) {
  var contents = document.getElementsByClassName("content");
  for (var i = 0; i < contents.length; i++) {
    contents[i].style.display = "none";
  }
  document.getElementById(contentId).style.display = "block";
}

// Aquí puedes implementar la lógica para mostrar el historial de compras y donaciones

// Ejemplo de lógica para guardar los cambios en la información de la cuenta
document.getElementById("accountInfo").addEventListener("submit", function(event) {
  event.preventDefault();
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var phoneNumber = document.getElementById("phoneNumber").value;

  // Lógica para guardar los cambios en la información de la cuenta
});