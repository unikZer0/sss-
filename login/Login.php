<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register-login Form</title>
	<link rel="stylesheet" href="Login.css">
	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".login").hide();
			$(".register_li").addClass("active");

			$(".login_li").click(function(){
			  $(this).addClass("active");
			  $(".register_li").removeClass("active");
			  $(".login").show();
			   $(".register").hide();
			})

			$(".register_li").click(function(){
			  $(this).addClass("active");
			  $(".login_li").removeClass("active");
			  $(".register").show();
			   $(".login").hide();
			})
		});
	</script>
</head>
<body>
  <a href="../index.php">back</a>
  <div class="wrapper">
  <div class="left">
      <h3>Rocket Station</h3>   
    <img src="img/rocket.png" alt="Rocket_image">
  </div>
  <div class="right">
    <div class="tabs">
      <ul>
        <li class="register_li">Register</li>
        <li class="login_li">login</li>
      </ul>
    </div>
    
    <div class="register">
    <form action="../check/intput_signup.php" method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="input_field">
                                <input class="input" type="text" placeholder="Name" name="name" id="name" required/>
                            </div>
                            <div class="input_field">
                                <input class="input " placeholder="Last Name" type="text" name="lastname" id="father_name" required/>
                            </div>
                        </div>
                        <div class="input_field">
                            <input type="text" class="input" placeholder="Address" name="address" id="address" required/>
                        </div>
                        <div class="input_field">
                            <input type="text" class="input" placeholder="Phone" name="Phone" id="Phone">
                        </div>
                        <div class="input_field">
                            <input type="text" class="input" placeholder="ID" name="ID" id="ID" />
                        </div>
                        <div class="input_field">
                            <input type="password" class="input" placeholder="Password" name="pass" id="pass" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit btn" name="submit" id="submit" />
                        </div>
                    </form>
    </div>
    
    <div class="login">
      <form action="../check/check_login.php" method="post" class="login100-form validate-form">
      <div class="input_field">
        <input type="text" placeholder="E-mail" class="input" name="username">
      </div>
      <div class="input_field">
        <input type="password" name="password" placeholder="Password" class="input">
      </div>

      <div class=""><button class="btn">Login</button></div>
				</form>
    </div>
    
  </div>
</div>
</body>
</html>