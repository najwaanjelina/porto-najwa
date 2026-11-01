
<?php
require_once __DIR__ . '/config/database.php';

if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    header('Location: projects.php');
    exit;
}

$id = (int) $_GET['id'];

$stmt = $pdo->prepare(
    'SELECT * FROM projects WHERE id = :id'
);
$stmt->execute([':id' => $id]);

$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    header('Location: projects.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project | Najwa</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px;
            min-height: 100vh;
            background: #fff8fb;
            font-family: 'Poppins', Arial, sans-serif;
            color: #55434d;
        }

        .edit-container {
            width: 100%;
            max-width: 750px;
            margin: 15px auto;
        }

        h1 {
            margin: 0 0 25px;
            color: #9a7c87;
            font-size: 28px;
            font-weight: 700;
        }

        .edit-card {
            padding: 30px;
            background: #fff;
            border: 1px solid #f0dfe7;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(154, 124, 135, 0.08);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #765966;
            font-size: 14px;
            font-weight: 600;
        }

        input {
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

        input:focus {
            border-color: #c9a5b5;
            box-shadow: 0 0 0 3px rgba(201, 165, 181, 0.18);
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 25px;
        }

        .btn-save,
        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 20px;
            border: none;
            border-radius: 11px;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-save {
            background: #bfa9bb;
            color: #fff;
        }

        .btn-save:hover {
            background: #9a7c87;
            transform: translateY(-1px);
        }

        .btn-back {
            border: 1px solid #ead5df;
            background: #f6e7ec;
            color: #9a7c87;
        }

        .btn-back:hover {
            background: #eed5de;
            color: #765966;
            transform: translateY(-1px);
        }

        .page-note {
            margin-top: 18px;
            color: #ad9ba5;
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 15px;
            }

            h1 {
                font-size: 24px;
            }

            .edit-card {
                padding: 22px 18px;
            }
        }
    </style>
</head>
<body>

<div class="edit-container">

    <h1>Edit Project <span></span></h1>

    <div class="edit-card">

        <form method="post" action="update-project.php">

            <input type="hidden" name="id"
                   value="<?= (int) $project['id'] ?>">

            <div class="form-group">
                <label for="judul_karya">Judul Karya</label>
                <input
                    type="text"
                    id="judul_karya"
                    name="judul_karya"
                    required
                    value="<?= htmlspecialchars($project['judul_karya'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
            </div>

            <div class="form-group">
                <label for="tools">Tools</label>
                <input
                    type="text"
                    id="tools"
                    name="tools"
                    required
                    value="<?= htmlspecialchars($project['tools'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">
                    Simpan Perubahan
                </button>

                <a href="projects.php" class="btn-back">
                    ← Kembali
                </a>
            </div>

        </form>

    </div>

    <p class="page-note">made with ♡ by Najwa</p>

</div>

</body>
</html>
