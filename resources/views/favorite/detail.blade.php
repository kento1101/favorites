<!DOCTYPE HTML>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Favorites</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" defer></script>
    </head>
    <body>

        <header>
            <nav class="navbar">
                <ul class="header-menu">
                    <a href="/"><li class="menu-item"><p>ホーム</p></li></a>
                    <a href="/check"><li class="menu-item"><p>所持率チェッカー</p></li></a>
                    <a href="/index"><li class="menu-item"><p>キャラクター名鑑</p></li></a>
                    <a href="/history"><li class="menu-item"><p>フェス限実装日まとめ</p></li></a>
                </ul>
            </nav>
        </header>
        <div class="contents-wrapper">
            <div class="sidebar">
                <div class="sidebar_menu"><p>管理者メニュー</p></div>
                <div class="sidebar_item"><a href="/index"><p>戦士一覧</p></a></div>
                <div class="sidebar_item"><a href="/new"><p>新規作成</p></a></div>
                <div class="sidebar_item"><a href="/users"><p>ユーザー一覧</p></a></div>

            
            </div>
            <div class="main-contents">
                <div class="main-contents-inner">
                    <h1 class="heading">{{$favorite->title}}</h1>

                    <div class="favorite-wrap">
                        <img src="{{ Storage::url($favorite->image) }}" class="image">
                        <div class="favorite-data-section">
                            <p>パッシブスキル</p>
                            <p>リーダースキル</p>
                            <p>アクティブスキル</p>
                            <p>必殺技効果</p>
                            <p>超必殺技効果</p>
                            <p>カテゴリ</p>
                            <p>リンク</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>