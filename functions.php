<?php 
    //cssとjQueryの読み込み
    function my_scripts() {
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/script.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );

    function load_google_cdn() {
        if ( !is_admin() ){
          //jQueryを登録解除
          wp_deregister_script( 'jquery' );
          
          //Google CDNのjQueryを出力
          wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), NULL, true );
        }
      }
      add_action( 'init', 'load_google_cdn' );
?>