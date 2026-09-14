<?php
// Q1 変数と文字列
$name = '米山真以';
echo  '私の名前は「' . $name . '」です。';



// Q2 四則演算
$x = 5 * 4;
var_dump ($x);
var_dump($x / 2);

// Q3 日付操作
$time = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $time . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age >= 18) ? '成人です' : '未成年です';
echo $message;

// Q6 配列
$prefectures = ['東京都' , '茨城県' , '群馬県' , '栃木県' ,  '千葉県' , '埼玉県', '神奈川県' ];
echo $prefectures[3] . 'と' .$prefectures[4] .'は関東地方の都道府県です。';

// Q7 連想配列-1
$capital = ['東京都' => '新宿区' , '神奈川県' => '横浜市' , '千葉県' => '千葉市' , '埼玉県' => 'さいたま市' , '栃木県' => '宇都宮市' , '群馬県' => '前橋市' , '茨城県' => '水戸市'  ];
foreach ($capital as $value) {
echo $value . "\n" ;
}

// Q8 連想配列-2
foreach ($capital as $key => $value)
if ($key === '埼玉県'){
    echo $key . 'の県庁所在地は、' . $value . 'です。';
}

// Q9 連想配列-3
$capital['大阪'] = '大阪府';
$capital['福岡'] = '福岡市';
foreach ($capital as $key => $value){
    if ($key === '東京都' || $key === '神奈川県' || $key === '千葉県' || $key === '埼玉県' || $key === '栃木県' || $key === '群馬県' || $key === '茨城県') {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    } else {
        echo $key . 'は関東地方ではありません。' . "\n";
    } 
}


// Q10 関数-1
$Lastname = ['金谷', '安藤'];
function hello($Lastname) {
    return $Lastname . 'さん、こんにちは。';
}
echo hello('金谷');
echo "\n";
echo hello('安藤');

// Q11 関数-2
$price = 1000;
$taxprice = calcTaxInPrice($price);
function calcTaxInPrice($price) {
    return $price * 1.1;
}
echo $price . '円の商品の税込価格は' . $taxprice . '円です。';


// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}
echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';

        case 'C':
            return '合格ですが追加課題があります。';

        case 'D':
            return '不合格です。';

        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('E');

?>