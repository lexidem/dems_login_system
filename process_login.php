<?php
session_start();


$conn = new mysqli("localhost", "root", "", "user_management");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        echo "Login successful! <a href='view_users.php'>View Registered Users</a>";
    } else {
        echo "Invalid password!";
    }
} else {
    echo "No user found with this username!";
}

$stmt->close();
$conn->close();
?>
