
    // validate form
    function validateForm(event) {
        event.preventDefault(); // Prevent form submission
  
        // Reset error messages
        document.getElementById("emailError").textContent = "";
        document.getElementById("passwordError").textContent = "";
  
        // Get form values
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("pass").value;
  
        
        // Validate email field
        if (email == "" || email == null) {
          document.getElementById("emailError").textContent = window.alert("Email is required.");
          return;
        }
  
        // Validate password field
        if (password == "" || password == null) {
          document.getElementById("passwordError").textContent = window.alert("Password is required.");
          return;
        }
        if (password.length < 6) {
          document.getElementById("passwordError").textContent = window.alert("Password length must be 8 characters long.");
          return;
        }
  
        // Proceed with form submission
        document.getElementById("registrationForm").submit();
      }