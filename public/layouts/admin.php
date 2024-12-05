<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta property="og:image" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index" />
    <meta name="description" content="<?php echo $deskripsi; ?>" />
    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="<?php echo $deskripsi; ?>" />
    <meta property="og:image" content="/tatib/public/images/logo.svg" />
    <meta name="twitter:title" content="<?php echo $judul; ?>" />
    <meta name="twitter:description" content="<?php echo $deskripsi; ?>" />
    <meta name="twitter:image" content="/tatib/public/images/logo.svg" />
    <title><?php echo $judul; ?></title>
    <link rel="icon" href="/tatib/public/images/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/tatib/public/styles/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-auto overflow-x-hidden bg-amber-50/75">
    <?php
    if (!$halaman_khusus) include 'public/sidebar/admin.php';
    ?>
    <script src="scripts/hide_pass.js" async defer></script>
</body>

</html>