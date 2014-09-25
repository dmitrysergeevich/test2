<?php

function key_pl_list_action()
{
    $key_pls = get_all_key_pl();
   
    $title = 'Key not free';
   
 ob_start();
    require TEMPLATES_DIR. '/key_pl/list.php';
 $html_code = ob_get_contents();
 ob_end_clean();
 
 return array( $title, $html_code);
}

function key_pl_show_action($id)
{
    $key_pl = get_key_pl_by_id($id);
    
 $title = $key_pl['name'];
  
 ob_start();
    require TEMPLATES_DIR. '/key_pl/show.php';
 $html_code = ob_get_contents();
 ob_end_clean();
       
 return array($title, $html_code);
}