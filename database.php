<?php
$hostname = "http://localhost/pushtak2";
class database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "website_main";

    public $mysqli = "";
    private $result = array();
    public $conn = false;

    public function __construct(){
          if(!$this->conn){
              $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
              $this->conn = true;
              if($this->mysqli->connect_error){
                  array_push($this->result,$this->mysqli->connect_error);
                  return false;
              }else{
                  return true;
              }
          }
    }


    public function select($table,$rows="*",$join = null,$where = null, $order = null, $limit= null){
        if($this->tableExists($table)){
          
            $sql = "SELECT $rows FROM $table";

            if($join != null){
                $sql .= " JOIN $join";
            }
            if($where != null){
                $sql .= " WHERE $where";
            }
            if($order != null){
                $sql .= " ORDER BY $order";
            }
            if($limit != null){
                
                if(isset($_GET['page'])){
                   $page = $_GET['page'];
                }else{
                    $page = 1;
                }

                $start = ($page - 1) * $limit;


                $sql .= " LIMIT $start, $limit";
            }
            
            // echo $sql;
            $this->mysqli->set_charset("utf8");
            $query = $this->mysqli->query($sql);
            
            if($query){
             $this->result = $query->fetch_all(MYSQLI_ASSOC);
             return true;
            }else{
             array_push($this->result, $this->mysqli->error);
             return false;
            }

        }else{
            return false;
        }
    }


    public function sql($sql){
        $query = $this->mysqli->query($sql);

        if($query){
         $this->result = $query->fetch_all(MYSQLI_ASSOC);
         return true;
        }else{
         array_push($this->result, $this->mysqli->error);
         return false;
        }
    }

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result,$table."does not exist in this database");
                return false;
            }
        }
    }

    public function getResult(){
        $val = $this->result;
        $this->result = array();
       return $val;
    }

    public function filter_input($data_val) {
        $data_val = trim($data_val);
        $data_val = stripslashes($data_val);
        $data_val = htmlspecialchars($data_val);
        return $data_val;
    }

    public function __destruct(){
       if($this->conn){
           if($this->mysqli->close()){
               $this->conn = false;
               return true;
           }
       }else{
           return false;
       }
    }

    private function ref_values($array) {
        $refs = array();

        foreach ($array as $key => $value) {
            $refs[$key] = &$array[$key]; 
        }

        return $refs; 
    }
    
}

?>