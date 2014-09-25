<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>    
<h1>Ключи платные</h1>
<table border="1" width="1124px" cellpadding="0" cellspacing="0">
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
<?php $i=0; ?>
<?php  foreach ($key_pls as $id => $key_pl) { ?>
       <tr>
       <td> <?php $i ++ ; echo $i;  ?></td>  
       <td> <?php echo $key_pl['id']; ?> </td>
       <td> <a href="/index.php/keyShow?id=<?php echo $key_pl['id'];?>&i=<?php echo $i;?>"><?php echo $key_pl['kod'];?></a> </td>
       <td> <?php echo $key_pl['name'];?> </td>
       <td> <a href="/index.php/deleteKey?id= <?php echo $key_pl['id'];?>"><?php echo "Видалити";?></a> </td>
       <td> <a href="/index.php/keyEdit?id=<?php echo $key_pl['id'];?>"><?php echo "Редагувати";?></a>
       <td> <?php echo $key_pl['date_surrender'];  ?> </td>
       <td> <?php echo $key_pl['date_start'];?> </td>
       <td> <?php echo $key_pl['date_po'];     ?> </td>
       <td> <?php echo $key_pl['telephone'];?> </td> 
       </tr>
<?php } ?>
</table>
</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>