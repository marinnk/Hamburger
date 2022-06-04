<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="c-grid"> 
        <header class="l-header">
            <div class="p-header">
                <h1 class="c-header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a></h1>
                <?php get_search_form(); ?>
                <button type="button" class="c-button--menu c-button--headermenu">Menu</button>
            </div>
        </header>