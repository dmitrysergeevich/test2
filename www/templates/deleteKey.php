<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>    
<h1><?php echo "Ви дійсно бажаєте видалити ключ?" ?></h1>
<table border="1">
    <tr>
       <th>№</th>
       <th>ЄДРПОУ</th>
       <th>Назва</th>
       <th>Дата подання документів</th>
       <th>Дата початку дії ключа</th>
       <th>Дата видачі по та ключів</th>     
   </tr>
   <tr>
        <td> <?php echo $key_pl['id']; ?> </td>
        <td> <?php echo $key_pl['kod']; ?> </td>
        <td> <?php echo $key_pl['name'];?> </td>
        <td> <?php echo $key_pl['date_surrender'];  ?> </td>
        <td> <?php echo $key_pl['date_start'];?> </td>
        <td> <?php echo $key_pl['date_po'];     ?> </td>
   </tr>
</table>

<form action="/index.php/deleteKey" method="get">
 <input type="hidden" name='id' value='<?php echo $key_pl['id'];  ?>' />
 <input type="submit" name="delete" value=" Да " />
 <input type="submit" name="cancel" value=" Нет " />
</form>

</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>