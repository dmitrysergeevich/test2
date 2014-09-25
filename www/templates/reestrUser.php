<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<h1>Додати нового користувача</h1>

 <form action="/index.php/reestrUser" method="get">
 <p>П.І.Б. <input type="varchar" name="name" size="50" value='' /></p>
 <p>Логін <input type="varchar" name="login" size="15" value='' /></p>
 <p>Пароль<input type="password" size="10" name="password" value='' /></p>
 <p>Тип доступу<select name="access"><br>
     <option>user</option>
     <option>editor</option>
     <option>admin</option>
 </select>
 </p>
 
 <input type="submit" name="save" value="Сохранить" />
 <input type="reset" name="reset" value="Сбросить" />
 <input type="submit" name="cancel" value="Отмена" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>
