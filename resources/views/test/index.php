<!DOCTYPE html>
<html>
    <head>
        <title>テンプレートファイルの練習2</title>
        <style>
            body {background: blue; }
        </style>
    </head>
    <body>
        <h1>テンプレートファイルの練習2</h1>
        <p><?php echo "こんにちは、" . $name . "さん！" ?></p>
        <p><?php echo "あなたの年齢は、" . $age . "歳です" ?></p>
        <p><?php echo "あなたの性別は、" . $gender . "です" ?></p>
        <p><?php echo "今日の天気は" . $tenki . "です" ?></p>
        <p><?php echo "今日のご飯は" . $meal . "です" ?></p>
    </body>
</html>