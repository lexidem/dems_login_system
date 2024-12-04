<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="process_registration.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <label for="year">Year:</label>
        <input type="number" name="year" min="1" max="5" required><br><br>
        
        <label for="course">Course:</label>
        <input type="text" name="course" required><br><br>
        
        <label for="program">Program:</label>
        <input type="text" name="program" required><br><br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
