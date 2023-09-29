<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <script>
        
        function validateEmail() {
            var email = document.getElementById("email").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            
            if (!emailPattern.test(email)) {
                alert("Invalid email address");
                return false;
            }
            
            return true;
        }

        
        function validatePassword() {
            var password = document.getElementById("password").value;

            if (password.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }
            
            return true;
        }

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

           
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email address";
            } else {
                echo "Email is valid";
            }

            
            if (strlen($password) < 8) {
                echo "Password must be at least 8 characters long";
            } else {
                echo "Password is valid";
            }
        }
    </script>
</head>
<body>
    <h1>Form Validation</h1>
    <form method="post" onsubmit="return validateEmail() && validatePassword();">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
