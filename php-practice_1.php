<?php
// Q1 変数と文字列
 $name = '安藤';
echo '私の名前は「'.$name.'」です';

// Q2 四則演算

$num = 5*4;
echo $num .'\n';
echo $num / 2; 

// Q3 日付操作

echo '現在時刻は、'.date('Y年m月d日H時i分s秒').'です';

// Q4 条件分岐-1 if文

$device = 'windows';

if($device === 'windows'){
  echo '使用OSは、windowsです。';
}

if($device === 'mac'){
    echo'使用OSは、macです。';
}

if($device != 'windows' && $device != 'mac'){
    echo'どちらでもありません。';
}
  
// Q5 条件分岐-2 三項演算子
$age = 17;

echo($age >= 18)?'成人です。':'未成年です。';

// Q6 配列
$Kantou = ['東京都','神奈川県','栃木県','千葉県','茨城県','埼玉県','群馬県'];

echo $Kantou[2].'と'.$Kantou[3].'は関東地方の都道府県です。';

// Q7 連想配列-1
$Kantou = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];

foreach ($Kantou as $Value){
echo $Value.'\n';
}

// Q8 連想配列-2
$Kantou = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];

foreach($Kantou as $pref=>$Value){
    if($pref === '埼玉県' && $Value === 'さいたま市'){
        echo $pref.'の県庁所在地は、'.$Value.'です。';
    }
}

// Q9 連想配列-3
$Kantou = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市','愛知県'=>'','大阪府'=>''];

foreach($Kantou as $pref=>$Value){
    if($pref != '愛知県' && $pref != '大阪府'){
         echo $pref.'の県庁所在地は、'.$Value.'です。\n';
    }
    if($pref === '愛知県' || $pref === '大阪府'){
        echo $pref.'は関東地方ではありません。\n';
    }
}

// Q10 関数-1
function hello($name1,$name2){
    echo $name1.'さん、こんにちは。\n';
    echo $name2.'さん、こんにちは。';
}

hello('金谷','安藤');

// Q11 関数-2
function calcTaxInPrice($price){
  $taxInPrice = $price * 1.1;
  echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
}

calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($number){
    if ($number % 2 === 1){
        echo $number.'は奇数です。';
    }
    else{
        echo $number.'は偶数です。';
    }
}

distinguishNum(6);

// Q13 関数とswitch文
function evaluateGrade($judgement){
    switch($judgement){
        case'A':
        case'B';
            echo'合格です';
        break;
        
        case'C':
            echo'合格ですが追加課題があります。';
        break;
        
        case'D':
            echo'不合格です。';
        break;
        
        default:
            echo'判定不明です。講師に問い合わせてください。';
    }
}
evaluateGrade('G');

?>