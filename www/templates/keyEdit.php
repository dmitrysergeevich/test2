<?php include_once TEMPLATES_DIR . '/header.php'; ?>

 <form action="/index.php/keyEdit" method="get">
 <input type="hidden" name='id' value='<?php echo $key_pl['id'];  ?>' />
 <p>ЄДРПОУ <input type="int" name="kod" size="10" value='<?php echo $key_pl['kod'];?>' /></p>
 <p>Назва <input type="varchar" name="name" size="150" value='<?php echo $key_pl["name"];?>' /></p>
 <p>Дата подання документів <input type="date" name="date_surrender" value='<?php echo $key_pl['date_surrender'];?>' /></p>
 <p>Дата початку дії ключа<input type="date" name="date_start" value='<?php echo $key_pl['date_start'];?>' /></p>
 <p>Дата видачі ПО та ключів<input type="date" name="date_po" value='<?php echo $key_pl['date_po'];?>' /></p>
 <p>Телефон <input type="varchar" name="telephone" value='<?php echo $key_pl['telephone'];?>' /></p>

 <input type="submit" name="save" value="Зберігти" />
 <input type="reset" name="reset" value="Відмінити зміни" />
 <input type="submit" name="cancel" value="Відміна" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>