<h1>Статус заявки № <?php echo $data['id']?></h1>


<p>Регион: <?php echo $data['region']?></p>
<p>Группа: <?php echo $data['group']?></p>
<p>Тип: <?php echo $data['type']?></p>
<p>Сообщение: <?php echo $data['message']?></p>
<form id='editForm' method='post' action="">
Статус:
    <select name='status' form='editForm' required>
        <option disabled selected><?php echo $data['status']?></option>
        <option value="Зарегистрирована">Зарегистрирована</option>
        <option value="Принята">Принята</option>
        <option value="Отклонена">Отклонена</option>
        <option value="Завершена">Завершена</option>
    </select>
<p><input type="submit" form='editForm' value='Отправить' name="submit"></p>
</form>
