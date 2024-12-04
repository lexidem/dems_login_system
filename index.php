<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration and Login</title>
</head>
<body>
    <h1>Welcome</h1>
    
    <?php if (isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <a href="view_users.php">View Registered Users</a><br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Please register or log in to continue.</p>
        <a href="register.php">Register</a><br>
        <a href="login.php">Login</a>
    <?php endif; ?>
</body>
</html>

