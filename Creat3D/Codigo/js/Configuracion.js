document.getElementById("accountInfoButton").addEventListener("click", function() {
    showSection("accountInfoSection");
  });
  
  document.getElementById("privacyButton").addEventListener("click", function() {
    showSection("privacySection");
  });
  
  document.getElementById("transactionsButton").addEventListener("click", function() {
    showSection("transactionsSection");
  });
  
  document.getElementById("accountInfoForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Lógica para guardar los cambios en la información de la cuenta
  });
  
  document.getElementById("privacyForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Lógica para guardar los cambios en la privacidad y seguridad
  });
  
  document.getElementById("deleteAccountButton").addEventListener("click", function() {
    // Lógica para eliminar la cuenta del usuario
  });
  
  document.getElementById("logoutButton").addEventListener("click", function() {
    // Lógica para cerrar sesión
  });
  
  // Función para mostrar la sección deseada y ocultar las demás
  function showSection(sectionId) {
    var sections = document.getElementsByClassName("content")[0].children;
    for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = "none";
    }
    document.getElementById(sectionId).style.display = "block";
  }
  
  // Ejemplo de cómo mostrar compras y donaciones
  var purchasesList = document.getElementById("purchasesList");
  var donationsList = document.getElementById("donationsList");
  
  // Función para agregar una compra a la lista
  function addPurchase(productName, price) {
    var li = document.createElement("li");
    li.textContent = "Compra: " + productName + " - $" + price;
    purchasesList.appendChild(li);
  }
  
  // Función para agregar una donación a la lista
  function addDonation(donationName, amount) {
    var li = document.createElement("li");
    li.textContent = "Donación: " + donationName + " - $" + amount;
    donationsList.appendChild(li);
  }
  
  // Ejemplo de uso de las funciones addPurchase y addDonation
  addPurchase("Producto 1", 20);
  addPurchase("Producto 2", 30);
  addDonation("Donación 1", 10);
  addDonation("Donación 2", 15);
  