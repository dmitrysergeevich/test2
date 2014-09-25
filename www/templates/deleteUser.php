<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<p>    
<h1><?php echo "Ви дійсно бажаєте видалити цього користувача?" ?></h1>
<table border="1" width="1124px" >
    <tr>
       <th>№</th>
       <th>П.І.Б</th>
       <th>Логін</th>
    
       <th>Пароль</th>
       <th>Тип доступу</th>   
   </tr>
   <tr>
        <td> <?php echo $user['id']; ?> </td>
        <td> <?php echo $user['name']; ?> </td>
        <td> <?php echo $user['login'];?> </td>
        <td> <?php echo $user['password'];  ?> </td>
        <td> <?php echo $user['access'];?> </td>
   </tr>
</table>

<form action="/index.php/deleteUser" method="get">
 <input type="hidden" name='id' value='<?php echo $user['id'];  ?>' />
 <input type="submit" name="delete" value=" Да " />
 <input type="submit" name="cancel" value=" Нет " />
</form>

</p>
<?php include_once TEMPLATES_DIR . '/footer.php'; ?>