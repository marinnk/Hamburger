<?php get_header( ); ?>
<?php get_sidebar( ); ?>   
        <main class="l-main">
            <div class="c-mainvisual c-mainvisual--archive p-group--mainvisual">
                <div class="c-transparent-background--archive"></div>
                <h2 class="c-title--mainvisual c-title--mainvisual--archive">Menu:</h2>
                <?php the_category(); ?>
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
                            <h4 class="p-menu__heading">小見出しが入ります</h4>
                            <p class="p-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
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
                <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
                <?php
                    $args = array (
                        'prev_text' => '« 前へ',
                        'next_text' => '次へ »',
                        'show_all' => false,
                        'mid_size' => 3,
                        'type' => 'list',
                    );
                    $pagination = get_the_posts_pagination( $args );
                    $pagination = preg_replace( "/<h2[^>]*?>.*?<\/h2>/i", '', $pagination);
                    $pagination = preg_replace( array("/<div[^>]*?>/i", "/<\/div>/i") , array('', ''), $pagination);
                    echo $pagination;
                ?>

                <!-- <ul class="p-pagination">
                    <li class="p-pagination__page-number">page 1/10</li>
                    <li class="p-pagination__mark--front"><a href="#"><img class="p-pagination__mark p-pagination__mark--tab" src="<?php echo esc_url(get_theme_file_uri('img/before.svg')); ?>" alt="前へ"></a></li>
                    <li><a href="#" class="p-pagination__button--front"><?php next_posts_link('前へ') ?></a></li>
                    <li><a href="#" class="p-pagination__number">1</a></li>
                    <li><a href="#" class="p-pagination__number">2</a></li>
                    <li><a href="#" class="p-pagination__number">3</a></li>
                    <li><a href="#" class="p-pagination__number">4</a></li>
                    <li><a href="#" class="p-pagination__number">5</a></li>
                    <li><a href="#" class="p-pagination__number">6</a></li>
                    <li><a href="#" class="p-pagination__number">7</a></li>
                    <li><a href="#" class="p-pagination__number">8</a></li>
                    <li><a href="#" class="p-pagination__number">9</a></li> -->
                    <!-- <li><a href="#" class="p-pagination__button--next"><?php previous_posts_link('次へ'); ?></a></li>
                    <li class="p-pagination__mark--next"><a href="#"><img class="p-pagination__mark p-pagination__mark--tab" src="<?php echo esc_url(get_theme_file_uri('img/next.svg')); ?>" alt="次へ"></a></li> -->
                </ul> -->
                <?php endif; ?>
            </div>
        </main>
        <?php get_footer(); ?>