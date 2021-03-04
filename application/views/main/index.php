<h1>Главная страница</h1>

<form id='request' method='post' action="">
<p>
    <select name='region' form='request' required>
        <option disabled selected>Выберите регион</option>
        <?php foreach ($region as $data): ?>
            <?php echo '<option value = "'.$data->name.'">'.$data->name.'</option>' ?>
        <?php endforeach; ?>
    </select>
</p>
<p>
    <select name='service' form='request' required>
        <option disabled selected>Выберите группу</option>
        <?php foreach ($service as $data): ?>
            <?php echo '<option value = "'.$data->name.'">'.$data->name.'</option>' ?>
        <?php endforeach; ?>
    </select>
</p>
<p>
    <select name='type' form='request' required>
        <option disabled selected>Выберите тип</option>
        <?php foreach ($type as $data): ?>
            <?php echo '<option value = "'.$data->name.'">'.$data->name.'</option>' ?>
        <?php endforeach; ?>
    </select>
</p>
<p>
    <textarea name='message' placeholder='Комментарий' form='request'></textarea>
</p>
<p><input type="submit" form='request' value='Отправить' name="submit"></p>
</form>