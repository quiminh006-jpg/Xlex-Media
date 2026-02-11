<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>

    <link rel='stylesheet' id='global-styles-inline-css' href='<?= get_template_directory_uri() ?>/assets/css/global-styles.css?ver=1.0.0' type='text/css'/>
    <link rel='stylesheet' id='TOROFLIX_Theme-css' href='<?= get_template_directory_uri() ?>/assets//css/toroflix-public.css?ver=1.0.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='tp_style_css' href='<?= get_template_directory_uri() ?>/assets/css/tp_style.css?ver=1.0.0' type='text/css' media='all'/>

    <script type="text/javascript"
            src='<?= get_template_directory_uri() ?>/assets/js/jquery.js?ver=3.0.0'
            id='funciones_public_jquery-js'></script>
</head>
<body id="Tf-Wp" class="home blog BdGradient">
<div class="Tf-Wp">
<?php include_once THEME_URL.'/templates/header.php' ?>