<?php

$prices = [
    'バッグ' => 1500,
    '靴' => 3000,
    '時計' => 6000,
    'ネックレス' => 9000,
    'ピアス' => 10000
];

// コードを追記
$item = $_GET['item'];

// echo $item;

if ($item) {
    $price = $prices[$item];
}
// echo $price;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>ご注文ありがとうございます</h2>
    <h2>あなたは、<?= $item ?>を購入しました。</h2>
    <h2>お支払い金額は、<?= $price ?>円です。</h2>
    <a href="05_form2.php">戻る</a>
</body>

</html>
