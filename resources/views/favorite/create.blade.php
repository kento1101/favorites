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
                    <div class="heading-wrap">

                        <h1>Favorite 新規作成</h1>
                    </div>
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                            タイトル：
                            <input name="title" placeholder="タイトルの入力欄"/>
                        </div>
                        <div>
                            パッシブスキル：
                            <textarea name="content" placeholder="内容の入力"></textarea>
                        </div>

                        <div>
                            属性：
                            <select name="type">
                                <option value="知">知</option>
                                <option value="力">力</option>
                                <option value="速">速</option>
                                <option value="技">技</option>
                                <option value="体">体</option>
                            </select>
                        </div>

                        <div>
                            種別：
                            <select name="group">
                                <option value="フェス限">フェス限</option>
                                <option value="通常ガシャ産">通常ガシャ産</option>
                                <option value="伝説降臨">伝説降臨</option>
                                <option value="イベント産">イベント産</option>
                            </select>
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
                </div>
            </div>
        </div>
        
    </body>
</html>