<?php
session_start();
require 'cek_session.php'; // proteksi halaman (dibahas di bagian 5)
?>

<?php
include "layouts/header.php";
include "layouts/sidebar.php";
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Poppins", Arial, sans-serif;
        background: #faf8f6;
        color: #57515b;
    }

    main {
        margin-left: 235px;
        padding: 45px;
        min-height: calc(100vh - 135px);
    }

    .welcome {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid #eee7e4;
        border-radius: 30px;
        padding: 42px;
        margin-bottom: 25px;
        box-shadow: 0 10px 30px rgba(180, 160, 170, 0.08);
    }

    .welcome small {
        color: #c29eab;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .welcome h1 {
        margin-top: 10px;
        font-size: 32px;
        color: #514b55;
    }

    .welcome p {
        margin-top: 10px;
        color: #96909a;
        font-size: 14px;
    }

    .icon {
        width: 52px;
        height: 52px;
        border-radius: 17px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        margin-bottom: 18px;
    }

    .pink {
        background: #f6e7ec;
        color: #bf8fa0;
    }

    .blue {
        background: #e5f1f0;
        color: #769c99;
    }

    .yellow {
        background: #f8f0dc;
        color: #b39a61;
    }

    .lavender {
        background: #eeeaf5;
        color: #9c91ad;
    }

    @media (max-width: 850px) {
        main {
            margin-left: 0;
            padding: 25px 20px;
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<main>

    <section class="welcome">
        <small>WELCOME BACK </small>

        <h1>Hi, Najwa!</h1>

        <p>
            Selamat datang di dashboard kamu.
            Kelola profil dan lihat portfolio kamu di sini.
        </p>
    </section>

</main>

<?php
include "layouts/footer.php";
?>
