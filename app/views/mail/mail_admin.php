<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li>Имя: <?=$_POST['name']; ?></li>
    <li>Телефон: <?=$_POST['tel']; ?></li>
    <li>Email: <?=$_POST['email']; ?></li>
    <li>Сообщение: <?=$_POST['message']; ?></li>
    <?php if (!empty($_POST['bonus1'])): ?>
        <li>Книга: Заказана</li>
    <?php else: ?>
        <li>Книга: Не заказана</li>
    <?php endif; ?>
    <?php if (!empty($_POST['bonus2'])): ?>
        <li>10 областей применения коучинга: Заказана</li>
    <?php else: ?>
        <li>10 областей применения коучинга: Не заказана</li>
    <?php endif; ?>
    <?php if (!empty($_POST['bonus3'])): ?>
        <li>Встреча с коучем: Заказана</li>
    <?php else: ?>
        <li>Встреча с коучем: Не заказана</li>
    <?php endif; ?>

</ul>

</body>
</html>