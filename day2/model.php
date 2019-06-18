<?php
include_once "./db_connections.php";

class Model{
 
    // database connection and table name
    private $conn;
    private $table_name = "table1";
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function get($_key){
        $query = "SELECT `_key`, `value` FROM `table1` WHERE _key = :key";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":key",$_key,PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}

$db = new Database();
$model = new Model($db->getConnection());
$data = $model->get("greet");
echo $data['value'];

?>