<?php
    include("includes/handlers/register-handlers.php");
    include("includes/handlers/login-handler.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur The Rhema</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g Melch" required>        
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" required> 
            </p> 
            <button type="submit" name="loginButton" >Log in</button>   
        </form>
      
              <!-- Create your free account section  -->
   
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g Melch" required>        
            </p>
            <p>
                <label for="firstname">Firstname</label>
                <input id="firstname" name="firstname" type="text" placeholder="e.g Melch" required>        
            </p>
            <p>
                <label for="lastname">Last name</label>
                <input id="lastname" name="lastname" type="text" placeholder="e.g Masala" required>        
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="text" placeholder="e.g Melch@gmail.com" required>        
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="text" placeholder="e.g Melch@gmail.com" required>        
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required> 
            </p> 
            <p>
                <label for="Password2">Confirm Password</label>
                <input id="Password2" name="Password2" type="password" placeholder="Your password" required> 
            </p> 
            <button type="submit" name="registerButton" >SIGN UP</button>   
        </form>      

    </div>
</body>
</html>