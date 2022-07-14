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

        <h1>Favorite 詳細</h1>
        <table>
            <tr>
                <th>記事番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th>内容</th>
            </tr>
            
            <tr>
                <td>{{$favorite->id}}</td>
                <td>{{$favorite->updated_at}}</td>
                <td>{{$favorite->title}}</td>
                <td>{{$favorite->content}}</td>
            </tr>
            
        </table>
    </body>
</html>