<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
           
            $('#login-form').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'controllers/LoginController.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        console.log(response)
                        // response = JSON.parse(response);
                        // if (response.success) {
                        //     // Redirect to a welcome page or perform other actions
                        //     window.location.href = 'welcome.php';
                        // } else {
                        //     $('#error-message').text(response.message);
                        // }
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>Login</h1>
    <div id="error-message" style="color: red;"></div>
    <form id="login-form" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
