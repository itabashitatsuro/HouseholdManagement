<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm</title>
</head>
<body>
    <form action="/regist" method="GET">
        @csrf
        <div>
            <label>種類：</label>
            <span>{{$balanceType}}</span>
            <input name="balanceType" value="{{$balanceType}}" type="hidden">
        </div>
        <div>
            <label>項目：</label>
            <span>{{$balanceCategory}}</span>
            <input name="balanceCategory" value="{{$balanceCategory}}" type="hidden">
        </div>
        <div>
            <label>入力金額：</label>
            <span>{{$num}}</span>
            <input name="num" value="{{$num}}" type="hidden">
        </div>
        <button type="button" onclick="history.back()">戻る</button>
        <button name="regist" type="submit" value="true">登録</button>
    </form>
</body>
</html>
