
<?php
require_once __DIR__ . '/config/database.php';

// Ambil data project
$stmt = $pdo->query(
    'SELECT * FROM projects ORDER BY dibuat_pada DESC'
);
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Hitung jumlah project dan skill
$totalProjects = (int) $pdo->query(
    'SELECT COUNT(*) FROM projects'
)->fetchColumn();


?>

<?php
include "layouts/header.php";
include "layouts/sidebar.php";
?>

<link rel="stylesheet" href="projects.css">

<main class="projects-content">

    <div class="page-heading">
        <div>
            <h1>My Projects <span></span></h1>
            <p class="subtitle">
                Semua karya dan project yang sudah aku buat.
            </p>
        </div>

        <div class="heading-decoration">✿</div>
    </div>

    <!-- Statistik -->
    <div class="stats-container">

        <div class="stat-card pink-card">
            <div class="stat-icon">✿</div>
            <div>
                <p>Total Projects</p>
                <h2><?= $totalProjects ?></h2>
            </div>
        </div>

        

    </div>

    <!-- Tabel Project -->
    <section class="project-panel">

        <div class="panel-heading">
            <div>
                <h2>Daftar Project</h2>
                <p>Kumpulan karya portofolio kamu ♡</p>
            </div>

            <span class="project-count">
                <?= $totalProjects ?> Projects
            </span>
        </div>

        <?php if (empty($projects)): ?>

            <div class="empty-state">
                <span>✿</span>
                <h3>Belum ada project</h3>
                <p>Project kamu akan muncul di sini.</p>
            </div>

        <?php else: ?>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Judul Karya</th>
                            <th>Deskripsi</th>
                            <th>Tools</th>
                            <th>Tautan</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($projects as $project): ?>
                            <tr>
                                <td class="project-title">
                                    <?= htmlspecialchars($project['judul_karya'] ?? '') ?>
                                </td>

                                <td class="description">
                                    <?= htmlspecialchars($project['deskripsi'] ?? '') ?>
                                </td>

                                <td>
                                    <span class="tools-tag">
                                        <?= htmlspecialchars($project['tools'] ?? '') ?>
                                    </span>
                                </td>

                                <td>
                                    <?php if (!empty($project['tautan'])): ?>
                                        <a
                                            class="view-link"
                                            href="<?= htmlspecialchars($project['tautan']) ?>"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >Lihat ↗</a>
                                    <?php else: ?>
                                        <span class="no-link">Belum ada</span>
                                    <?php endif; ?>
                                </td>

                                <td class="date-cell">
                                    <?= htmlspecialchars($project['dibuat_pada'] ?? '') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php endif; ?>

    </section>

</main>

<?php 
include "layouts/footer.php"
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #faf8f6;
    color: #66515c;
}

/* Konten tidak tertutup sidebar */
.projects-content {
    margin-left: 235px;
    padding: 35px 38px;
    min-height: calc(100vh - 135px);
    width: calc(100% - 235px);
}

/* Judul halaman */
.page-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 28px;
}

.eyebrow {
    margin: 0 0 8px;
    color: #c18e9e;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
}

.page-heading h1 {
    margin: 0;
    color: #a98694;
    font-size: 27px;
    font-weight: 700;
}

.page-heading h1 span {
    color: #c18e9e;
}

.subtitle {
    margin: 8px 0 0;
    color: #a797a2;
    font-size: 13px;
}

.heading-decoration {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    flex-shrink: 0;
    border-radius: 18px;
    background: #f6e7ec;
    color: #c18e9e;
    font-size: 28px;
}

/* Kartu angka */
.stats-container {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
    margin-bottom: 25px;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 17px;
    min-width: 0;
    min-height: 112px;
    padding: 22px;
    border: 1px solid #eee7e4;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 5px 20px rgba(180, 160, 170, 0.04);
}

.pink-card {
    background: #fffafb;
}

.blue-card {
    background: #fbfdff;
}

