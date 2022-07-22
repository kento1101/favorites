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
                <div class="sidebar_item"><a href="/users"><p>ユーザー一覧</p></a></div>
            
            </div>

            <div class="main-contents">
                <h1 class="heading">User 一覧</h1>
            
                <table>
                    <tr>
                        <th>ID</th>
                        <th>日付</th>
                        <th></th>
                        <th>名前</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            {{-- <a href="/edit/{{$favorite->id}}">編集</a> --}}
                        </td>
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
        </body>
</html>


<script src="{{ mix('js/sample.js') }}"></script>