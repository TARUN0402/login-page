<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="assignment9_19BCE7451.css">
</head>
<body>
<div class="container">
<form action="" method="post">
<div>
<label for="username">Username:</label>
<input type="text" name="username" required><mark class="red"> *</mark></input>
</div>
<div>
<label for="password">Password:</label>
<input type="password" name="password" required><mark class="red"> *</mark></input>
</div>
<div>
<input type="submit" name="submit" value="Sign-in">
</div>
</form>

</div>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pwd = $_POST['password']; 
    if ($user == 'tarun' && $pwd == '12345' )
    { 
        header('location: 19BCE7451_login_success.php');
    } 
else { 
    echo "*Invalid username or password";
} 
}
   ?>