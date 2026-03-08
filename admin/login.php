<?php
session_start();
require_once '../connect_db.php';

// If the admin is already logged in, send them straight to the dashboard
if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = trim($_POST['password']);

    // Find the admin in the database
    $query = "SELECT * FROM admins WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);
        
        // Verify the securely hashed password
        if (password_verify($password, $admin['password'])) {
            // Success! Create the secure session
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "Admin username not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | NYAMATA SDA</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #1d3557; /* Nyamata Deep Navy */
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 380px;
            text-align: center;
        }
        .login-card h2 {
            color: #0f172a;
            margin-bottom: 5px;
            font-weight: 800;
        }
        .login-card p {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 25px;
        }
        .error-msg {
            background: #fef2f2;
            color: #991b1b;
            padding: 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid #fecaca;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            margin-bottom: 16px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            box-sizing: border-box;
            font-family: inherit;
            background: #f8fafc;
            color: #334155;
            font-weight: 500;
            transition: all 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #b8860b;
            background: #ffffff;
        }
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #b8860b; /* Nyamata Gold */
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-login:hover {
            background: #daa520;
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            background: #f1f5f9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .icon-circle i {
            font-size: 30px;
            color: #1d3557;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="icon-circle">
            <i class="fas fa-lock"></i>
        </div>
        <h2>NYAMATA SDA</h2>
        <p>Secure Admin Portal</p>

        <?php if ($error): ?>
            <div class="error-msg"><i class="fas fa-exclamation-triangle"></i> <?= $error ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Admin Username" required autocomplete="off">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" class="btn-login"><i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i> Access Dashboard</button>
        </form>
    </div>

</body>
</html>