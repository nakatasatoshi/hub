<body>
    <div id="setting" class="big-bg">
        <header class="page-header wrapper">
            <nav>
                <ul class="main-nav">
                    <li><a href="*">トップページ</a></li>
                    <li><a href="*">投稿</a></li>
                    <li><a href="*">DM</a></li>
                    <li><a href="*">履歴</a></li>
                    <li><a href="http://localhost/Hub/setting/">設定</a></li>
                    <li><a href="*">ログアウト</a></li>
                </ul>
            </nav>
        </header>
    </div>
    
    <h2 class="setting-title">Setting</h2>
    <form method="post" action="http://localhost/Hub/add/">
        <div class="setting-contents wrapper">
            <article>
                <div>
                    <label for="income">収入</label>
                    <input type="text" id="income" name="income">
                </div>

                <div>
                    <label for="food_cost">食費</label>
                    <input type="text" id="food_cost" name="food_cost">
                </div>

                <div>
                    <label for="utility_cost">光熱費</label>
                    <input type="text" id="utility_cost" name="utility_cost">
                </div>

                <div>
                    <label for="rent">家賃</label>
                    <input type="text" id="rent" name="rent">
                </div>

                <div>
                    <label for="etc">その他</label>
                    <input type="text" id="etc" name="etc">
                </div>
            </article>

            <aside>
                <div>
                    <label for="budget">予算</label>
                    <input type="text" id="budget" name="budget">
                </div>

                <div>
                    <label for="name">ニックネーム</label>
                    <input type="text" id="name" name="name">
                </div>

                <div>
                    <label for="age">年齢</label>
                    <input type="text" id="age" name="age">
                </div>

                <div>
                    <label for="from">地域</label>
                    <input type="text" id="from" name="from">
                </div>

                <div>
                    <label for="job">職業</label>
                    <input type="text" id="job" name="job">
                </div>

                <div>
                    <label for="key">パスワード変更</label>
                    <input type="text" id="key" name="key">
                </div>
            </aside>
        </div><!-- /.setting-contents wrapper -->
        <input type="submit" class="button" value="更新">
    </form>
</body>

