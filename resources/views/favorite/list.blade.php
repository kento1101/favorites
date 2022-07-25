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
                    {{-- <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                    </a> --}}
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
                    <div class="heading-wrap">
                        <h1 class="heading">キャラクター名鑑</h1>

                        <div class="buttonBox">
                            <a class="button tab-active" id="tab1_button">
                                すべて
                            </a>
                            <a class="button" id="tab2_button">
                                フェス限
                            </a>
                            <a class="button" id="tab3_button">
                                伝説降臨
                            </a>
                            <a class="button" id="tab4_button">
                                通常ガシャ産
                            </a>
                            <a class="button" id="tab5_button">
                                イベント産
                            </a>
                        </div>
                    </div>
                    {{-- ↓「すべて」タブのコンテンツ↓ --}}
                    <table class="favorite-index-table" id="tab1">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>画像</th>
                            <th>名前</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                        @foreach ($favorites as $favorite)
                        <tr>
                            <td>{{$favorite->id}}</td>
                            <td>{{$favorite->updated_at}}</td>
                            <td><a href="/{{$favorite->id}}"><img src="{{ Storage::url($favorite->icon) }}" class="icon"></a></td>
                            <td><a href="/{{$favorite->id}}">{{$favorite->title}}</a></td>
                            <td>
                                <a href="/edit/{{$favorite->id}}">編集</a>
                            </td>
                            <td>
                                <form action="/delete/{{$favorite->id}}" method="POST">
                                {{ csrf_field() }}
                                <input type="submit" value="削除">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- ↑「すべて」タブのコンテンツ↑矢印 --}}

                    {{-- ↓「フェス限」タブのコンテンツ↓ --}}
                    <table class="favorite-index-table" id="tab2">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>画像</th>
                            <th>名前</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                        <tr>
                            <td><p>タブコンテンツ2</p></td>
                        </tr>                        
                    </table>
                    {{-- ↑「フェス限」タブのコンテンツ↑矢印 --}}

                    {{-- ↓「伝説降臨」タブのコンテンツ↓ --}}
                    <table class="favorite-index-table" id="tab3">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>画像</th>
                            <th>名前</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                        <tr>
                            <td><p>タブコンテンツ3</p></td>
                        </tr>                        
                    </table>
                    {{-- ↑「伝説降臨」タブのコンテンツ↑矢印 --}}

                    {{-- ↓「通常ガシャ産」タブのコンテンツ↓ --}}
                    <table class="favorite-index-table" id="tab4">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>画像</th>
                            <th>名前</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                        <tr>
                            <td><p>タブコンテンツ4</p></td>
                        </tr>                        
                    </table>
                    {{-- ↑「通常ガシャ産」タブのコンテンツ↑矢印 --}}

                    {{-- ↓「イベント産」タブのコンテンツ↓ --}}
                    <table class="favorite-index-table" id="tab5">
                        <tr>
                            <th>ID</th>
                            <th>日付</th>
                            <th>画像</th>
                            <th>名前</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                        <tr>
                            <td><p>タブコンテンツ5</p></td>
                        </tr>                        
                    </table>
                    {{-- ↑「イベント産」タブのコンテンツ↑矢印 --}}
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
