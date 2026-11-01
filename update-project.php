<?php
require_once __DIR__ . '/config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'
 && isset($_POST['id'], $_POST['judul_karya'], $_POST['tools'])) {
 $id = $_POST['id'];
 $judul = trim($_POST['judul_karya']);
 $tools = trim($_POST['tools']);
 if (ctype_digit($id) && $judul !== '' && $tools !== '') {
 $stmt = $pdo->prepare(
 'UPDATE projects
 SET judul_karya = :judul_karya, tools = :tools
 WHERE id = :id'
 );
 $stmt->execute([
 'judul_karya' => $judul,
 'tools' => $tools,
 'id' => $id,
 ]);
 }
}
header('Location: projects.php');
exit;
