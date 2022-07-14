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

                <div><p>メニュー</p></div>
                <div><p>お知らせ管理</p></div>
                <div><p>お知らせ一覧</p></div>
                <div><a href="/new"><p>新規作成</p></a></div>

            </div>

            <div class="main-contents">
                <h1 class="heading">Favorite 一覧</h1>
            
                <table>
                    <tr>

                        <th>記事番号</th>
                        <th>日付</th>
                        <th><th>
                        <th>タイトル</th>
                        <th>内容</th>
                    </tr>
                    @foreach ($favorites as $favorite)
                    <tr>
                        <td>{{$favorite->id}}</td>
                        <td>{{$favorite->updated_at}}</td>
                        <td><img src="{{ Storage::url($favorite->icon) }}" class="icon"></td>
                        <td><a href="/{{$favorite->id}}">{{$favorite->title}}</a></td>
                        <td>{{$favorite->content}}</td>
                        <td>
                            <form action="/delete/{{$favorite->id}}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" value="削除">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        </body>
</html>