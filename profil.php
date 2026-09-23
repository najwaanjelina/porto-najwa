<?php 
session_start(); 
require "cek_session.php"; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Profil | Najwa's Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link 
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8f5f2;
            color: #5f5360;
        }

        .profile-card {
            width: 450px;
            padding: 40px;
            background: white;
            border: 1px solid #eee5ea;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(120, 100, 110, 0.1);
        }

        .flower {
            font-size: 40px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 25px;
        }

        .info {
            text-align: left;
            background: #faf7f9;
            padding: 15px 18px;
            border-radius: 12px;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .label {
            color: #a997a8;
            font-size: 12px;
            margin-bottom: 3px;
        }

        .value {
            font-weight: 500;
            color: #5f5360;
        }

        a {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 20px;
            background: #bfa9bb;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 13px;
            transition: 0.2s;
        }

        a:hover {
            background: #a991a5;
        }
    </style>
</head> 

<body> 

    <div class="profile-card">

        <div class="flower">🌷</div>

        <h1>Profil Pengguna</h1>

        <div class="info">
            <div class="label">Username</div>
            <div class="value">
                <?php echo $_SESSION["username"]; ?>
            </div>
        </div>

        <div class="info">
            <div class="label">Role</div>
            <div class="value">
                <?php echo $_SESSION["role"]; ?>
            </div>
        </div>

        <a href="dashboard.php">← Kembali ke Dashboard</a>

    </div>

</body> 
</html>