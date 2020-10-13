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

    <?php 

      session_start();

      if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
          header("location: dashboard.php");
      }

    ?>

    <?php include 'login_function.php'; ?>

   <div class="wrapper">
     <div id="formContainer">

      <?php if($username_error){ ?>
         <div class="alert alert-danger mb-0" role="alert">
           <?= $username_error; ?>
         </div>
      <?php } ?>

      <?php if($password_error){ ?>
         <div class="alert alert-danger" role="alert">
           <?= $password_error; ?>
         </div>
      <?php } ?>

      <?php if($error){ ?>
         <div class="alert alert-danger" role="alert">
           <?= $error; ?>
         </div>
      <?php } ?>

      
       <!-- Logo -->
       <div class="fadeIn first py-4">
         <img src="assets/img/logo-outplex.svg" id="icon" alt="User Icon" />
       </div>

       <!-- Login Form -->
       <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
         <input type="text" id="username" class="input-login fadeIn second" name="username" placeholder="username" autocomplete="off">
         <input type="password" id="password" class="input-login fadeIn third" name="password" placeholder="password" autocomplete="off">
         <input type="submit" class="fadeIn fourth" value="Log In">
       </form>



       <!-- Remind Passowrd -->
       <div id="formFooter">
            
       </div>
     
     </div>
   </div>
</body>
</html>