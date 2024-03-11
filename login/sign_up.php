<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

        <div class="container">
        <a href="../index.php">Back</a>
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/" alt="">
                </div>
                <div class="signup-form">
                    <form action="../check/intput_signup.php" method="POST" class="register-form" id="register-form">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="lastname" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone :</label>
                            <input type="text" name="Phone" id="Phone">
                        </div>
                        <div class="form-group">
                            <label for="ID">ID :</label>
                            <input type="text" name="ID" id="ID" />
                        </div>
                        <div class="form-group">
                            <label for="Pass">Password :</label>
                            <input type="password" name="pass" id="pass" />
                        </div>
                        <div class="form-submit">
                            <a class="submit" href="../login_1/login.php">Sign in</a>
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>