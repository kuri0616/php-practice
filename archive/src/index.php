<?php
$pageFlag = 0;

if(!empty($_POST['conf'])) {
    $pageFlag = 1;
}

if(!empty($_POST['back'])) {
    $pageFlag = 0;
}

if(!empty($_POST['submit'])) {
    $pageFlag = 2;
}

echo $pageFlag;
echo '<br>';
var_dump($_POST);

?>

<DOCTYPE>
    <html>
        <head>
        <title>My First PHP Page</title>
        </head>
        <body>

        <?php if($pageFlag === 0) : ?>
        <form method="POST" action="index.php">
            名前<input type="text" name="user_name">
            <br>
            メールアドレス<input type="email" name="email">
            <br>
            <input type="submit" name="conf" value="確認">
        <?php endif; ?>

        <?php if($pageFlag === 1) : ?>
        <p>以下の内容でよろしいですか？</p>
        <form method="POST" action="index.php">
            <input type="submit" name="back" value="戻る">
        <br>
        <input type="submit" name="submit" value="送信">
        <br>
        <input type="hidden" name="user_name" value="<?php echo $_POST['user_name']; ?>">
        <br>
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <?php endif; ?>
        <?php if($pageFlag === 2) : ?>
        <p>送信が完了しました</p>
        <?php endif; ?>
        </body>
    </html>
</DOCTYPE>