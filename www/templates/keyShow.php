<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>
<h1>Платний ключ: <?php echo $key_pl['name'] ?></h1>
<table border="1">
    <tr>
       <th>№</th>
       <th>id</th>
       <th>ЄДРПОУ</th>
       <th>Назва</th>
       <th>Видалити</th>
       <th>Редагувати</th>
       <th>Дата подання документів</th>
       <th>Дата початку дії ключа</th>
       <th>Дата видачі ПО та ключів</th>
       <th>Телефон</th>
    </tr>
       <tr>
       <td> <?php echo $i; ?> </td>
       <td> <?php echo $key_pl['id']; ?> </td>
       <td> <?php echo $key_pl['kod'];?> </td>
       <td> <?php echo $key_pl['name'];?> </td>
       <td> <a href="/index.php/deleteKey?id=<?php echo $key_pl['id'];?>"><?php echo "Видалити";?></a>
       <td> <a href="/index.php/keyEdit?id=<?php echo $key_pl['id'];?>"><?php echo "Редагувати";?></a>
       <td> <?php echo $key_pl['date_surrender'];  ?> </td>
       <td> <?php echo $key_pl['date_start'];?> </td>
       <td> <?php echo $key_pl['date_po'];     ?> </td>
       <td> <?php echo $key_pl['telephone'];?> </td>
   </tr>
</table>
</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>