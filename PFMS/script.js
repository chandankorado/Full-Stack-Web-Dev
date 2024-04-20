document.getElementById("login-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get input values
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Check if username and password are correct
  if (username === "admin" && password === "password") {
    alert("Login successful!");
    // Redirect to another page or perform additional actions
  } else {
    document.getElementById("error-message").textContent = "Invalid username or password";
  }
});
