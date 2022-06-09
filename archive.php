<?php get_header( ); ?>
<?php get_sidebar( ); ?>   
        <main class="l-main">
            <div class="c-mainvisual c-mainvisual--archive p-group--mainvisual">
                <div class="c-transparent-background--archive"></div>
                <h2 class="c-title--mainvisual c-title--mainvisual--archive">Menu:</h2>
                <p><?php single_cat_title(); ?></p>
            </div>
            <div class="p-main">
                <article>
                    <h2 class="c-title--heading">小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </article>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <figure class="p-menu">
                        <p class="p-menu__photo" ><img src="<?php echo esc_url(get_theme_file_uri('img/hamburger3.jpg')); ?>" alt="ハンバーガーの写真"></p>
                        <figcaption class="p-menu__text-box">
                            <h3 class="p-menu__title"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="c-button--detail">詳しく見る</a>
                        </figcaption>
                    </figure>
                    <!-- <figure class="p-menu">
                        <p class="p-menu__photo"><img src="img/hamburger3.jpg" alt="ハンバーガーの写真"></p>
                        <figcaption class="p-menu__text-box">
                            <h3 class="p-menu__title">ダブルチーズバーガー</h3>
                            <h4 class="p-menu__heading">小見出しが入ります</h4>
                            <p class="p-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--detail">詳しく見る</button>
                        </figcaption>
                    </figure>
                    <figure class="p-menu">
                        <p class="p-menu__photo"><img src="img/hamburger3.jpg" alt="ハンバーガーの写真"></p>
                        <figcaption class="p-menu__text-box">
                            <h3 class="p-menu__title">スペシャルチーズバーガー</h3>
                            <h4 class="p-menu__heading">小見出しが入ります</h4>
                            <p class="p-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--detail">詳しく見る</button>
                        </figcaption>
                    </figure> -->
                </article>  
                <?php endwhile; endif; ?>
               
                <?php wp_pagenavi(); ?>
            </div>
        </main>
        <?php get_footer(); ?>