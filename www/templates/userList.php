<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>    
<h1>Користувачі</h1>
<table border="1" width="1124px" >
    <tr>
       <th>№</th>
       <th>id</th>
       <th>П.І.Б.</th>
       <th>Логін</th>
       <th>Пароль</th>
       <th>Доступ</th>
       <th>Редагувати</th> 
       <th>Видалити</th>
    </tr>
    <?php $i=0; ?>
    <?php  foreach ($users as $id => $user) { ?>
   <tr>
   <td> <?php $i ++ ; echo $i;  ?></td>
   <td> <?php echo $user ['id'];    ?> </td>
   <td> <?php echo $user ['name'];?> </td>
   <td> <?php echo $user ['login'];  ?> </td>
   <td> <?php echo $user ['password'];?> </td>
   <td> <?php echo $user ['access'];     ?> </td>
   <td> <a href="/index.php/updateUser?id=<?php echo $user['id'];?>"><?php echo "Редагувати";?></a>   
   <td> <a href="/index.php/deleteUser?id= <?php echo $user['id'];?>"><?php echo "Видалити";?></a> </td> 
   </tr>  
   <?php } ?>
</table>
<br>
<a href="/index.php/reestrUser">Додати</a><br>
</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>