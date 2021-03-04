<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link href="/public/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <ul class="top-menu">
        <li><a href="/"><span>Оставить заявку</span></a></li>
        <li><a href="/applications"><span>Лента заявок</span></a></li>
        <li><a href="/login"><span>Вход</span></a></li>
    </ul>
</header>
    <?php echo $content; ?>
</body>
</html>