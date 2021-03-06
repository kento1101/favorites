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

                <div class="sidebar_item"><a href="/check"><p>所持率チェック</p></a></div>
                <div class="sidebar_item"><p>???</p></div>
                <div class="sidebar_menu"><p>管理者メニュー</p></div>
                <div class="sidebar_item"><a href="/index"><p>一覧</p></a></div>
                <div class="sidebar_item"><a href="/new"><p>新規作成</p></a></div>
            
            </div>

            <div class="main-contents">
                <div class="main-contents-inner">
                    <h1 class="heading">TOP</h1>

                    <div class="home-main-wrap">
                        @foreach ($favorites as $favorite)
                            <div class="home-main">
                                <img src="{{ Storage::url($favorite->image) }}" class="home-main-image">
                            </div>
                        @endforeach
                    </div>

                    <h2>新着キャラクター</h2>
                </div>
            </div>
        </div>
        </body>
</html>


<script src="{{ mix('js/sample.js') }}"></script>