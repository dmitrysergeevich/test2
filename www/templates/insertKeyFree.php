<?php include_once TEMPLATES_DIR . '/header.php'; ?>
 <h1>Додати безкоштовний ключ</h1>

 <form action="/index.php/insertKeyFree" method="get">
 <p>ЄДРПОУ <input type="int" name="kod" size="10" value='' /></p>
 <p>Назва <input type="varchar" name="name" size="150" value='' /></p>
 <p>Пароль <input type="password" name="password" size="5" value='' /></p>
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
   <option value="<?php echo $i; ?>" <?php echo $i ?>><?php echo $b; ?> </option>
 <?php endfor; ?>
       </select>
 </p>
 <p>Дата подання документів <input type="date" name="date_surrender" value='' /></p>
 <p>Дата передачі документів<input type="date" name="date_supply" value='' /></p>
 <p>Дата початку дії ключа <input type="date" name="date_start" value='' /></p>
 <p>Отримали ключ
    <select name="got_key"><br>
   <option value="+">Yes</option>
   <option value="-">No</option>
</select>
</p>
<p>Договір <select name="dogovir"><br>
        <option value="+">Yes</option>
        <option value="-">No</option>      
    </select>
 </p>
 <p>Податок <input type="varchar" name="nalog" size="2" value='' /></p>
 <p>Телефон <input type="varchar" name="telephone" value='' /></p>
 <p>Брак
    <select name="bad"><br>
         <option value="+">Yes</option>
          <option value="-">No</option>
    </select>
 </p>
 <input type="submit" name="save" value="Зберігти" />
 <input type="reset" name="reset" value="Відмінити зміни" />
 <input type="submit" name="cancel" value="Відміна" />
 </form>

<?php include_once TEMPLATES_DIR . '/footer.php'; ?>