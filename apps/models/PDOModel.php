<?php
/**
 * @author tguillouet
 */
class PDOModel
{
    /**
     * @param String $host : The host name for your SQL DDB
     * @param String $dbName : The name of the ddb
     * @param String $login : The username used to be connected to the ddb (usually 'root')
     * @param String $password : The password used to be connected to the ddb (usually 'root' or '')
     */
    public function __construct($host, $dbName, $login, $password)
    {
        try {
            $this->db = new PDO("mysql:host=" . trim($host) . ";dbname=" . trim($dbName), trim($login), trim($password));
        } catch (PDOException $e) {
            echo 'Unable to connect to the database. <br/>';
            echo $e->getMessage() . '<br/>';
        }
    }

    /**
     * @param String $query : The SQL Query string
     * @param Array $param : The params of the SQL statement
     */
    public function select($query, $params = array())
    {
        if (isset($this->db) && !empty($this->db)) {
            $q = $this->db->prepare($query);
            $q->execute($params);
            $q->setFetchMode(PDO::FETCH_ASSOC);

            $res = $q->fetchAll();

            $obj = array();
            for ($i = 0; $i < sizeof($res); $i++) {
                array_push($obj, (object) $res[$i]);
            }

            if (isset($res)) {
                $out = new stdClass();
                $out->rows = $obj;
                $out->size = sizeof($res);
            }
            return $out;
        }
        return array('Error', 'The database isn\'t setup');
    }

    /**
     * @param String $query : The SQL Query string
     * @param Array $param : The params of the SQL statement
     */
    public function request($query, $params = array()) {
        $query = $this->db->prepare($query);
        $query->execute($params);
    }

    public function getEnum($table, $column) {
        $q = "SELECT SUBSTR(COLUMN_TYPE, 5) AS enum FROM information_schema.`COLUMNS` WHERE TABLE_NAME = '$table' AND COLUMN_NAME = '$column';";
        $result = $this->select($q)->rows;

        $m = array();
        preg_match_all("/([^'^(^)^,]+)/", $result[0]->enum, $m); // To take only the name of the payment method
        unset($m[1]);

        return $m[0];
    }
}
