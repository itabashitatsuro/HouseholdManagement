<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>本日の入出金を入力する</title>
</head>
<body>
    <div>
        <form action="/confirm" method="POST">
            @csrf
            <div class="col-auto my-1">
                <select name="balanceType" id="select" onchange="viewChange();">
                    <option value="" selected>選択してください</option>
                    <option value="expense">出金</option>
                    <option value="income">入金</option>
                </select>
            <div>

                {{-- プルダウンで表示切り替え --}}
                {{-- 入金 --}}
            <div id="selectBox1" style="display:none;">
                <select name="balanceCategoryIncome">
                    <option value="" selected>選択してください</option>
                    <option value="salary">給料</option>
                    <option value="additionalIncome">副収入</option>
                    <option value="extraordinaryIncome">臨時収入</option>
                </select>
            </div>

                {{-- 出金 --}}
            <div id="selectBox2" style="display:none;">
                <select name="balanceCategoryExpense">
                    <option value="" selected>選択してください</option>
                    <option value="mealBill">食費</option>
                    <option value="entertainmentExpense">娯楽費</option>
                    <option value="learningExpense">自己啓発代</option>
                    <option value="utilityBills">水道光熱費</option>
                    <option value="socialExpenses">交際費</option>
                    <option value="clothingCost">衣服費</option>
                </select>
            </div>
            {{-- ここまで --}}

            <div>
                <input type="number" name="num" placeholder="金額を入力してください">
            <div>
            <input type="submit" value="決定">
            <button type="button" onclick="history.back()">戻る</button>

        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/todayBalanceSelect.js') }}"></script>
</body>
</html>
