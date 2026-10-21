<?php
require_once __DIR__ . '/config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$judul = $_POST['judul_karya'];
$deskripsi = $_POST['deskripsi'];
$teknologi = $_POST['tools'];
$tautan = $_POST['tautan'];
$dibuatPada = $_POST['dibuat_pada'];
$stmt = $pdo->prepare(
'INSERT INTO projects (judul_karya, deskripsi, tools, tautan, dibuat_pada)
VALUES (:judul_karya, :deskripsi, :tools, :tautan, :dibuat_pada)'
);
$stmt->execute([
'judul_karya' => $judul,
'deskripsi' => $deskripsi,
'tools' => $teknologi,
'tautan' => $tautan,
'dibuat_pada' => $dibuatPada,
]);
header('Location: projects.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Project</title>
</head>
<body>
<h1>Tambah Project Baru</h1>
<form method="post">
<label>Judul Karya</label><br>
<input type="text" name="judul_karya" required><br><br>
<label>Deskripsi</label><br>
<textarea name="deskripsi" rows="4"></textarea><br><br>
<label>Tools</label><br>
<input type="text" name="tools" placeholder="Contoh: PHP, MySQL"><br><br>
<label>Tautan (Link)</label><br>
<input type="url" name="tautan" placeholder="https://..."><br><br>
<label>Tanggal Dibuat</label><br>
<input type="date" name="dibuat_pada" required><br><br>
<button type="submit">Simpan Project</button>
</form>
<p><a href="projects.php">Kembali ke Dashboard</a></p>
</body>
</html>