
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside>
    <div class="sidebar-brand">
        <h3>My Dashboard</h3>
        <p>PERSONAL PORTFOLIO</p>
    </div>

    <nav>
        <a href="dashboard_utama.php"
           class="<?= $current_page == 'dashboard_utama.php' ? 'active' : '' ?>">
            <span>♡</span>
            Dashboard
        </a>

        <a href="profil.php"
           class="<?= $current_page == 'profil.php' ? 'active' : '' ?>">
            <span>✦</span>
            Profile
        </a>

        <a href="projects.php"
           class="<?= $current_page == 'projects.php' ? 'active' : '' ?>">
            <span>✿</span>
            Projects
        </a>

        <a href="skills.php"
           class="<?= $current_page == 'skills.php' ? 'active' : '' ?>">
            <span>☁</span>
            Skills
        </a>

        <div class="logout-space"></div>

        <a href="logout.php" class="logout">
            <span>↪</span>
            Logout
        </a>
    </nav>
</aside>

<style>
    aside {
        position: fixed;
        left: 0;
        top: 0;
        width: 235px;
        height: 100vh;
        padding: 35px 22px;
        background: #fffafa;
        border-right: 1px solid #eee7e4;
        box-sizing: border-box;
        z-index: 1000;
    }

    .sidebar-brand {
        padding: 0 12px;
        margin-bottom: 45px;
    }

    .sidebar-brand h3 {
        color: #a98694;
        font-size: 20px;
        font-weight: 600;
        margin: 0 0 5px;
    }

    .sidebar-brand p {
        color: #b8b0b6;
        font-size: 10px;
        letter-spacing: 1px;
        margin: 0;
    }

    aside nav a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 13px 15px;
        margin-bottom: 8px;
        border-radius: 15px;
        text-decoration: none;
        color: #827b84;
        font-size: 13px;
        transition: 0.2s ease;
    }

    aside nav a span {
        font-size: 17px;
        color: #c49baa;
    }

    /* Efek saat diarahkan mouse */
    aside nav a:hover {
        background: #f8eef1;
        color: #b18493;
        transform: translateX(3px);
    }

    /* Halaman yang sedang aktif */
    aside nav a.active {
        background: #f6e7ec;
        color: #a9798a;
        font-weight: 600;
    }

    aside nav a.active span {
        color: #a9798a;
    }

    .logout-space {
        height: 25px;
    }

    aside nav a.logout:hover {
        background: #f6e7ec;
        color: #b18493;
    }

    /* Tampilan HP */
    @media (max-width: 850px) {
        aside {
            position: relative;
            width: 100%;
            height: auto;
            border-right: none;
            border-bottom: 1px solid #eee7e4;
            padding: 20px;
        }

        .sidebar-brand {
            margin-bottom: 15px;
        }

        aside nav {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        aside nav a {
            display: inline-flex;
            margin-bottom: 5px;
        }

        .logout-space {
            display: none;
        }
    }
</style>