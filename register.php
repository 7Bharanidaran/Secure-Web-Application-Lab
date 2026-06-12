<?php

include "config/db.php";

if(isset($_POST['register']))
{
   $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(strlen($username) < 3)
{
    die("Username must contain at least 3 characters");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    die("Invalid Email Address");
}

if(strlen($password) < 8)
{
    die("Password must contain at least 8 characters");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare(
"INSERT INTO users(username,email,password)
VALUES(?,?,?)"
);

$stmt->bind_param(
"sss",
$username,
$email,
$hashed_password
);

if($stmt->execute())
{
    echo "Registration Successful!";
}
else
{
    echo "Error!";
}
    if($conn->query($sql) === TRUE)
    {
        echo "Registration Successful!";
    }
    else
    {
        echo "Error!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Register Page</h1>

<form method="POST">

    Username:
    <input type="text" name="username">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="register" value="Register">

</form>

</body>
</html>