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

    .page-title {
        margin-bottom: 28px;
    }

    .page-title small {
        color: #c29eab;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .page-title h1 {
        margin-top: 8px;
        font-size: 30px;
        color: #514b55;
    }

    .page-title p {
        margin-top: 8px;
        color: #99929a;
        font-size: 13px;
    }

    .projects {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .project-card {
        background: #ffffff;
        border: 1px solid #eee7e4;
        border-radius: 25px;
        padding: 28px;
        box-shadow: 0 8px 25px rgba(180, 160, 170, 0.06);
        transition: 0.25s;
    }

    .project-card:hover {
        transform: translateY(-4px);
    }

    .project-icon {
        width: 52px;
        height: 52px;
        border-radius: 17px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        font-size: 21px;
    }

    .pink {
        background: #f6e7ec;
        color: #bd8b9c;
    }

    .blue {
        background: #e5f1f0;
        color: #769c99;
    }

    .yellow {
        background: #f8f0dc;
        color: #b39a61;
    }

    .project-card h3 {
        color: #5b555e;
        font-size: 17px;
        margin-bottom: 8px;
    }

    .project-card p {
        color: #99929a;
        font-size: 13px;
        line-height: 1.7;
        margin-bottom: 17px;
    }

    .tech {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        background: #faf5f7;
        color: #a47e8c;
        font-size: 11px;
        margin-right: 5px;
    }

    @media (max-width: 850px) {
        main {
            margin-left: 0;
            padding: 25px 20px;
        }

        .projects {
            grid-template-columns: 1fr;
        }
    }
</style>

