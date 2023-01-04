<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="button_style.css">
    <title>Document</title>
</head>
<body>

<!-- Вывод данных таблицы users -->
<table>
	<thead>
		<tr>
			<th>Номер</th>
			<th>Телефон</th>
			<th>ФИО</th>
			<th>Пароль</th>
			<th>Улица</th>
			<th>Почта</th>
		</tr>
	</thead>
	<tbody>
<?php

        $mysql= new mysqli('sitelibrary', 'root', '', 'library_bd');
       
        $res = $mysql->query("SELECT * FROM `users` order by fio");
        
        foreach ($res as $row): ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['fio']; ?></td>
			<td><?php echo $row['pass']; ?></td>
			<td><?php echo $row['adress']; ?></td>
			<td><?php echo $row['mail']; ?>r</td>
		</tr>
		<?php endforeach;?>
    </tbody> 
</table>
<a href="users_table.php" class="butt">Отсортировать по имени</a>


<a href="start_menu_adm.html" class="butt">Вернуться назад</a>
  </form>
</html>
