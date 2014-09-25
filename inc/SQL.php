<?php

class SQL {

    protected $link = null;

    /**
     * создает подключение к базе
     */
    public function __construct() {
        $this->link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

        mysql_select_db(DB_NAME, $this->link);
        mysql_query('SET NAMES "UTF8"', $this->link);

//		return $this -> link;
    }

    public function select($table, $fields = '*', $where = '', $order_by = '', $limit = '') {
        $sql = "
            SELECT $fields 
                FROM $table
                    WHERE true " . (!empty($where) ? "AND $where" : "" )
                                 . (!empty($order_by) ? "ORDER BY $order_by" : "" )
                                 . (!empty($limit) ? " LIMIT $limit" : "");
        $r = mysql_query($sql, $this->link);

        $result = array();
        while ($row = mysql_fetch_assoc($r)) {

            $result[$row['id']] = $row;
        }
        return $result;
    }

    public function update($table, array $fields, $where = '') {
        
    }

    public function insert($table, array $fields) 
    {
        $keys = array_keys($fields);
        $values = array_values($fields);
        
        $sql = "
            INSERT INTO '$table'
                           ('.implode(',', $keys).')
                    VALUES ('.implode(',', $values).')";

        mysql_query($sql, $this->link);
    }

    public function delete($table, $where = '', $limit = 1) 
    {
        $sql = "
            DELETE
                FROM $table
                    WHERE true " . (!empty($where) ? "AND $where" : "" )
                                 . (!empty($limit) ? " LIMIT $limit" : "");
        mysql_query($sql, $this->link);
    }

    public function escape($field) {
        return mysql_real_escape_string($field, $this->link);
    }

    /**
     * закрывает подключение к базе
     */
    public function __destruct() {
        mysql_close($this->link);
    }

}
