
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OMEK</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" href="../foto/logoOmek.png" type="image/png">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #333;
            display: block;
        }

        input {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #d9534f;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to OMEK</h2>
        <form onsubmit="return validateForm()">
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Login</button>

            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </form>

     
        <div class="error-message" id="error-message"></div>
    </div>

    <script>
        function validateForm() {
            
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                displayErrorMessage("Ju lutem shenoni te dyja username-in dhe passwordin.");
                return false;
            }

           
            hideErrorMessage();
            return true;
        }

        function displayErrorMessage(message) {
            var errorMessageElement = document.getElementById("error-message");
            errorMessageElement.textContent = message;
        }

        function hideErrorMessage() {
            var errorMessageElement = document.getElementById("error-message");
            errorMessageElement.textContent = "";
        }
    </script>
</body>
</html>
