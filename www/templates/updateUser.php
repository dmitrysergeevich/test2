<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<h1>Редагувати данні користувача</h1>

 <form action="/index.php/updateUser" method="get">
   <input type="hidden" name='id' value='<?php echo $user['id'];  ?>' />
 <p>П.І.Б. <input type="varchar" name="pib" size="50" value='<?php echo $user['name'];?>' /></p>
 <p>Логін <input type="varchar" name="login" size="15" value='<?php echo $user['login'];?>' /></p>
 <p>Пароль<input type="password" name="password" size="10" value='<?php echo $user['password'];?>'  /></p>
 <p>Тип доступу<select name="access"><br>  
   <option <?php echo ($user['access'] == 'user' ? 'selected' : '') ?> value="user">Користувач</option>
   <option <?php echo ($user['access'] == 'editor' ? 'selected' : '') ?> value="editor">Редактор</option>
   <option <?php echo ($user['access'] == 'admin' ? 'selected' : '') ?> value="admin">Адмін</option>
 </select>
 </p>
 
 <input type="submit" name="save" value="Сохранить" />
 <input type="reset" name="reset" value="Сбросить" />
 <input type="submit" name="cancel" value="Отмена" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>