<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です';

// Q2 四則演算

$num = 5 * 4;
echo $num . '\n';
echo $num / 2;

// Q3 日付操作

echo '現在時刻は、' . date('Y年m月d日H時i分s秒') . 'です';

// Q4 条件分岐-1 if文

$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 17;

echo ($age >= 18) ? '成人です。' : '未成年です。';

// Q6 配列
$kantou = ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '埼玉県', '群馬県'];

echo $kantou[2] . 'と' . $kantou[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kantou = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kantou as $value) {
    echo $value . '\n';
}

// Q8 連想配列-2
$kantou = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kantou as $pref => $value) {
    if ($pref === '埼玉県' && $value === 'さいたま市') {
        echo $pref . 'の県庁所在地は、' . $value . 'です。';
    }
}

// Q9 連想配列-3
$kantou = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

$kantou['愛知県'] = '名古屋市';
$kantou['大阪府'] = '大阪市';

foreach ($kantou as $pref => $value) {

    if (in_array($pref, ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'])) {
        echo $pref . 'の県庁所在地は、' . $value . "です。\n";
    } else {
        echo $pref . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。';
}

echo hello('金谷') . "\n";
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';
}

calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($number)
{
    if ($number % 2 === 1) {
        echo $number . 'は奇数です。';
    } else {
        echo $number . 'は偶数です。';
    }
}

distinguishNum(6);

// Q13 関数とswitch文
function evaluateGrade($judgement)
{
    switch ($judgement) {
        case 'A':
        case 'B';
            echo '合格です';
            break;

        case 'C':
            echo '合格ですが追加課題があります。';
            break;

        case 'D':
            echo '不合格です。';
            break;

        default:
            echo '判定不明です。講師に問い合わせてください。';
    }
}
evaluateGrade('G');
