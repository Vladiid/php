<?php
require_once 'connect.php';
require_once 'funcs.php';

if (!empty($_POST)) {
    save_mess();
    header("Location:{$_SERVER['PHP_SELF']}");
    exit;
}
$messages = get_mess();
//print_arr($messages);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <style>
        .message{
            border: 1px solid #cccccc;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<form action="index.php" method="post">
    <p>
        <label for="name">Имя:</label><br>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="text">Текст:</label><br>
        <textarea name="text" id="text"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>

<hr>

<?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
        <div class="message">
            <p>Автор: <?= $message['name']?> | Дата: <?= $message['date']?> </p>
            <div><?= nl2br(htmlspecialchars($message['text']))?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>