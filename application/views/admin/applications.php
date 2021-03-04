<h1>Admin|Заявки</h1>

<?php foreach ($list as $value): ?>
    <a href="/admin/edit/<?php echo $value['id']?>">
        <p>Регион: <?php echo $value['region']?></p>
        <p>Группа: <?php echo $value['group']?></p>
        <p>Тип: <?php echo $value['type']?></p>
        <!--    <p>Сообщение: --><?php //echo $value['message']?><!--</p>-->
        <!--    <p>Статус: --><?php //echo $value['status']?><!--</p>-->
    </a>
    <hr>
<?php endforeach; ?>

<?php echo $pagination; ?>