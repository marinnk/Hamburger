<?php get_header(); ?>
<?php get_sidebar(); ?>

<h2>検索結果</h2>
<p>「<?php echo the_search_query() ?>」の検索結果は<?php echo $wp_query->found_posts; ?>件です。</p>
<!-- 検索結果の記事表示 -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php endwhile; else: ?>
<p>検索結果は見つかりませんでした。</p>
<?php endif; ?>  

<!-- ページネーション -->

<?php get_footer(); ?>