.stat-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 49px;
    height: 49px;
    flex-shrink: 0;
    border-radius: 15px;
    background: #f6e7ec;
    color: #c18e9e;
    font-size: 23px;
}

.blue-card .stat-icon {
    background: #e5eff7;
    color: #91aabc;
}

.stat-card p {
    margin: 0 0 3px;
    color: #a797a2;
    font-size: 12px;
}

.stat-card h2 {
    margin: 0;
    color: #8f6d7e;
    font-size: 29px;
    font-weight: 700;
    line-height: 1.3;
}

/* Panel tabel */
.project-panel {
    width: 100%;
    min-width: 0;
    padding: 25px;
    border: 1px solid #eee7e4;
    border-radius: 22px;
    background: #fff;
    box-shadow: 0 5px 20px rgba(180, 160, 170, 0.04);
}

.panel-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 22px;
}

.panel-heading h2 {
    margin: 0;
    color: #8f6d7e;
    font-size: 18px;
    font-weight: 600;
}

.panel-heading p {
    margin: 5px 0 0;
    color: #ad9ba5;
    font-size: 12px;
}

.project-count {
    padding: 8px 13px;
    border-radius: 30px;
    background: #f6e7ec;
    color: #a77d8e;
    font-size: 11px;
    white-space: nowrap;
}

/* Tabel responsif */
.table-wrapper {
    width: 100%;
    max-width: 100%;
    overflow-x: auto;
    border: 1px solid #f0e6e6;
    border-radius: 13px;
}

table {
    width: 100%;
    min-width: 700px;
    border-collapse: collapse;
    text-align: left;
}

thead {
    background: #fff7f9;
}

th {
    padding: 14px;
    color: #a47e8f;
    font-size: 11px;
    font-weight: 600;
    white-space: nowrap;
}

td {
    padding: 15px 14px;
    border-top: 1px solid #f5eeee;
    color: #7e6d77;
    font-size: 11px;
    line-height: 1.8;
    vertical-align: middle;
}

tbody tr {
    transition: background 0.2s ease;
}

tbody tr:hover {
    background: #fffbfc;
}

.project-title {
    color: #8f6d7e;
    font-weight: 600;
}

.description {
    min-width: 150px;
    max-width: 250px;
    overflow-wrap: anywhere;
}

.tools-tag {
    display: inline-block;
    padding: 5px 9px;
    border-radius: 8px;
    background: #e5eff7;
    color: #819caf;
    font-size: 10px;
}

.view-link {
    display: inline-block;
    padding: 6px 11px;
    border-radius: 9px;
    background: #f6e7ec;
    color: #a47789;
    text-decoration: none;
    font-size: 11px;
    white-space: nowrap;
}

.view-link:hover {
    background: #eed5de;
}

.no-link {
    color: #ad9ba5;
    font-size: 10px;
}

.date-cell {
    white-space: nowrap;
}

/* Tampilan saat data masih kosong */
.empty-state {
    padding: 40px 15px;
    border: 1px dashed #ead9df;
    border-radius: 16px;
    background: #fffbfc;
    text-align: center;
}

.empty-state > span {
    color: #c18e9e;
    font-size: 30px;
}

.empty-state h3 {
    margin: 10px 0 5px;
    color: #9c7889;
    font-size: 15px;
}

.empty-state p {
    margin: 0;
    color: #ad9ba5;
    font-size: 12px;
}

/* Tablet dan HP */
@media (max-width: 850px) {
    .projects-content {
        margin-left: 0;
        width: 100%;
        padding: 25px 20px;
    }

    .stats-container {
        gap: 12px;
    }

    .project-panel {
        padding: 20px 16px;
    }
}

@media (max-width: 520px) {
    .page-heading h1 {
        font-size: 23px;
    }

    .subtitle {
        font-size: 12px;
    }

    .stats-container {
        grid-template-columns: 1fr;
    }

    .stat-card {
        min-height: 95px;
    }

    .panel-heading h2 {
        font-size: 16px;
    }

    .project-count {
        padding: 7px 9px;
        font-size: 10px;
    }
}
</style>