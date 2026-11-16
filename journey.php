<?php
$pageTitle = "Perjalanan | Peter"; $activePage = "journey";
require __DIR__ . "/includes/header.php";
$steps = [
["01","Masa sekolah","Masa untuk mengenal banyak hal, membangun pertemanan, dan mulai menemukan minat yang ingin ditekuni."],
["02","Memulai perkuliahan","Memasuki lingkungan baru, mempelajari bidang teknologi dan informasi, serta menyesuaikan diri dengan tanggung jawab sebagai mahasiswa."],
["03","Belajar berorganisasi","Mendapat pengalaman bekerja bersama orang lain, berkomunikasi, dan menjalankan tanggung jawab dalam sebuah komunitas."],
["04","Mencoba membangun proyek","Mulai mengeksplorasi pembuatan website, ide usaha, dan berbagai hal yang bisa dikembangkan menjadi karya nyata."],
["05","Langkah berikutnya","Terus memperdalam kemampuan, memperluas pengalaman, dan mengevaluasi arah yang ingin dituju."]];
?>
<section class="page-hero">
    <p class="eyebrow">ARSIP PERJALANAN / 02</p>
    <h1>PERJALANAN<span class="accent-dot">.</span>
    </h1>
    <p class="page-intro">Setiap tahap membawa pengalaman dan pelajaran yang berbeda. Halaman ini merangkum perjalanan saya sejauh ini dan arah yang ingin terus saya eksplorasi.</p>
    <div class="page-meta">
        <span>LINIMASA PRIBADI</span>
        <span>MASIH TERUS BERJALAN</span>
    </div>
</section>
<section class="section journey-page-section">
    <div class="section-heading">
        <p class="eyebrow">GARIS WAKTU</p>
        <h2>Perjalanan yang<br>
            <span class="serif-italic">masih berlangsung.</span>
        </h2>
    </div>
    <div class="timeline timeline-large">
        <?php foreach ($steps as $step): ?>
        <article class="timeline-item">
            <span class="timeline-index">
                <?= htmlspecialchars($step[0]) ?>
            </span>
            <span class="timeline-period">TAHAP <?= htmlspecialchars($step[0]) ?>
            </span>
            <div>
                <h3>
                    <?= htmlspecialchars($step[1]) ?>
                </h3>
                <p>
                    <?= htmlspecialchars($step[2]) ?>
                </p>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="section lesson-section">
    <div class="lesson-panel">
        <p class="eyebrow">YANG SAYA PELAJARI</p>
        <h2>Perjalanan bukan hanya soal pencapaian.</h2>
        <p>Pengalaman mengajarkan saya untuk lebih mengenal kemampuan diri, menerima bahwa tidak semua rencana berjalan sesuai harapan, dan tetap bertanggung jawab atas langkah berikutnya.</p>
    </div>
</section>
<?php require __DIR__ . "/includes/footer.php"; ?>
