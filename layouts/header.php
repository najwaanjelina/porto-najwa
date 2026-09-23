<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Najwa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<header>

    <div class="logo">
        Najwa ♡
    </div>

    <div class="user">
        <?php echo $_SESSION["username"]; ?>
    </div>

</header>

<style>

    header {
        height: 75px;

        margin-left: 235px;

        padding: 0 38px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        background: rgba(255, 255, 255, 0.92);

        border-bottom: 1px solid #eee7e4;

        box-shadow: 0 5px 20px rgba(180, 160, 170, 0.04);
    }

    .logo {
        color: #a98694;

        font-size: 21px;

        font-weight: 600;
    }

    .user {
        background: #f6e7ec;

        color: #ae8291;

        padding: 9px 17px;

        border-radius: 30px;

        font-size: 13px;
    }

    @media (max-width: 850px) {

        header {
            margin-left: 0;
            padding: 0 20px;
        }

    }

</style>
