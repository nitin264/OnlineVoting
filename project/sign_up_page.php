<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="sign_up_page.css" rel="stylesheet" type="text/css" />
    <title>Sign up</title>
</head>
<body>
  <div class="top-border">
    
  </div>
   <div class="sign-up">
      <form action="sign_up_details.php" method="post">

         <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>                 
              <label for="user_name"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="user_name" required>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <label for="psw_repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
          
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
          
              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
              <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" onclick="document.location='login_page.php' " >Sign Up</button>
              </div>
            </div>
          </form>
    </div>
    <div class="redirect" >
      <a href="login_page.php">
        Login Here
      </a>
    </div>
    <div href = "#about">
        Contact me for more info/ enquiry for fun 
    </div>
</body>
</html>