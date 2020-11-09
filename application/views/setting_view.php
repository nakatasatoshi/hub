<body>
    <div id="setting" class="font-weight-bold border-box">
        <header class="*">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="*">トップページ</a></li>
                <li class="nav-item"><a class="nav-link" href="*">投稿</a></li>
                <li class="nav-item"><a class="nav-link" href="*">DM</a></li>
                <li class="nav-item"><a class="nav-link" href="*">履歴</a></li>
                <li class="nav-item"><a class="nav-link active" href="http://localhost/Hub/setting/">設定</a></li>
                <li class="nav-item"><a class="nav-link" href="*">ログアウト</a></li>
            </ul>
        </header>
    
        <h1 class="text-center">SETTING</h2>
        <form method="post" action="http://localhost/Hub/add/">
            <div class="form-group row">
                <article class="form-group col-md-6">
                    <div class="col-md-auto">
                        <label for="income" class="">収入</label>
                        <input type="text" class="form-control " id="income" name="income">
                    </div>

                    <div class="col-md-auto">
                        <label for="food_cost">食費</label>
                        <input type="text" class="form-control" id="food_cost" name="food_cost">
                    </div>

                    <div class="col-md-auto">
                        <label for="utility_cost">光熱費</label>
                        <input type="text" class="form-control" id="utility_cost" name="utility_cost">
                    </div>

                    <div class="col-md-auto">
                        <label for="rent">家賃</label>
                        <input type="text" class="form-control" id="rent" name="rent">
                    </div>

                    <div class="col-md-auto">
                        <label for="etc">その他</label>
                        <input type="text" class="form-control" id="etc" name="etc">
                    </div>
                </article>

                <aside class="form-group col-md-6">
                    <div class="col-md-auto">
                        <label for="budget">予算</label>
                        <input type="text" class="form-control" id="budget" name="budget">
                    </div>

                    <div class="col-md-auto">
                        <label for="name">ニックネーム</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="col-md-auto">
                        <label for="age">年齢</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>

                    <div class="col-md-auto">
                        <label for="from">地域</label>
                        <input type="text" class="form-control" id="from" name="from">
                    </div>

                    <div class="col-md-auto">
                        <label for="job">職業</label>
                        <input type="text" class="form-control" id="job" name="job">
                    </div>

                    <div class="col-md-auto">
                        <label for="key">パスワード変更</label>
                        <input type="text" class="form-control" id="key" name="key">
                    </div>
                </aside>
            </div>

            <div class="form-row text-center">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="更新">
                </div>
            </div>
        </form>
    </div>
</body>

