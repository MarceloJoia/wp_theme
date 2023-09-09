<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Labs
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tudo que for enfileirado será colocado na tag [wp_head()] do Theme -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <header>

            <!-- Search Inicio -->
            <section class="search">
                <div class="container">
                    Pesquisa
                </div>
            </section>
            <!-- Search FIM -->

            <section class="top-bar">

                <div class="container">
                    <div class="row">
                        <div class="brand col-3">
                            Logo
                        </div>
                        <div class="second-column col-9">
                            <div class="acount">Conta</div>
                            <nav class="main-menu"><?php wp_nav_menu(array('fancy_lab_main_menu')); ?></nav>
                        </div>
                    </div>
                </div>

            </section>

        </header>