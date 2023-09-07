<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Labs
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <header>
            <section class="search">Pesquisa</section>
            <section class="top-bar">
                <div class="brand"> Logo</div>

                <div id="second-column">
                    <div class="acount">Conta</div>
                    <nave class="main-menu">Menu</nave>
                </div>

            </section>
        </header>

