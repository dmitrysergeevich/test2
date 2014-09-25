<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>
<h1><?php echo "Ви дійсно бажаєте видалити ключ?" ?></h1>
<table border="1">
    <tr>
      <th>№</th>
       <th>ЄДРПОУ</th>
       <th>Назва</th>
       <th>Видалити</th>
       <th>Редагувати</th>
       <th>Тип платника</th>
       <th>Дата подання документів</th>
       <th>Дата передачі документів</th>
       <th>Дата початку дії ключа</th>
       <th>Договір</th>
       <th>Отримали ключь</th>
       <th>Податок</th>
       <th>Телефон</th>
       <th>Брак</th>
    </tr>
       <tr>
   <td> <?php echo $key_bezpl['id']; ?> </td>
   <td> <?php echo $key_bezpl['kod']; ?> </td>
   <td> <?php echo $key_bezpl['name']; ?> </td>
   <td> <?php echo $key_bezpl['sing'];?> </td>
   <td> <?php echo $key_bezpl['date_surrender']; ?> </td>
   <td> <?php echo $key_bezpl['date_supply']; ?> </td>
   <td> <?php echo $key_bezpl['date_start']; ?> </td>
   <td> <?php echo $key_bezpl['dogovir']; ?> </td>
   <td> <?php echo $key_bezpl['got_key']; ?> </td>
   <td> <?php echo $key_bezpl['nalog']; ?> </td>
   <td> <?php echo $key_bezpl['telephone']; ?> </td>
   <td> <?php echo $key_bezpl['bad']; ?> </td>
       </tr>
       <tr>
</table>

<form action="/index.php/deleteKeyFree" method="get">
 <input type="hidden" name='id' value='<?php echo $key_bezpl['id'];  ?>' />
 <input type="submit" name="delete" value=" Да " />
 <input type="submit" name="cancel" value=" Нет " />
</form>

</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>