<?php get_header(); ?>
<?php get_sidebar(); ?>
                <main class="l-main">
                <?php
                    if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                        while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                            the_post();
                ?>
                        <div class="c-mainvisual c-mainvisual--single">
                            <h2 class="c-title--mainvisual c-title--single"><?php the_title(); ?></h2>
                        </div>
                    <div class="p-main">
                        <section>
                            <article>
                                <h2 class="c-title--heading"><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </article>
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_title(); ?></h4>
                            <h5><?php the_title(); ?></h5>
                            <h6><?php the_title(); ?></h6>
                        </section>
                        <div class="p-quote">
                            <p class="p-quote__text">引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                            <p class="p-quote__source">出典元：<a href="#">○○○○○○○○</a></p>
                        </div>
                        <div class="p-gallery">
                            <p><img src="img/hamburger.jpg" alt="ハンバーガーの写真"></p>
                            <div class="p-item">
                                <p class="p-item__photo"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-item__text"><?php the_content(); ?></p>
                            </div>
                            <div class="p-item">
                                <p class="p-item__photo"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-item__text"><?php the_content(); ?></p>
                            </div>
                            <p class="p-gallery__photo"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                            <div class="p-gallery__photo-list">
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                                <p class="p-gallery__photo-item"><img src="img/hamburger2.jpg" alt="ハンバーガーの写真"></p>
                            </div>
                        </div>
                        <div class="p-list">
                            <ol class="p-list_type_decimal">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ol>
                            <ol class="p-list_type_decimal">
                                <li >リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ol>
                            <ol class="p-list_type_decimal">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ol>
                        </div>
                        <div class="p-list_type_none">
                            <ul>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ul>
                            <ul>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ul>
                            <ul>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ul>
                        </div>
                        <pre class="p-main__code">
                            <code>
            &lt;html&gt;
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
            &lt;/html&gt;
                            </code>
                        </pre>
                        <table class="p-table">
                            <tr>
                                <th class="p-table__cell p-table__cell--heading">テーブル</th>
                                <td class="p-table__cell p-table__cell--content">テーブル</td>
                            </tr>
                            <tr>
                                <th class="p-table__cell p-table__cell--heading">テーブル</th>
                                <td class="p-table__cell p-table__cell--content">テーブル</td>
                            </tr>
                            <tr>
                                <th class="p-table__cell p-table__cell--heading">テーブル</th>
                                <td class="p-table__cell p-table__cell--content">テーブル</td>
                            </tr>
                            <tr>
                                <th class="p-table__cell p-table__cell--heading">テーブル</th>
                                <td class="p-table__cell p-table__cell--content">テーブル</td>
                            </tr>
                        </table>
                        <button class="c-button c-button--main">ボタン</button>
                        <p class="p-main__text--page">boldboldboldboldboldboldboldboldbold</p>
                    </div>
                    endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
                        else : //6.投稿データがなければ
                            ?><p>表示する記事がありません</p><?php //7.ない時の処理
                        endif; ?> 
                ?>  
                </main>
                <?php get_footer(); ?>