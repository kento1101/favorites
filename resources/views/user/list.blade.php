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
                <div class="sidebar_item"><a href="/index"><p>一覧</p></a></div>
                <div class="sidebar_item"><a href="/new"><p>新規作成</p></a></div>
                <div class="sidebar_item"><a href="/users"><p>ユーザー一覧</p></a></div>

            
            </div>

            <div class="main-contents">
                <div class="main-contents-inner">
                    <div class="heading-wrap">
                        <h1 class="heading">User 一覧</h1>
                    </div>
                
                    <table class="favorite-index-table">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>名前</th>
                            <th>削除</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                {{-- <form action="/delete/{{$favorite->id}}" method="POST">
                                {{ csrf_field() }}
                                <input type="submit" value="削除">
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>


        </div>

        <div class="image-row">
            <ul class="slideshow">
                <li class="slide slide-01"></li>
                <li class="slide slide-02"></li>
                <li class="slide slide-03"></li>
                <li class="slide slide-04"></li>
                <li class="slide slide-05"></li>
            </ul>
            <ul class="slideshow">
                <li class="slide slide-01"></li>
                <li class="slide slide-02"></li>
                <li class="slide slide-03"></li>
                <li class="slide slide-04"></li>
                <li class="slide slide-05"></li>
            </ul>
            <ul class="slideshow">
                <li class="slide slide-01"></li>
                <li class="slide slide-02"></li>
                <li class="slide slide-03"></li>
                <li class="slide slide-04"></li>
                <li class="slide slide-05"></li>
            </ul>
        </div> 



        </body>
</html>


<script src="{{ mix('js/sample.js') }}"></script>