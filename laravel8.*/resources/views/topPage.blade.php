<?php

use Carbon\Carbon;

$date = new Carbon();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TopPage</title>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/humbuger.css') }}">
</head>
<body style="background-color: antiquewhite;">
    <header>
        <div id="header-block">
            <div id="header-left-bar">
                <div class="icon">
                    <img src="images/bear.jpeg" alt="bear-icone" style="width:70%;height:100%;">
                </div>
                <p>今月の家計簿  <?= $date->year . '年 ' . $date->month ; ?>月</p>
            </div>
            <div id="header-right-bar">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <p><a href="#">マイページ</a></p>
                    <p><a href="#">設定一覧</a></p>
                    <p><a href="#">Q & A</a></p>
                    <p><a href="#">ログアウト</a></p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h2>
            <a href="/todayBalanceInput" class="btn btn--orange btn--cubic btn--shadow">○本日の入出金を入力する👉</a>
        </h2>

        <section id="assets-block">

            <div id="assets-total">
                <h2>資産総額 : </h2>
                <p></p>
            </div>

            <div id="today-balance">
                <div id="today-balance-block-list">
                    <div class="today-balance-block" style="border-color: red;">
                        <h3><span>本日</span>の収入:</h3>
                        <p></p>
                        <p>前日比:</p>
                    </div>
                    <div class="today-balance-block">
                        <h3><span>本日</span>の支出:</h3>
                        <p></p>
                        <p>前日比:</p>
                    </div>
                    <div class="today-balance-block">
                        <h3><span>本日</span>の収支:</h3>
                        <p></p>
                        <p>前日比:</p>
                    </div>
                </div>
            </div>

            <div id="balance-list">
                <div id="this-weekend-block">
                    <div class="weekend">
                        <h3><span>今週</span>の収入:</h3>
                        <p></p>
                        <p>先週比</p>
                    </div>
                    <div class="weekend">
                        <h3><span>今週</span>の支出:</h3>
                        <p></p>
                        <p>先週比</p>
                    </div>
                </div>
                <div id="this-month-block">
                    <div class="month">
                        <h3><span>今月</span>の収入:</h3>
                        <p></p>
                        <p>先月比</p>
                    </div>
                    <div class="month">
                        <h3><span>今月</span>の支出:</h3>
                        <p></p>
                        <p>先月比</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="user-contents-menu">
            <div id="user-contents-link">
                <p><a href="#">ホーム</a></p>
                <p> | </p>
                <p><a href="#">入出金</a></p>
                <p> | </p>
                <p><a href="#">家計簿</a></p>
                <p> | </p>
                <p><a href="#">口座情報</a></p>
                <p> | </p>
                <p><a href="#">現有資産</a></p>
            </div>
        </section>

    </main>

    <footer>
        <div id="Corporate">
            <h2>Household Management</h2>
            <p>Time is Money</p>
            <p>©️2022 Household Management.</p>
        </div>
        <div id="footer-link-block">
            <div id="guide" class="footer-block">
                <h3>ヘルプ</h3>
                <p><a href="#">About</a></p>
                <p><a href="#">利用規約</a></p>
                <p><a href="#">プライバシーポリシー</a></p>
                <p><a href="#">ガイドライン</a></p>
            </div>
            <div id="help" class="footer-block">
                <h3>ヘルプ</h3>
                <p><a href="#">ヘルプ</a></p>
                <p><a href="#">広告</a></p>
                <p><a href="#">ご意見</a></p>
            </div>
            <div id="SNS" class="footer-block">
                <h3>SNS</h3>
                <p><a href="#">公式</a></p>
                <p><a href="#">Line</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">TikTok</a></p>
            </div>
            <div id="operation" class="footer-block">
                <h3>運営</h3>
                <p><a href="#">運営</a></p>
                <p><a href="#">運営会社</a></p>
                <p><a href="#">採用情報</a></p>
                <p><a href="#">Blog</a></p>
            </div>
            <div id="outer-link" class="footer-block">
                <h3>外部リンク</h3>
                <p><a href="#">〇〇会社</a></p>
                <p><a href="#">▼▼会社</a></p>
                <p><a href="#">□□サイト</a></p>
                <p><a href="#">✖️✖️組織</a></p>
            </div>
        </div>
    </footer>
    <p style="text-align: center"><a href="" class="btn btn--orange"><i class="fas fa-phone-alt fa-position-left"></i>お電話はこちら<br>0120-12-3456</a></p>
</body>
</html>
