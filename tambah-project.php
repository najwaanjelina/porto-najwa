<?php
require_once __DIR__ . '/config/database.php';

$errors = [];

$judul = '';
$deskripsi = '';
$tools = '';
$tautan = '';
$dibuatPada = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul_karya'] ?? '');
    $deskripsi = trim($_POST['deskripsi'] ?? '');
    $tools = trim($_POST['tools'] ?? '');
    $tautan = trim($_POST['tautan'] ?? '');
    $dibuatPada = trim($_POST['dibuat_pada'] ?? '');

    // Validasi input kosong
    if ($judul === '') {
        $errors[] = 'Judul karya wajib diisi.';
    }

    if ($deskripsi === '') {
        $errors[] = 'Deskripsi project wajib diisi.';
    }

    if ($dibuatPada === '') {
        $errors[] = 'Tanggal dibuat wajib diisi.';
    }

    // Simpan data jika tidak ada error
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare(
                'INSERT INTO projects
                (judul_karya, deskripsi, tools, tautan, dibuat_pada)
                VALUES
                (:judul_karya, :deskripsi, :tools, :tautan, :dibuat_pada)'
            );

            $stmt->execute([
                ':judul_karya' => $judul,
                ':deskripsi' => $deskripsi,
                ':tools' => $tools,
                ':tautan' => $tautan,
                ':dibuat_pada' => $dibuatPada
            ]);

            header('Location: projects.php');
            exit;
        } catch (PDOException $e) {
            $errors[] = 'Data gagal disimpan. Silakan coba lagi.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project</title>
</head>
<body>

<div class="form-container">

    <h1>Tambah Project Baru</h1>

    <?php if (!empty($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <label>Judul Karya</label>
        <input
            type="text"
            name="judul_karya"
            value="<?= htmlspecialchars($judul, ENT_QUOTES, 'UTF-8') ?>"
        >

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="4"><?= htmlspecialchars($deskripsi, ENT_QUOTES, 'UTF-8') ?></textarea>

        <label>Tools</label>
        <input
            type="text"
            name="tools"
            value="<?= htmlspecialchars($tools, ENT_QUOTES, 'UTF-8') ?>"
        >

        <label>Tautan (Link)</label>
        <input
            type="url"
            name="tautan"
            value="<?= htmlspecialchars($tautan, ENT_QUOTES, 'UTF-8') ?>"
        >

        <label>Tanggal Dibuat</label>
        <input
            type="date"
            name="dibuat_pada"
            value="<?= htmlspecialchars($dibuatPada, ENT_QUOTES, 'UTF-8') ?>"
        >

        <button type="submit">Simpan Project</button>
    </form>

    <a href="projects.php" class="btn-back">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 35px;
        background: #fff8fb;
        font-family: 'Poppins', Arial, sans-serif;
        color: #55434d;
    }

    h1 {
        color: #9a7c87;
        font-size: 28px;
        margin-bottom: 25px;
    }

    form {
        max-width: 650px;
        padding: 30px;
        background: #ffffff;
        border: 1px solid #f0dfe7;
        border-radius: 18px;
        box-shadow: 0 5px 20px rgba(154, 124, 135, 0.10);
    }

    label {
        display: inline-block;
        margin-bottom: 8px;
        color: #765966;
        font-size: 14px;
        font-weight: 600;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #e8d5df;
        border-radius: 10px;
        background: #fffafd;
        color: #55434d;
        font: inherit;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    input:focus,
    textarea:focus {
        border-color: #c9a5b5;
        box-shadow: 0 0 0 3px rgba(201, 165, 181, 0.18);
    }

    textarea {
        resize: vertical;
        min-height: 110px;
    }

    button {
        padding: 12px 22px;
        border: none;
        border-radius: 10px;
        background: #bfa9bb;
        color: white;
        font: inherit;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover {
        background: #9a7c87;
        transform: translateY(-1px);
    }

    ul {
        max-width: 650px;
        padding: 15px 20px 15px 38px;
        margin-bottom: 20px;
        border: 1px solid #f2caca;
        border-radius: 12px;
        background: #fff0f0;
        color: #c0394b;
        font-size: 14px;
    }

    li {
        margin: 5px 0;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        color: #9a7c87;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        color: #765966;
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        body {
            padding: 20px 15px;
        }

        h1 {
            font-size: 23px;
        }

        form {
            padding: 20px;
        }

        
    /* Container form di tengah halaman */
    .form-container {
        width: 100%;
        max-width: 750px;
        margin: 20px auto;
    }

    /* Judul halaman */
    .form-container h1 {
        margin-bottom: 25px;
    }

    /* Form memenuhi lebar container */
    .form-container form {
        width: 100%;
        max-width: none;
    }

    /* Jarak antar label dan input */
    .form-container label {
        display: block;
        margin-top: 2px;
    }

    .form-container input,
    .form-container textarea {
        display: block;
        margin-bottom: 20px;
    }

    /* Tombol kembali ke dashboard */
    .btn-back {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 22px;
        padding: 11px 18px;
        border: 1px solid #ead5df;
        border-radius: 12px;
        background: #f6e7ec;
        color: #9a7c87;
        font-family: 'Poppins', Arial, sans-serif;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .btn-back:hover {
        background: #bfa9bb;
        border-color: #bfa9bb;
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
    }

    /* Tampilan HP */
    @media (max-width: 600px) {
        .form-container {
            margin: 10px auto;
        }
    }

</style>