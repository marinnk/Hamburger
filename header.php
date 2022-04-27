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