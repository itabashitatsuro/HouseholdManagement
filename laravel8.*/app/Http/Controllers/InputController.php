<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\Http\Requests\PostRequest;

class InputController extends Controller
{
    public function inputConfirm(Request $request) {

        $balanceType = $request->balanceType;
        if (!empty($request->balanceCategoryIncome)) {
            $balanceCategory = $request->balanceCategoryIncome;
        }
        elseif (!empty($request->balanceCategoryExpense)) {
            $balanceCategory = $request->balanceCategoryExpense;
        }
        $num = $request->num;

        // 入金
        if ($balanceType === 'income'){
            $balanceType = '入金';
            if ($balanceCategory === 'salary') {
                $balanceCategory = '給料';
            }
            elseif ($balanceCategory === 'additionalIncome') {
                $balanceCategory = '副収入';
            }
            elseif ($balanceCategory === 'extraordinaryIncome') {
                $balanceCategory = '臨時収入';
            }
            else {
                $balanceCategory = '不明';
            }
        }
        // 出金
        elseif ($balanceType === 'expense') {
            $balanceType = '出金';
            if ($balanceCategory === 'mealBill') {
                $balanceCategory = '食費';
            }
            elseif ($balanceCategory === 'entertainmentExpense') {
                $balanceCategory = '食費';
            }
            elseif ($balanceCategory === 'learningExpense') {
                $balanceCategory = '食費';
            }
            elseif ($balanceCategory === 'utilityBills') {
                $balanceCategory = '食費';
            }
            elseif ($balanceCategory === 'socialExpenses') {
                $balanceCategory = '食費';
            }
            elseif ($balanceCategory === 'clothingCost') {
                $balanceCategory = '食費';
            }
            else {
                $balanceCategory = '不明';
            }
        }
        else {
            $balanceType = '不明';
        }

        // 確認画面に表示する値を格納
        $input_data = [
            'balanceType'     => $balanceType,
            'balanceCategory' => $balanceCategory,
            'num'             => $num
        ];

        return view('confirm', $input_data);
    }

    public function regist(PostRequest $request) {
        // 戻るボタンが押された場合
        if ($request->get('back')) {
            return redirect('/todayBalanceInput')->withInput();
        }

        // 登録処理・・・・
        Asset::create([
            'balanceType'     => $request->balanceType,
            'balanceCategory' => $request->balanceCategory,
            'num'             => $request->num
        ]);

        return redirect('/');
    }
}
