<?php 

namespace App\Models;
use mysqli;

class Model{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass =DB_PASSWORD;
    protected $db_name = DB_NAME;
    protected $query;
    protected $conection;
    protected $table;
    public function __construct(){
        $this->connection();
    }
    public function connection(){
        $this->conection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);   
        if($this->conection->connect_error){
            die('Hay un erro en la conexion'. $this->conection->connect_error);
        };
    }

    public function query($query){
        $this->query = $this->conection->query($query);
        return $this;
    }
    public function first() {
        return $this->query->fetch_assoc();
    }
    public function get(){
        return $this->query->fetch_all(MYSQLI_ASSOC);
    } 

    public function all(){
        $this->query = "SELECT * FROM {$this->table}";
        return $this->query($this->query)->get();
    }

    public function find($id){
        $this->query = "SELECT * FROM {$this->table} WHERE id = '{$id}'";
        return $this->query($this->query)->get();
        
    }

    public function where($column, $operator , $value = null){
        if ($value == null) {
            $value = $operator;
            $operator = "=";
        }
        $this->query = "SELECT * FROM {$this->table} WHERE {$column}{$operator}'{$value}'";
        $this->query($this->query);
        return $this;
    }

    public function create($data){
        $columns = array_keys($data);
        $columns = implode(", ", $columns);
        $values = array_values($data);
        $values = "'" . implode("', '", $values) . "'";
        $this->query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $this->query($this->query);

        return $this->conection->insert_id;

    }

    public function update($id, $data){
        $fields=[];
        foreach($data as $key => $value){
            $fields[]="{$key} = '{$value}'";
        }
        $fields = implode(", ", $fields);
        $this->query = "UPDATE {$this->table} SET {$fields} WHERE id = {$id}";
        $this->query($this->query);
        return $this->find($id);
    }

    public function delete($id){
        if ($this->find($id) === []) {
            return 'no esta ese registro';
        }
        $this->query = "DELETE FROM {$this->table} WHERE id = {$id}";
        $this->query($this->query);
        return $this->find($id);
    }
}