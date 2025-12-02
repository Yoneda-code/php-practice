<?php
// Q1 変数と文字列
$name = '米田';

echo '私の名前は「' . $name . '」です。'; 

// Q2 四則演算
$num = 5 * 4;

echo "$num \n";
echo $num / 2;

// Q3 日付操作
$message = '現在時刻は、';
date_default_timezone_set('Asia/Tokyo');
echo date("$message Y年m月d日 H時i分s秒");
echo 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows'){
  echo '使用OSは、windowsです。';
}else {
  if ($device === 'mac'){
    echo '使用OSは、macです。';
  }else {
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 27;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$prefectures = [
  '東京都',
  '神奈川県',
  '栃木県',
  '千葉県',
  '埼玉県',
  '群馬県',
  '茨城県'
];
echo '',$prefectures[3],'と',$prefectures[4],'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefectures =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($prefectures as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
$prefectures =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
$target = '埼玉県';
if (isset($prefectures[$target])) {
    echo $target . 'の県庁所在地は、' . $prefectures[$target] . 'です。';
}

// Q9 連想配列-3
$prefectures =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
$prefectures +=[
  '石川県' => '金沢市',
  '北海道' => '札幌市'
];
$kanto =['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県'];
foreach ($prefectures as $pref => $city) {
    if (in_array($pref, $kanto)) {
        echo $pref . 'の県庁所在地は、' . $city . "です。\n";
    } else {
        echo $pref . "は関東地方ではありません。\n";
    }
}
// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。\n";
}
echo hello ('北村');
echo hello ('泉');

// Q11 関数-2
function calcTaxInPrice($price){
  return $price * 1.10;
}
$price = 1000;
$taxInPrice = calcTaxInPrice ($price);
echo $price . '円の商品の税込価格は' . $taxInPrice .'円です。';

// Q12 関数とif文
function distinguishNum($number){
  if ($number % 2 == 0){
    return $number .'は偶数です。';
  }else{
    return $number .'は奇数です。';
  }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";



// Q13 関数とswitch文
function evaluateGrade($grades){
  switch ($grades) {
      case 'A':
      case 'B':
          echo '合格です。';
          break;

      case 'C':
          echo '合格ですが追加課題があります。';
          break;

      case 'D':
          echo '不合格です。';
          break;

      default:
          echo '判定不明です。講師に問い合わせてください。';
          break;
  }
}
echo evaluateGrade ('A') . "\n";
echo evaluateGrade ('E') . "\n";
?>
