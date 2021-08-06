<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/index.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php bloginfo('template_url') ?>/js/jquery-3.6.0.min.js"></script>
    <title>profile</title>
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <div class="com_container">
            <div class="logo">Fukujin</div>
            <nav>
                <ul>
                    <li><a href="<?php bloginfo('url');?>/index.php">profile</a></li>
                    <li><a href="#">blogs</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="nav_line"></div>
        <?php wp_head(); ?>
    </header>
