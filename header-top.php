<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="日南市の健康生活はエクセルフィットネスセンターで！ダイエットや健康な体づくりのご相談もお待ちしております。" />
    <title>
    <?php 
    if( !is_home() ){
        wp_title(' | ', true, 'right');
    } 
    bloginfo('name'); 
    ?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125058136-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-125058136-2');
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- header -->
    <nav class="navbar shadow">
        <div class="header">
            <div class="mobile-nav">
                <div class="logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_excel.png" alt="エクセルフィットネスセンター"></a>
                </div>
                <div class="nav_toggle">
                    <div class="btn-container" onclick="navBtn(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
            <div class="header-menu" id="topNav">
                <div class="header-inner">
                    <?php
                $args = array(
                'menu' => 'header-menu', //管理画面で作成したメニューの名前
                'container' => false, //<ul>タグを囲んでいる<div>タグを削除
                'menu_class' => 'menu-btns'//ulタグのクラス名
                );
                wp_nav_menu($args);
                ?>
                </div>
            </div>
        </div>
    </nav>