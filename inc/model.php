<?php

// model.php


define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', '');
define('DB_NAME', 'test');





function open_database_connection()
{
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $link);
    mysql_query('SET NAMES "UTF8"', $link   );

    return $link;
}

function close_database_connection($link)
{
    mysql_close($link);
}


function get_all_key_bezpl()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_bezpl', $link);
    $key_bezplt = array();
    while ($row = mysql_fetch_assoc($result)) {
        $key_bezplt [$row['id']] = $row;
    }
    close_database_connection($link);

    return $key_bezplt;
}

function get_key_bezpl_by_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_bezpl where id = ' . mysql_real_escape_string($id, $link), $link);
    $ke_bezpl = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $ke_bezpl;
}

function get_all_key_pl()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_pl', $link);
    $key_pls = array();
    while ($row = mysql_fetch_assoc($result)) {
        $key_pls[$row['id']] = $row;
    }
    close_database_connection($link);

    return $key_pls;
}

function get_key_pl_by_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_pl where id = ' . mysql_real_escape_string($id, $link), $link);
    $key_pl = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $key_pl;
}

function delete_free_key($id)

{
    $link = open_database_connection();
    mysql_query("DELETE FROM key_bezpl WHERE id=$id;");
    close_database_connection($link);
     
}

function delete_key($id)

{
    $link = open_database_connection();
    mysql_query("DELETE FROM key_pl WHERE id=$id;");
    close_database_connection($link);
     
}

function update_free_key($id, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $got_key, $dogovir, $nalog, $telephone, $bad)

{
    $link = open_database_connection();
    mysql_query ("UPDATE key_bezpl SET kod='$kod', name='$name', passwor='$password', sing='$sing', date_surrender='$date_surrender', date_supply='$date_supply', date_start='$date_start', got_key='$got_key', dogovir='$dogovir', nalog='$nalog', telephone='$telephone', bad='$bad' WHERE id='$id'");
    close_database_connection($link);

}

function update_key($id, $kod, $name, $date_surrender, $date_start, $date_po, $telephone)

{
    $link = open_database_connection();
    mysql_query ("UPDATE key_pl SET kod='$kod', name='$name', date_surrender='$date_surrender', date_start='$date_start', date_po='$date_po', telephone='$telephone' WHERE id='$id'");
    close_database_connection($link);

}

function insert_key_free ($save, $cancel, $kod, $name, $password, $sing, $date_surrender, $date_supply, $date_start, $dogovir, $got_key, $nalog, $telephone, $bad)
{
    $link = open_database_connection();  
    mysql_query ("INSERT INTO key_bezpl (kod, name, passwor, sing, date_surrender, date_supply, date_start, dogovir, got_key, nalog, telephone, bad) values ('$kod', '$name', '$password', '$sing', '$date_surrender', '$date_supply', '$date_start', '$dogovir', '$got_key', '$nalog', '$telephone', '$bad') ");
    close_database_connection($link);
}

function insert_key($save, $cancel, $kod, $name, $date_surrender, $date_start, $date_po, $telephone)
{
    $link = open_database_connection();  
    mysql_query ("INSERT INTO key_pl (kod, name, date_surrender, date_start, date_po, telephone) values ('$kod', '$name', '$date_surrender', '$date_start', '$date_po', '$telephone') ");
    close_database_connection($link);
}

function get_users()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM users', $link);
    $users = array();
    while ($row = mysql_fetch_assoc($result)) {
        $users [$row['id']] = $row;
    }
    close_database_connection($link);

    return $users;
}

function get_user_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM users where id = ' . mysql_real_escape_string($id, $link), $link);
    $user = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $user;
}

function reestration_users ($save, $cancel, $name, $login, $password, $access)
{
    $link = open_database_connection();
    mysql_query ("INSERT INTO users (name, login, password, access) values ('$name', '$login', '$password', '$access') ");
    close_database_connection($link);
}
function update_user($id, $pib, $login, $password, $access )
{
    $link = open_database_connection();
    mysql_query ("UPDATE users SET name='$pib', login='$login', password='$password', access='$access' WHERE id='$id'  ");
    close_database_connection($link);
}
 
function delete_user($id)

{
    $link = open_database_connection();
    mysql_query("DELETE FROM users WHERE id=$id;");
    close_database_connection($link);
     
}