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

    .skills {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .skill-card {
        background: #ffffff;
        border: 1px solid #eee7e4;
        border-radius: 25px;
        padding: 27px;
        box-shadow: 0 8px 25px rgba(180, 160, 170, 0.06);
    }

    .skill-top {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 18px;
    }

    .skill-icon {
        width: 48px;
        height: 48px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
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

    .lavender {
        background: #eeeaf5;
        color: #9c91ad;
    }

    .skill-top h3 {
        color: #5b555e;
        font-size: 16px;
    }

    .skill-card p {
        color: #99929a;
        font-size: 12px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .level {
        height: 7px;
        background: #f2eeee;
        border-radius: 20px;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        border-radius: 20px;
    }

    .html {
        width: 90%;
        background: #e8b7c5;
    }

    .css {
        width: 80%;
        background: #a9ced1;
    }

    .javascript {
        width: 65%;
        background: #e5cf91;
    }

    .php {
        width: 60%;
        background: #c8bfd8;
    }

    .skill-percent {
        display: block;
        text-align: right;
        margin-top: 7px;
        color: #aaa1a8;
        font-size: 10px;
    }

    @media (max-width: 850px) {
        main {
            margin-left: 0;
            padding: 25px 20px;
        }

        .skills {
            grid-template-columns: 1fr;
        }
    }
</style>

