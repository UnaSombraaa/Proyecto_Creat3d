document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Lógica para procesar el pago
  });
  
  document.getElementById("confirmButton").addEventListener("click", function() {
    // Lógica para confirmar la compra
  });
  
  function addToCart(productName, price) {
    var cartItems = document.getElementById("cartItems");
    var li = document.createElement("li");
    li.textContent = productName + " - $" + price;
    cartItems.appendChild(li);
  }
  
  function updateTotalAmount(amount) {
    var totalAmount = document.getElementById("totalAmount");
    totalAmount.textContent = "Total a pagar: $" + amount;
  }
  
  // Ejemplo de uso de las funciones addToCart y updateTotalAmount
  addToCart("Producto 1", 20);
  addToCart("Producto 2", 30);
  updateTotalAmount(50);
  