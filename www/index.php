<?php
// index.php

// Загружаем и инициализируем глобальные библиотеки
require_once './../inc/config.php';
require_once ROOT_DIR . '/inc/model.php';
require_once ROOT_DIR . '/inc/SQL.php';
require_once ROOT_DIR . '/controllers/BaseController.php';
  
// Внутренняя маршрутизация
$uri = $_SERVER['PHP_SELF'];

$controller = new BaseController();

if ($uri == '/index.php') { 
	$controller->  indexAction();
} elseif ($uri == '/index.php/freeKeyList')   {
        $controller->  freeKeysListAction();
} elseif ($uri == '/index.php/freeKeyShow' && isset($_GET['id'])) {
        $controller->  freeKeyShowAction($_GET['id'], $_GET['i']);
    
} elseif ($uri == '/index.php/KeysList') {
	$controller->  keysListAction();
        
} elseif ($uri == '/index.php/keyShow' && isset($_GET['id'])) {
	$controller->  keyShowAction($_GET['id'], $_GET['i']);
        
} elseif ($uri == '/index.php/deleteKeyFree' && isset($_GET['id'])) {
        $delete = ! empty ($_GET['delete']) ? $_GET['delete'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $controller->  keyFreeDeleteAction($_GET['id'], $delete, $cancel);
        
} elseif ($uri == '/index.php/deleteKey' && isset($_GET['id'])) {
	$delete = ! empty ($_GET['delete']) ? $_GET['delete'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $controller->  keyDeleteAction($_GET['id'], $delete, $cancel);
        
        
} elseif ($uri == '/index.php/keyFreeEdit' && isset($_GET['id'])) {
     //var_dump($_GET);
        $save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $reset = ! empty ($_GET['reset']) ? $_GET['reset'] : '';
        $kod = ! empty ($_GET['kod']) ? $_GET['kod'] : '';
        $name = ! empty ($_GET['name']) ? $_GET['name'] : '';
        $password = ! empty ($_GET['password']) ? $_GET['password'] : '';
        $sing = ! empty ($_GET['sing']) ? $_GET['sing'] : '';
        $date_surrender = ! empty ($_GET['date_surrender']) ? $_GET['date_surrender'] : '';
        $date_supply = ! empty ($_GET['date_supply']) ? $_GET['date_supply'] : '';
        $date_start = ! empty ($_GET['date_start']) ? $_GET['date_start'] : '';
        $got_key = ! empty ($_GET['got_key']) ? $_GET['got_key'] : '';
        $dogovir = ! empty ($_GET['dogovir']) ? $_GET['dogovir'] : '';
	$nalog = ! empty ($_GET['nalog']) ? $_GET['nalog'] : '';
        $telephone = ! empty ($_GET['telephone']) ? $_GET['telephone'] : '';
        $bad = ! empty ($_GET['bad']) ? $_GET['bad'] : '';
        $controller->  keyFreeEditAction($_GET['id'], $save, $cancel, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $got_key, $dogovir, $nalog, $telephone, $bad);

} elseif ($uri == '/index.php/keyEdit' && isset($_GET['id'])) {
        $save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $reset = ! empty ($_GET['reset']) ? $_GET['reset'] : '';
        $kod = ! empty ($_GET['kod']) ? $_GET['kod'] : '';
        $name = ! empty ($_GET['name']) ? $_GET['name'] : '';
        $date_surrender = ! empty ($_GET['date_surrender']) ? $_GET['date_surrender'] : '';
        $date_start = ! empty ($_GET['date_start']) ? $_GET['date_start'] : '';
        $date_po = ! empty ($_GET['date_po']) ? $_GET['date_po'] : '';
        $telephone = ! empty ($_GET['telephone']) ? $_GET['telephone'] : '';
        $controller->  keyEditAction($_GET['id'], $save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone);  
        
} elseif ($uri == '/index.php/insertKeyFree') {
        $save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $reset = ! empty ($_GET['reset']) ? $_GET['reset'] : '';
        $kod = ! empty ($_GET['kod']) ? $_GET['kod'] : '';
        $name = ! empty ($_GET['name']) ? $_GET['name'] : '';
        $password = ! empty ($_GET['password']) ? $_GET['password'] : '';
        $sing = ! empty ($_GET['sing']) ? $_GET['sing'] : '';
        $date_surrender = ! empty ($_GET['date_surrender']) ? $_GET['date_surrender'] : '';
        $date_supply = ! empty ($_GET['date_supply']) ? $_GET['date_supply'] : '';
        $date_start = ! empty ($_GET['date_start']) ? $_GET['date_start'] : '';
        $dogovir = ! empty ($_GET['dogovir']) ? $_GET['dogovir'] : '';
        $got_key = ! empty ($_GET['got_key']) ? $_GET['got_key'] : '';
        $nalog = ! empty ($_GET['nalog']) ? $_GET['nalog'] : '';
        $telephone = ! empty ($_GET['telephone']) ? $_GET['telephone'] : '';
        $bad = ! empty ($_GET['bad']) ? $_GET['bad'] : '';
        $controller->  insertKeyFreeAction ($save, $cancel, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $dogovir, $got_key, $nalog, $telephone, $bad);
        
} elseif ($uri == '/index.php/insertKey') {
        $save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $reset = ! empty ($_GET['reset']) ? $_GET['reset'] : '';
        $kod = ! empty ($_GET['kod']) ? $_GET['kod'] : '';
        $name = ! empty ($_GET['name']) ? $_GET['name'] : '';
        $date_surrender = ! empty ($_GET['date_surrender']) ? $_GET['date_surrender'] : '';
        $date_start = ! empty ($_GET['date_start']) ? $_GET['date_start'] : '';
        $date_po = ! empty ($_GET['date_po']) ? $_GET['date_po'] : '';
        $telephone = ! empty ($_GET['telephone']) ? $_GET['telephone'] : '';
        $controller->  insertKeyAction($save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone);   
        
} elseif ($uri == '/index.php/userList')  {
        $controller->userListAction();

        
} elseif ($uri == '/index.php/reestrUser') {
        $save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $name = ! empty ($_GET['name']) ? $_GET['name'] : '';
        $login = ! empty ($_GET['login']) ? $_GET['login'] : '';
        $password = ! empty ($_GET['password']) ? $_GET['password'] : '';
        $access = ! empty ($_GET['access']) ? $_GET['access'] : '';
        $controller->reestrUser ($save, $cancel, $name, $login, $password, $access);
        
} elseif ($uri == '/index.php/updateUser' && isset($_GET['id'])) {
	$save = ! empty ($_GET['save']) ? $_GET['save'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $pib = ! empty ($_GET['pib']) ? $_GET['pib'] : '';
        $login = ! empty ($_GET['login']) ? $_GET['login'] : '';
        $password = ! empty ($_GET['password']) ? $_GET['password'] : '';
        $access = ! empty ($_GET['access']) ? $_GET['access'] : '';
        $controller->  updateUserAction($_GET['id'], $pib, $login, $password, $access, $save, $cancel );
      
} elseif ($uri == '/index.php/deleteUser' && isset($_GET['id'])) {
	$delete = ! empty ($_GET['delete']) ? $_GET['delete'] : '';
        $cancel = ! empty ($_GET['cancel']) ? $_GET['cancel'] : '';
        $controller-> userDeleteAction($_GET['id'], $delete, $cancel );    
} elseif ($uri == '/index.php/sql' )
{
	$sql = new SQL();
	
//	'SELECT * FROM key_bezpl where id = ' . mysql_real_escape_string($id, $link), $link);
	
	$list = $sql-> select('key_bezpl', '*', "id IN (1,2,3,4,5,6)");
	var_dump($list);
}

 else {
    header('Status: 404 Not Found');
    $controller->  notFoundAction();
}

