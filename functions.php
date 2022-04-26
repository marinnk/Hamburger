<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );//アイキャッチ画像

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    //style.cssの読み込み
    function hamburger_script() {
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' ); //スタイル記述用
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' ); //テーマに必要なコード記述用
        wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/script.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );