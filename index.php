<?php
$pageTitle = "Peter | Beranda"; $activePage = "home";
require __DIR__ . "/includes/header.php";
$interests = [
["01","Perjalanan & Alam","Menjelajahi tempat baru, menikmati suasana alam, dan mencari cerita di setiap perjalanan.","JELAJAH"],
["02","Fotografi & Videografi","Mengabadikan momen, menyusun komposisi, dan bercerita melalui gambar maupun video.","VISUAL"],
["03","Memasak","Mencoba resep, bereksperimen dengan rasa, dan menikmati proses membuat sesuatu dari awal.","KULINER"],
["04","Teknologi & AI","Mempelajari pemrograman, teknologi digital, dan perkembangan kecerdasan buatan.","TEKNOLOGI"]];
?>
<section class="hero">
    <div class="hero-nav-label">PETER<span>®</span>
    </div>
    <div class="hero-center-nav">
        <a href="index.php">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#kontak">Kontak</a>
    </div>
    <span class="theme-switch">
        <span>
        </span>
    </span>
    <div class="hero-portrait">
        <div class="portrait-placeholder">
            <span class="portrait-initial">P.</span>
            <span class="portrait-caption">FOTO PROFIL<br>AKAN DITAMBAHKAN</span>
        </div>
    </div>
    <div class="hero-title-wrap">
        <p class="hero-script">Selamat datang</p>
        <h1>PORTOFOLIO</h1>
    </div>
    <div class="hero-bottom-left">
        <p>RUANG PRIBADI & CERITA PERJALANAN</p>
        <span>Tempat berbagi minat, pengalaman, dan hal yang sedang dipelajari.</span>
    </div>
    <div class="hero-bottom-right">
        <p>HALO, SAYA <strong>PETER</strong>
        </p>
        <a href="#tentang">Kenali saya lebih dekat ↗</a>
    </div>
    <div class="hero-social">
        <a href="#minat">✳</a>
        <a href="journey.php">↗</a>
    </div>
</section>
<section class="intro-strip">
    <p>BUKAN SEKADAR BIODATA — <span>INI ADALAH POTRET SINGKAT TENTANG SAYA.</span>
    </p>
    <span class="strip-symbol">✳</span>
</section>
<section class="section about-section" id="tentang">
    <div class="section-heading">
        <p class="eyebrow">01 / TENTANG SAYA</p>
        <h2>Kenalan<br>lebih dekat<span class="serif-italic">.</span>
        </h2>
    </div>
    <div class="about-content">
        <p class="about-lead">Saya Peter. Seseorang yang senang belajar, mencoba hal baru, dan mencari cara untuk terus berkembang.</p>
        <p class="body-copy">Saat ini saya menjalani kehidupan sebagai mahasiswa. Di luar perkuliahan, saya tertarik mengeksplorasi teknologi, dunia kreatif, alam, dan ide-ide bisnis. Saya menikmati proses memahami sesuatu dari awal, mencoba, lalu memperbaikinya sedikit demi sedikit.</p>
        <p class="body-copy">Website ini saya buat sebagai ruang untuk mengenalkan diri, menyimpan cerita, dan membagikan hal-hal yang sedang saya pikirkan maupun kerjakan.</p>
        <div class="about-facts">
            <div>
                <span class="fact-label">NAMA</span>
                <strong>Peter</strong>
            </div>
            <div>
                <span class="fact-label">KEGIATAN</span>
                <strong>Mahasiswa</strong>
            </div>
            <div>
                <span class="fact-label">MINAT</span>
                <strong>Teknologi & kreativitas</strong>
            </div>
        </div>
    </div>
</section>
<section class="section interests-section" id="minat">
    <div class="section-heading heading-row">
        <div>
            <p class="eyebrow">02 / HAL YANG SAYA SUKAI</p>
            <h2>Minat dan<br>
                <span class="serif-italic">ketertarikan.</span>
            </h2>
        </div>
        <p class="heading-note">Beberapa hal yang menarik perhatian saya dan ingin terus saya kembangkan.</p>
    </div>
    <div class="interest-grid">
        <?php foreach ($interests as $item): ?>
        <article class="interest-card">
            <div class="card-top">
                <span>
                    <?= htmlspecialchars($item[0]) ?>
                </span>
                <span class="card-tag">
                    <?= htmlspecialchars($item[3]) ?>
                </span>
            </div>
            <div class="interest-icon">
                <?= $item[0] === "01" ? "◒" : ($item[0] === "02" ? "▣" : ($item[0] === "03" ? "⌁" : "⌘")) ?>
            </div>
            <h3>
                <?= htmlspecialchars($item[1]) ?>
            </h3>
            <p>
                <?= htmlspecialchars($item[2]) ?>
            </p>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="section now-section">
    <div class="section-heading">
        <p class="eyebrow">03 / SAAT INI</p>
        <h2>Yang sedang<br>
            <span class="serif-italic">saya pelajari.</span>
        </h2>
    </div>
    <div class="now-grid">
        <article>
            <span>01</span>
            <h3>Membangun proyek digital</h3>
            <p>Belajar membuat website dan memahami bagaimana sebuah produk digital dirancang.</p>
        </article>
        <article>
            <span>02</span>
            <h3>Mengembangkan ide usaha</h3>
            <p>Mengamati kebutuhan sekitar dan mencari peluang yang masuk akal untuk dijalankan.</p>
        </article>
        <article>
            <span>03</span>
            <h3>Mengasah kreativitas</h3>
            <p>Belajar menyampaikan cerita dan gagasan melalui visual, tulisan, maupun karya.</p>
        </article>
    </div>
</section>
<section class="quote-band">
    <p class="eyebrow">CATATAN KECIL</p>
    <blockquote>“Tidak harus selalu menjadi yang paling cepat. Yang penting tetap bergerak, terus belajar, dan tahu ke mana ingin melangkah.”</blockquote>
    <a href="thoughts.php" class="quote-link">Baca pemikiran lainnya ↗</a>
</section>
<section class="section contact-section" id="kontak">
    <p class="eyebrow">04 / HUBUNGI SAYA</p>
    <h2>Ada hal yang ingin<br>dibicarakan<span class="serif-italic">?</span>
    </h2>
    <p class="contact-copy">Terbuka untuk bertukar ide, berbagi pengalaman, atau membicarakan kemungkinan kolaborasi.</p>
    <a class="contact-email" href="mailto:hello@example.com">peterhoreb2709@gmail.com <span>↗</span>
    </a>
    
</section>
<?php require __DIR__ . "/includes/footer.php"; ?>
