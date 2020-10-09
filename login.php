<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="bg-login">
   <div class="wrapper">
     <div id="formContainer">


       <!-- Logo -->
       <div class="fadeIn first py-4">
         <img src="assets/img/logo-outplex.svg" id="icon" alt="User Icon" />
       </div>

       <!-- Login Form -->
       <form>
         <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
         <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
         <input type="submit" class="fadeIn fourth" value="Log In">
       </form>

       <!-- Remind Passowrd -->
       <!-- <div id="formFooter">
         <a class="underlineHover" href="#">Forgot Password?</a>
       </div>
      -->
     </div>
   </div>
</body>
</html>