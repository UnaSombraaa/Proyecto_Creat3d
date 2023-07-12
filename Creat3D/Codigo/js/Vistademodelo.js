document.getElementById("donateButton").addEventListener("click", function() {
    // Lógica para el botón de donar
  });
  
  document.getElementById("downloadButton").addEventListener("click", function() {
    // Lógica para el botón de descargar modelo
  });
  
  document.getElementById("commentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var commentInput = document.getElementById("commentInput").value;
    addComment(commentInput);
    document.getElementById("commentInput").value = "";
  });
  
  function addComment(comment) {
    var commentsList = document.getElementById("commentsList");
    var commentElement = document.createElement("p");
    commentElement.textContent = comment;
    commentsList.appendChild(commentElement);
  }