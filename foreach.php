<?php

// 配列 複数のデータを格納できる
$users = ["satou", "tanaka", "yamada", "shimizu"];

// 配列に対してforeach文で中身を表示
// $usersの要素１つ１つを$userに代入してブロック内の処理を実行
foreach($users as $user){
  echo "Hello!!".$user;
}

?>

<?php

$ages = [20, 60, 27, 23];

foreach($ages as $age) {
  echo "I'm ".$age. "years old.";
}


$items = ["book", "food", "movie", "music"];

foreach($items as $item) {
  echo "I bought ".$item;
}


$prefectures = ["Hokkaido", "Okinawa", "Saitama", "Ibaraki"];

foreach($prefectures as $prefecture) {
  echo $prefecture." is awesome!!";
}

?>

<?php

$fruitesPrices = [
    'apple' => 150,
    'banana' => 100,
    'orange' => 200,
    'peach' => 300
];

foreach($fruitesPrices as $frute => $price){
    echo $fruite."の値段：".$price."円";
}

?>
