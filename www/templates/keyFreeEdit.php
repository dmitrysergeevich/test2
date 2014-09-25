<?php include_once TEMPLATES_DIR . '/header.php'; ?>

 <form action="/index.php/keyFreeEdit" method="get">
 <input type="hidden" name='id' value='<?php echo $key_bezpl['id'];  ?>' />
 <p>ЄДРПОУ <input type="int" name="kod" size="10" value='<?php echo $key_bezpl['kod'];?>' /></p>
 <p>Назва <input type="varchar" name="name" size="150" value='<?php echo $key_bezpl["name"];?>' /></p>
 <p>Тип платника <select name="sing"><br>  
   <?php for ($i=0; $i <= 3; $i ++ ) : 
   if  ($i==0) {
        $b= 'Держ.службовець';
     }
     elseif ($i==1)
     {
        $b= 'Громодянин';
     }
      elseif ($i==2)
     {
        $b= 'Підприємець';
     }
          elseif ($i==3)
     {
        $b= 'Юридична особа';
     }
       ?>
   <option value="<?php echo $i; ?>" <?php echo ($i == $key_bezpl['sing'] ? 'selected' : '' ); ?>><?php echo $b; ?> </option>
 <?php endfor; ?>
       </select>
 </p>
 <p>Пароль <input type="varchar" name="password"  size="10" value='<?php echo $key_bezpl['passwor'];?>' /></p>
 <p>Дата подання документів <input type="date" name="date_surrender" value='<?php echo $key_bezpl['date_surrender'];?>' /></p>
 <p>Дата передачі документів<input type="date" name="date_supply" value='<?php echo $key_bezpl['date_supply'];?>' /></p>
 <p>Дата початку дії ключа <input type="date" name="date_start" value='<?php echo $key_bezpl['date_start'];?>' /></p>
 <p>Отримали ключ
    <select name="got_key"><br>
   <option <?php echo ($key_bezpl['got_key'] == '+' ? 'selected' : '') ?> value="+">Yes</option>
   <option <?php echo ($key_bezpl['got_key'] == '-' ? 'selected' : '') ?> value="-">No</option>
    </select>
  </p>
  <p>Договір <select name="dogovir"><br>
        <option <?php echo ($key_bezpl['dogovir'] == '+' ? 'selected' : '') ?> value="+">Yes</option>
        <option <?php echo ($key_bezpl['dogovir'] == '-' ? 'selected' : '') ?> value="-">No</option>      
    </select>
 </p>
 <p>Податок <input type="varchar" name="nalog" size="2" value='<?php echo $key_bezpl['nalog'];?>' /></p>
 <p>Телефон <input type="varchar" name="telephone" value='<?php echo $key_bezpl['telephone'];?>' /></p>
 <p>Брак<select name="bad"><br>
   <option <?php echo ($key_bezpl['bad'] == '+' ? 'selected' : '') ?> value="+">Yes</option>
   <option <?php echo ($key_bezpl['bad'] == '-' ? 'selected' : '') ?> value="-">No</option>
 </select>
 </p>
 <input type="submit" name="save" value="Зберігти" />
 <input type="reset" name="reset" value="Відмінити зміни" />
 <input type="submit" name="cancel" value="Відміна" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>