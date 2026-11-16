<?php
$pageTitle = $pageTitle ?? "Peter | Ruang Pribadi";
$activePage = $activePage ?? "";
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Website pribadi Peter — cerita, minat, perjalanan, dan pemikiran.">
        <title>
            <?= htmlspecialchars($pageTitle) ?>
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="site-shell">
            <header class="topbar">
                <a class="brand" href="index.php">
                    <span class="brand-mark">P.</span>
                    <span>PETER<span class="brand-muted"> / RUANG PRIBADI</span>
                </span>
            </a>
            <nav class="nav" aria-label="Navigasi utama">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Beranda</a>
                <a class="<?= $activePage === 'journey' ? 'active' : '' ?>" href="journey.php">Perjalanan</a>
                <a class="<?= $activePage === 'thoughts' ? 'active' : '' ?>" href="thoughts.php">Pemikiran</a>
                <a href="index.php#kontak">Kontak</a>
            </nav>
            <a class="nav-cta" href="index.php#tentang">Kenali saya <span>↗</span>
            </a>
        </header>
        <main>
