<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハンバーガーサイト</title>
    <!-- fontawesome読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <div class="c-grid"> 
        <header class="l-header">
            <div class="p-header">
                <h1 class="c-header__logo">Hamburger</h1>
                <form class="p-search">
                    <div class="p-search-form">
                        <input type="search" name="search" class="c-input-box">
                    </div>
                    <button type="submit" class="c-button c-button--search">検索</button>
                </form>
                <button type="button" class="c-button--menu c-button--headermenu">Menu</button>
            </div>
        </header>
        <aside class="l-sidebar p-sidebar">
            <button class="p-close c-button--close"><span class="p-close__line"></span></button>
            <button type="button" class="c-button--menu c-button--sidemenu">Menu</button>
            <nav class="p-nav">
                    <p class="p-nav__menu"><a href="#">バーガー</a></p>
                    <ul class="p-nav__menu-list">
                            <li class="p-nav__menu-item"><a href="#">ハンバーガー</a></li>
                            <li class="p-nav__menu-item"><a href="#">チーズバーガー</a></li>
                            <li class="p-nav__menu-item"><a href="#">テリヤキバーガー</a></li>
                            <li class="p-nav__menu-item"><a href="#">アボカドバーガー</a></li>
                            <li class="p-nav__menu-item"><a href="#">フィッシュバーガー</a></li>
                            <li class="p-nav__menu-item"><a href="#">ベーコンバーガー</a></li>
                            <li><a href="#">チキンバーガー</a></li>
                    </ul>
                    <p class="p-nav__menu"><a href="#">サイド</a></p>
                    <ul class="p-nav__menu-list">
                            <li class="p-nav__menu-item"><a href="#">ポテト</a></li>
                            <li class="p-nav__menu-item"><a href="#">サラダ</a></li>
                            <li class="p-nav__menu-item"><a href="#">ナゲット</a></li>
                            <li><a href="#">コーン</a></li>
                    </ul>
                    <p class="p-nav__menu"><a href="#">ドリンク</a></p>
                    <ul class="p-nav__menu-list">
                            <li class="p-nav__menu-item"><a href="#">コーラ</a></li>
                            <li class="p-nav__menu-item"><a href="#">ファンタ</a></li>
                            <li class="p-nav__menu-item"><a href="#">オレンジ</a></li>
                            <li class="p-nav__menu-item"><a href="#">アップル</a></li>
                            <li class="p-nav__menu-item"><a href="#">紅茶（Ice/Hot）</a></li>
                            <li><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
            </nav>
            <div class="c-transparent-background--nav"></div><!-- 透明背景 -->
        </aside>
        <main class="l-main">
            <div class="c-mainvisual c-mainvisual--archive p-group--mainvisual">
                <div class="c-transparent-background--archive"></div>
                <h2 class="c-title--mainvisual c-title--mainvisual--archive">Search:</h2>
                <p class="c-text--mainvisual">チーズバーガー</p>
            </div>
            <div class="p-main">
                <article>
                    <h2 class="c-title--heading">小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </article>
                <article>
                    <figure class="p-menu">
                        <p class="p-menu__photo" ><img src="img/hamburger3.jpg" alt="ハンバーガーの写真"></p>
                        <figcaption class="p-menu__text-box">
                            <h3 class="p-menu__title">チーズバーガー</h3>
                            <h4 class="p-menu__heading">小見出しが入ります</h4>
                            <p class="p-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--detail">詳しく見る</button>
                        </figcaption>
                    </figure>
                    <figure class="p-menu">
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
                    </figure>
                    <figure class="p-menu">
                        <p class="p-menu__photo"><img src="img/hamburger3.jpg" alt="ハンバーガーの写真"></p>
                        <figcaption class="p-menu__text-box">
                            <h3 class="p-menu__title">スペシャルチーズバーガー</h3>
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
                    </figure>
                </article>  
                <ul class="p-pagination">
                    <li class="p-pagination__page-number">page 1/10</li>
                    <li class="p-pagination__mark--front"><a href="#"><img class="p-pagination__mark p-pagination__mark--tab" src="img/before.svg" alt="前へ"></a></li>
                    <li><a href="#" class="p-pagination__button--front">前へ</a></li>
                    <li><a href="#" class="p-pagination__number">1</a></li>
                    <li><a href="#" class="p-pagination__number">2</a></li>
                    <li><a href="#" class="p-pagination__number">3</a></li>
                    <li><a href="#" class="p-pagination__number">4</a></li>
                    <li><a href="#" class="p-pagination__number">5</a></li>
                    <li><a href="#" class="p-pagination__number">6</a></li>
                    <li><a href="#" class="p-pagination__number">7</a></li>
                    <li><a href="#" class="p-pagination__number">8</a></li>
                    <li><a href="#" class="p-pagination__number">9</a></li>
                    <li><a href="#" class="p-pagination__button--next">次へ</a></li>
                    <li class="p-pagination__mark--next"><a href="#"><img class="p-pagination__mark p-pagination__mark--tab" src="img/next.svg" alt="次へ"></a></li>
                </ul>
            </div>
        </main>
        <footer class="l-footer">
            <div class="p-footer">
                <ul class="p-footer__list">
                    <li class="p-footer__border"><a href="#" class="p-footer__list-item">ショップ情報</a></li>
                    <li><a href="#" class="p-footer__list-item">ヒストリー</a></li>
                </ul>
                <p class="p-footer__copyright">Copyright: RaiseTech</p>
            </div>
        </footer>
    </div> 
    <?php wp_footer(); ?>
</body>
</html>