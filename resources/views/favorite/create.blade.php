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

        <h1>Favorite 新規作成</h1>
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                タイトル：
                <input name="title" placeholder="タイトルの入力欄"/>
            </div>
            <div>
                内容：
                <textarea name="content" placeholder="内容の入力"></textarea>
            </div>
            <div>
                メイン画像：
                <input id="image" type="file" name="image">
            </div>
            <div>
                アイコン：
                <input id="icon" type="file" name="icon">
            </div>
            <div class="btn-wrap">
                <button  class="btn">保存</button>
            </div>    
        </form>
        
    </body>
</html>