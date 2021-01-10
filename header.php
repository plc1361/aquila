<?php
/*
*Header template.
*
*@package Aquila
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8"><!-- this parameter can be change by WordPress with bloginfo('charset'); -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class('esi_class'); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div id="page" class="site">
        <header id="masthead" class="sit-header" role="banner">
            <?php get_template_part('/template-parts/header/nav') ?>
            <?php get_template_part('/template-parts/content', 'post') ?>

        </header>
        <div id="content" class="sit-content">