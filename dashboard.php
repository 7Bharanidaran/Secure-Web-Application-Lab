<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<h2>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h2>

<a href="logout.php">Logout</a>

</body>
</html>