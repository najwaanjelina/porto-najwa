<?php

// Pastikan session aktif
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah sudah login
if (!isset($_SESSION["is_login"]) || $_SESSION["is_login"] !== true) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

// Cek role
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: akses_ditolak.php");
    exit;
}

?>