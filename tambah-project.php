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

<h1>Tambah Project Baru</h1>

<?php if (!empty($errors)): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">
    <label>Judul Karya</label><br>
    <input
        type="text"
        name="judul_karya"
        value="<?= htmlspecialchars($judul, ENT_QUOTES, 'UTF-8') ?>"
    ><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi" rows="4"><?= htmlspecialchars($deskripsi, ENT_QUOTES, 'UTF-8') ?></textarea><br><br>

    <label>Tools</label><br>
    <input
        type="text"
        name="tools"
        value="<?= htmlspecialchars($tools, ENT_QUOTES, 'UTF-8') ?>"
    ><br><br>

    <label>Tautan (Link)</label><br>
    <input
        type="url"
        name="tautan"
        value="<?= htmlspecialchars($tautan, ENT_QUOTES, 'UTF-8') ?>"
    ><br><br>

    <label>Tanggal Dibuat</label><br>
    <input
        type="date"
        name="dibuat_pada"
        value="<?= htmlspecialchars($dibuatPada, ENT_QUOTES, 'UTF-8') ?>"
    ><br><br>

    <button type="submit">Simpan Project</button>
</form>

<p><a href="projects.php">Kembali ke Dashboard</a></p>

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
    }
</style>