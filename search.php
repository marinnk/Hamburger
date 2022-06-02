<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
<div class="c-mainvisual c-mainvisual--archive p-group--mainvisual">
    <div class="c-transparent-background--archive"></div>
    <h2 class="c-title--mainvisual c-title--mainvisual--archive">Search:</h2>
    <p class="c-text--mainvisual"><?php echo the_search_query() ?></p>
</div>
<div class="p-main">
    <article>
        <h2 class="c-title--heading">「<?php echo the_search_query() ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件</h2>
    </article>

<!-- 検索結果の記事表示 -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article>
    <figure class="p-menu">
        <p class="p-menu__photo" ><img src="<?php echo esc_url(get_theme_file_uri('img/hamburger3.jpg')); ?>" alt="ハンバーガーの写真"></p>
        <figcaption class="p-menu__text-box">
            <h3 class="p-menu__title"><?php the_title(); ?></h3>
            <h4 class="p-menu__heading">小見出しが入ります</h4>
            <p class="p-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <a href="<?php the_permalink(); ?>" class="c-button--detail">詳しく見る</a>
        </figcaption>
    </figure>
</article>      
<?php endwhile; else: ?>
<p class="p-search__text">検索結果は見つかりませんでした。</p>
<?php endif; ?>  

<!-- ページネーション -->
<?php if ( $wp_query -> max_num_pages >= 1 ) : //ページ数が1を超える場合に処理 ?>
<?php wp_pagenavi(); ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>