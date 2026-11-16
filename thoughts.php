<?php
$pageTitle = "Pemikiran | Peter"; $activePage = "thoughts";
require __DIR__ . "/includes/header.php";
$notes = [
["01","Tentang proses","Tidak semua hal harus selesai dengan cepat. Ada kemampuan yang hanya bisa dibangun melalui pengulangan, kesalahan, dan kesabaran.","BELAJAR"],
["02","Tentang pilihan","Setiap pilihan punya konsekuensi. Karena itu, penting untuk memahami alasan di balik keputusan, bukan hanya mengikuti apa yang terlihat menarik.","KEHIDUPAN"],
["03","Tentang kemandirian","Mandiri bukan berarti harus melakukan semuanya sendirian. Mandiri berarti berani bertanggung jawab atas keputusan dan tahu kapan perlu meminta bantuan.","PENGEMBANGAN DIRI"],
["04","Tentang masa depan","Rencana masa depan perlu arah, tetapi juga perlu ruang untuk berubah ketika kita menemukan pengetahuan dan kesempatan baru.","MASA DEPAN"]];
?>
<section class="page-hero">
    <p class="eyebrow">RUANG CATATAN / 01</p>
    <h1>PEMIKIRAN<span class="accent-dot">.</span>
    </h1>
    <p class="page-intro">Catatan, sudut pandang, dan hal-hal yang sedang saya renungkan. Tidak semuanya merupakan kesimpulan; sebagian masih berupa pertanyaan yang sedang saya cari jawabannya.</p>
    <div class="page-meta">
        <span>HALAMAN PEMIKIRAN</span>
        <span>DISESUAIKAN SEIRING WAKTU</span>
    </div>
</section>
<section class="section notes-section">
    <div class="section-heading">
        <p class="eyebrow">KUMPULAN CATATAN</p>
        <h2>Hal yang sedang<br>
            <span class="serif-italic">saya pikirkan.</span>
        </h2>
    </div>
    <div>
        <div class="notes-list">
            <?php foreach ($notes as $note): ?>
            <article class="note-card">
                <span class="note-number">
                    <?= htmlspecialchars($note[0]) ?>
                </span>
                <div class="note-content">
                    <span class="card-tag">
                        <?= htmlspecialchars($note[3]) ?>
                    </span>
                    <h2>
                        <?= htmlspecialchars($note[1]) ?>
                    </h2>
                    <p>
                        <?= htmlspecialchars($note[2]) ?>
                    </p>
                </div>
                <span class="note-mark">✳</span>
            </article>
            <?php endforeach; ?>
        </div>
        <p class="small-note">Catatan ini adalah contoh awal. Silakan ganti dengan tulisan dan pemikiran pribadi yang benar-benar ingin kamu bagikan.</p>
    </div>
</section>
<section class="quote-band">
    <p class="eyebrow">PENGINGAT</p>
    <blockquote>“Berpikir dengan jernih, terbuka pada koreksi, lalu berani mengambil tindakan.”</blockquote>
</section>
<?php require __DIR__ . "/includes/footer.php"; ?>
