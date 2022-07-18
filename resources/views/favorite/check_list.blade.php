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
            </nav>
        </header>

        <div class="contents-wrapper">
            <div class="sidebar">

                <div><a href="/check"><p>チェック</p></a></div>
                <div><p>???</p></div>
                <div class="sidebar_menu"><p>管理者メニュー</p></div>
                <div><a href="/"><p>一覧</p></a></div>
                <div><a href="/new"><p>新規作成</p></a></div>
            
            </div>

            <div class="main-contents">
                <h1 class="heading">Favorite 一覧</h1>
            
            
                    @foreach ($favorites as $favorite)
                    <tr>
                    
                        <td><a href="/{{$favorite->id}}"><img src="{{ Storage::url($favorite->icon) }}" class="icon"></a></td>
                        
                    @endforeach
            </div>
        </div>
        </body>
</html>