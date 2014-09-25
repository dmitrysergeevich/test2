<?php


/**
 * Description of BaseController
 *
 * @author 
 */
class BaseController
{
	
	private $view = 'notFound.php';
	
	protected $db = null;
	
	public function __construct ()
	{
		$this -> db = new SQL();
	}


	private function renderView($variables = array())
	{
		extract($variables);
		include_once TEMPLATES_DIR . '/' . $this ->view;
	}
	
	public function indexAction()
	{
		$this ->view = 'index.php';	
		$this -> renderView(array('title' => 'Index'));
	}
	
       public function freeKeysListAction()
       {
                $this ->view = 'freeKeysList.php';
                $key_bezplt = $this -> db ->  select('key_bezpl', '*');
                $this -> renderView(array('title' => 'Список бесплатных ключей', 'key_bezplt' => $key_bezplt ));
       }
       
       public function keysListAction()
	{
		$this ->view = 'KeysList.php';
                $key_pls = $this -> db ->  select('key_pl', '*');
		$this -> renderView(array('title' => 'Список платных ключей', 'key_pls' => $key_pls ));
	}
        
       public function userListAction()
        {
		$this ->view = 'userList.php';
	        $users = $this -> db ->  select('users', '*');
		$this -> renderView(array('title' => 'Користувачі', 'users' => $users ));
	} 
        
	public function freeKeyShowAction($id, $i)
	{
                $this ->view = 'freeKeyShow.php';
                $key_bezpl = $this -> db -> select('key_bezpl', '*', "id=".$this -> db ->  escape($id) );
                $key_bezpl = array_shift($key_bezpl);
                $this -> renderView(array('title' => 'Безплатный ключь', 'key_bezpl' => $key_bezpl, 'i'=> $i ));
	}
	
	public function keyShowAction($id, $i)
	{
		$this ->view = 'keyShow.php';
                $key_pl = $this -> db -> select('key_pl', '*',"id=".$this -> db ->  escape($id) );
		$key_pl = array_shift($key_pl);
		$this -> renderView(array('title' => 'Платный ключь', 'key_pl' => $key_pl, 'i'=> $i));
	}
     
           public function keyFreeDeleteAction($id, $delete, $cancel)
        {
                if ( ! empty($cancel) ) {
                 header('Location: /index.php/freeKeyList');
                 }
                if ( ! empty($delete) )
                {
                  $this -> db -> delete('key_bezpl', "id=".$this -> db ->  escape($id));
                 header('Location: /index.php/freeKeyList');
                }
                 $this ->view = 'deleteKeyFree.php';
                 $key_bezpl = $this -> db -> select('key_bezpl', '*', "id=".$this -> db ->  escape($id) );
                 $key_bezpl = array_shift($key_bezpl);
                 $this -> renderView(array('title' => 'Видалити безкоштовний ключ', 'key_bezpl' => $key_bezpl));
        }
        
        public function keyDeleteAction($id, $delete, $cancel)
        {
                if ( ! empty($cancel) ) {
                 header('Location: /index.php/KeysList');
                 }
                if ( ! empty($delete) )
                {
                 $this -> db -> delete('key_pl', "id=".$this -> db ->  escape($id));
                 header('Location: /index.php/KeysList');
                }
                 $this ->view = 'deleteKey.php';
                 $key_pl = $this -> db -> select('key_pl', '*', "id=".$this -> db ->  escape($id) );
                 $key_pl = array_shift($key_pl);
                 $this -> renderView(array('title' => 'Видалити платний ключ', 'key_pl' => $key_pl));
        }
        
        public function userDeleteAction($id, $delete, $cancel)
        {
                if ( ! empty($cancel) ) {
                 header('Location: /index.php/userList');
                 }
                if ( ! empty($delete) )
                {
                 $this -> db -> delete('users', "id=".$this -> db ->  escape($id));
                 header('Location: /index.php/userList');
                }
                 $this ->view = 'deleteUser.php';
                 $users = $this -> db -> select('users', '*', "id=".$this -> db ->  escape($id) );
                 $users = array_shift($users);
                 $this -> renderView(array('title' => 'Видалит коритувача', 'user' => $users));
        }

      public function insertKeyFreeAction ($save, $cancel, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $dogovir, $got_key,  $nalog, $telephone, $bad)
      {
           if ( ! empty($cancel) ) {
                 header('Location: /index.php');
                 }
                if ( ! empty($save) )
                {
              $fd = array('kod' =>'$kod', 'name'=>'$name');
              var_dump($fd);
                
                 $this -> db -> insert ('key_bezpl', $fd);
                 
                 //eader('Location: /index.php/insertKeyFree');
                }
                $this ->view = 'insertKeyFree.php';
                $this -> renderView(array('title' => 'Додати безкоштовний ключ'));
      }
      
            public function insertKeyAction ($save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone)
      {
           if ( ! empty($cancel) ) {
                 header('Location: /index.php');
                 }
                if ( ! empty($save) )
                {
                 insert_key ($save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone);
                 header('Location: /index.php/insertKey');
                }
                $this ->view = 'insertKey.php';
                $this -> renderView(array('title' => 'Додати платний ключ'));
      }
      
	public function reestrUser($save, $cancel, $name, $login, $password, $access)
        {
               if ( ! empty($cancel) ) {
                 header('Location: /userList.php');
                 }
                if ( ! empty($save) )
                {
                 reestration_users($save, $cancel, $name, $login, $password, $access);;
                 header('Location: /index.php/userList');
                }
        $this ->view = 'reestrUser.php';
        $this -> renderView(array('title' => 'Реєстрація користувача'));  
        }
           
        public function updateUserAction($id, $pib, $login, $password, $access, $save, $cancel )
	{
                if ( ! empty($cancel) ) {
                 header('Location: /userList.php');
                 }
                if ( ! empty($save) )
                {
                    update_user($id, $pib, $login, $password, $access ); //$name, $login, $password, $access);
                    header('Location: /index.php/userList');
                }
		$this ->view = 'updateUser.php';
		$user = get_user_id($id);
		$this -> renderView(array('title' => 'Редагувати данні користувача', 'user' => $user ));
	}
        
      public function  keyFreeEditAction($id, $save, $cancel, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $got_key, $dogovir, $nalog, $telephone, $bad)
      {
             if ( ! empty($cancel) ) {
                 header('Location: /index.php/freeKeyList');
                 }
                if ( ! empty($save) )
                {
                 update_free_key ($id, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $got_key, $dogovir, $nalog, $telephone, $bad);
               header('Location: /index.php/freeKeyList');
                }
          $this ->view = 'keyFreeEdit.php';
          $key_bezpl = get_key_bezpl_by_id($id);
          $this -> renderView(array('title' => 'Редагування безкоштовного ключа', 'key_bezpl' => $key_bezpl));
      }
      
      public function  keyEditAction ($id, $save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone)
      {
             if ( ! empty($cancel) ) {
                 header('Location: /index.php/KeysList');
                 }
                if ( ! empty($save) )
                {
                 update_key ($id, $kod, $name, $date_surrender, $date_start, $date_po, $telephone);
                 header('Location: /index.php/KeysList');
                }
          $this ->view = 'keyEdit.php';
          $key_pl = get_key_pl_by_id($id);
          $this -> renderView(array('title' => 'Редагування платного ключа', 'key_pl' => $key_pl));
      }
            
	public function notFoundAction()
	{
		$this ->view = 'notFound.php';
		
		$this -> renderView();
	}
	

}