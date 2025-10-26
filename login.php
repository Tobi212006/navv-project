<?php
session_start();
include_once '../config/database.php';

if($_POST) {
    $database = new Database();
    $db = $database->getConnection();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin_users WHERE username = ? LIMIT 0,1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $username);
    $stmt->execute();
    
    if($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['password_hash'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $row['username'];
            $_SESSION['admin_name'] = $row['full_name'];
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $error = "Invalid username or password!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Naav Maharashtra</title>
    <style>
        body { font-family: Arial, sans-serif; background: #1a1a1a; color: white; }
        .login-container { max-width: 400px; margin: 100px auto; padding: 20px; background: #333; border-radius: 10px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #444; background: #222; color: white; border-radius: 5px; }
        button { background: #ff6600; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .error { color: #ff4444; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>