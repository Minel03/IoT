<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="set">
    <div class="banner">
        <h1>Welcome to<br>
        <span>Institute of Tanza</span></h1>
    </div>
    <div class="container">
        <div class="wrapper">
            <img src="./images/ad1.jpg">
            <img src="./images/ad2.jpg">
            <img src="./images/ad3.jpg">
            <img src="./images/ad4.jpg">
        </div>
    </div>
    <div class="container-content">
        <div class="content">
            <form action="login.php" method="POST">
                    <h1> Admin<br> Login</h1>
                    <div class="email">
                        <img src="./images/email.png">
                         <input type="text" id="username" name="username" placeholder="Username" required>
                    </div><br>
                    <div class="pass">
                        <img src="./images/password.png">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div><br>
                    <div class="container1">
                    <button type="submit" class="btn" value="Log In">Submit</button>
                    </div>
                </form>
            </div>
    </div>
    </div>
</body>
</html>