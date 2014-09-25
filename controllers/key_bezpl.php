<?php

function key_bezpl_list_action()
{
    $key_bezplt = get_all_key_bezpl();
 
 $title = 'Key free';
 
 ob_start();
    require TEMPLATES_DIR. '/key_bezpl/list.php';
 $html_code = ob_get_contents();
 ob_end_clean();
 
 return array( $title, $html_code);
}

function key_bezpl_show_action($id)
{
    $key_bezpl = get_key_bezpl_by_id($id);
    
$title = $key_bezpl['name'];  
  
 ob_start();
    require TEMPLATES_DIR. '/key_bezpl/show.php';
 $html_code = ob_get_contents();
 ob_end_clean();
       
 return array($title, $html_code);
}