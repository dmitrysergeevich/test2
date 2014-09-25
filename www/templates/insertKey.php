<?php include_once TEMPLATES_DIR . '/header.php'; ?>
<h>Додати платний ключ</h>
 <form action="/index.php/insertKey" method="get">
 <p>ЄДРПОУ <input type="int" name="kod" size="10" value='' /></p>
 <p>Назва <input type="varchar" name="name" size="150" value='' /></p>
 <p>Дата подання документів <input type="date" name="date_surrender" value='' /></p>
 <p>Дата початку дії ключа <input type="date" name="date_start" value='' /></p>
 <p>Дата видачі ПО та ключів <input type="date" name="date_po" value='' /></p>
 <p>Телефон <input type="varchar" name="telephone" value='' /></p>

 <input type="submit" name="save" value="Зберігти" />
 <input type="reset" name="reset" value="Відмінити зміни" />
 <input type="submit" name="cancel" value="Відміна" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>