<aside>

    <div class="sidebar-brand">
        <h3>My Dashboard </h3>
    </div>

    <nav>

        <a href="dashboard.php" class="active">
            <span>♡</span>
            Dashboard
        </a>

        <a href="profil.php">
            <span>✦</span>
            Profile
        </a>

        <a href="projects.php">
            <span>✿</span>
            Projects
        </a>

        <a href="skills.php">
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
    }

    .sidebar-brand {
        padding: 0 12px;
        margin-bottom: 45px;
    }

    .sidebar-brand h3 {
        color: #a98694;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .sidebar-brand p {
        color: #b8b0b6;
        font-size: 11px;
        letter-spacing: 1px;
    }

    nav a {
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

    nav a span {
        font-size: 17px;
        color: #c49baa;
    }

    nav a:hover {
        background: #f8eef1;
        color: #b18493;
    }

    nav a.active {
        background: #f6e7ec;
        color: #a9798a;
        font-weight: 600;
    }

    .logout-space {
        height: 25px;
    }

    nav a.logout:hover {
        background: #f6e7ec;
        color: #b18493;
    }

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

        nav a {
            display: inline-flex;
            margin-right: 5px;
        }
    }
</style>
