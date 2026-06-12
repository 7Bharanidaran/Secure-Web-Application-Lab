<?php

session_start();
include "config/db.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

  $stmt = $conn->prepare(
"SELECT * FROM users WHERE username = ?"
);

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();

   if(password_verify($password, $row['password']))
{
    session_regenerate_id(true);

    $_SESSION['username'] = $username;

    header("Location: dashboard.php");
}
    }
    else
    {
        echo "Invalid Password";
    }
}
else
{
    echo "User not found";
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Page</h1>

<form method="POST">

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>