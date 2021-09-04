<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assignment9_19BCE7451.css">

</head>
<body>
    
<div class="A">
    <div class="B">
    <p><b>Welcome TARUN You have successfully logged in!</b></p>
    </div>
    <div>
        <input type="submit" name="logout" value="LOGOUT">
    </div>
</div>

<?php
if(isset($_POST['logout']))
{
    header('location: 19BCE7451_logout_success.php');
}
?>

</body>
</html>