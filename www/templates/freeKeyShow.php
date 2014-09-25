<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>
<h1>Безкоштовний ключ: <?php echo $key_bezpl['name'] ?></h1>
<table border="1">
    <tr>
      <th>№</th>
        <th>id</th>
       <th>ЄДРПОУ</th>
       <th>Назва</th>
       <th>Видалити</th>
       <th>Редагувати</th>
       <th>Тип платника</th>
       <th>Дата подання документів</th>
       <th>Дата передачі документів</th>
       <th>Дата початку дії ключа</th>
       <th>Договір</th>
       <th>Отримали ключ</th>
       <th>Податок</th>
       <th>Телефон</th>
       <th>Брак</th>
    </tr>
       <tr>
    <td> <?php echo $i;  ?></td>
   <td> <?php echo $key_bezpl['id']; ?> </td>
   <td> <?php echo $key_bezpl['kod']; ?> </td>
   <td> <?php echo $key_bezpl["name"]; ?> </td>
   <td> <a href="/index.php/deleteKeyFree?id=<?php echo $key_bezpl['id'];?>"><?php echo "Видалити";?></a>
   <td> <a href="/index.php/keyFreeEdit?id=<?php echo $key_bezpl['id'];?>"><?php echo "Редагувати";?></a>
   <td> <?php echo $key_bezpl['sing']; ?> </td>
   <td> <?php echo $key_bezpl['date_surrender']; ?> </td>
   <td> <?php echo $key_bezpl['date_supply']; ?> </td>
   <td> <?php echo $key_bezpl['date_start']; ?> </td>
   <td> <?php echo $key_bezpl['dogovir']; ?> </td>
   <td> <?php echo $key_bezpl['got_key']; ?> </td>
   <td> <?php echo $key_bezpl['nalog']; ?> </td>
   <td> <?php echo $key_bezpl['telephone'] ; ?> </td>
   <td> <?php echo $key_bezpl['bad']; ?> </td>
       </tr>
</table>
</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>