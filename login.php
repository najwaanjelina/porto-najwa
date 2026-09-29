<?php
session_start();

$error = "";

// Pesan jika masuk karena belum login
if (isset($_GET["pesan"]) && $_GET["pesan"] == "belum_login") {
    $error = "Silakan login terlebih dahulu.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Username dan password
    $username_benar = "najwa";
    $password_benar = "12345";

    if ($username == $username_benar && $password == $password_benar) {

        // Simpan data login ke session
        $_SESSION["is_login"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "admin";

        // Setelah login masuk ke dashboard
        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Najwa's Portfolio</title>

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
            overflow: hidden;
        }

        /* Dekorasi */

        .decor {
            position: absolute;
            color: #d8c7d8;
            font-size: 28px;
        }

        .decor-one {
            top: 12%;
            left: 15%;
        }

        .decor-two {
            top: 20%;
            right: 17%;
        }

        .decor-three {
            bottom: 18%;
            left: 18%;
        }

        .decor-four {
            bottom: 13%;
            right: 15%;
        }

        /* Login Card */

        .login-card {
            width: 380px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #eee5ea;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(120, 100, 110, 0.12);
        }

        .flower {
            font-size: 42px;
            margin-bottom: 12px;
        }

        .mini-title {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            color: #a997a8;
            margin-bottom: 6px;
        }

        h1 {
            font-size: 27px;
            color: #5f5360;
            margin-bottom: 8px;
        }

        .description {
            font-size: 13px;
            color: #9b9099;
            margin-bottom: 28px;
        }

        /* Input */

        .input-group {
            text-align: left;
            margin-bottom: 17px;
        }

        .input-group label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #6f626d;
            margin-bottom: 7px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #e5dce2;
            border-radius: 12px;
            outline: none;
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            background: #fff;
            color: #5f5360;
            transition: 0.2s;
        }

        .input-group input:focus {
            border-color: #cdb8ca;
            box-shadow: 0 0 0 3px rgba(205, 184, 202, 0.15);
        }

        /* Error */

        .error {
            background: #fff0f2;
            color: #b56d7b;
            font-size: 12px;
            padding: 9px;
            border-radius: 10px;
            margin-bottom: 17px;
        }

        /* Button */

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 13px;
            background: #bfa9bb;
            color: white;
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #a991a5;
            transform: translateY(-1px);
        }

        .bottom-text {
            margin-top: 23px;
            font-size: 11px;
            color: #aaa0a8;
        }

        /* Responsive */

        @media (max-width: 500px) {

            .login-card {
                width: 90%;
                padding: 30px;
            }

            .decor {
                display: none;
            }
        }

    </style>
</head>

<body>

    <!-- Dekorasi -->
    <div class="decor decor-one">✿</div>
    <div class="decor decor-two">✦</div>
    <div class="decor decor-three">♡</div>
    <div class="decor decor-four">☁</div>


    <!-- Login -->
    <div class="login-card">

        <div class="flower">🌷</div>

        <p class="mini-title">WELCOME BACK</p>

        <h1>Login</h1>

        <p class="description">
            Login to enter ♡
        </p>


        <?php if ($error != ""): ?>

            <div class="error">
                <?php echo $error; ?>
            </div> 

        <?php endif; ?>


        <form method="POST">

            <div class="input-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

            </div>


            <div class="input-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>


            <button type="submit">
                Login →
            </button>

        </form>


        <p class="bottom-text">
            made with ♡ by Najwa
        </p>

    </div>

</body>
</html>