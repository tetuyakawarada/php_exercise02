<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];

    if (empty($name)) {
        $err_msgs[] = "氏名を入力してください";
    }

    if (empty($tel)) {
        $err_msgs[] = "電話番号を入力してください";
    }

    if (empty($email)) {
        $err_msgs[] = "メールアドレスを入力してください";
    }
}

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
    <h3>個人情報を入力してください</h3>

    <? if ($err_msgs) : ?>
        <ul>
            <? foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <? endforeach; ?>

        </ul>
    <? endif; ?>


    <form action="" method="post">

        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" value="<?= $name ?>">
        </div>

        <div>
            <label for="tel">電話番号</label><br>
            <input type="tel" name="tel" value="<?= $tel ?>">
        </div>

        <div>
            <label for="email">メールアドレス</label><br>
            <input type="email" name="email" value="<?= $email ?>">
        </div>

        <h3>購入するものを選択してください</h3>

        <div>
            <select name="item_key" id="">
                <? foreach (array_keys($items) as $key) : ?>
                    <option value="<?= $key ?>"><?= $items[$key] ?></option>
                <? endforeach; ?>
            </select>
        </div>

        <br>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>


    <? if ($name && $tel && $email) : ?>

        <h3>以下の内容が送信されました</h3>

        <table>
            <tr>
                <td>氏名：</td>
                <td><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>

            <tr>
                <td>電話番号：</td>
                <td><?= htmlspecialchars($tel, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>

            <tr>
                <td>メールアドレス：</td>
                <td><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>

            <tr>
                <td>購入するもの：</td>
                <td><?= $items[$item_key] ?></td>
            </tr>

        </table>

    <? endif; ?>

</body>

</html>
