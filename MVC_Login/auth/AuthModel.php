<?php

class AuthModel {

    public $db;

    public function __construct($dsn, $user, $pass){
        $this->db = new \PDO($dsn, $user, $pass);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getUserByNamePass($name, $pass){
        $stmt = $this->db->prepare("
            SELECT userId AS id, userName AS name, userPass AS pass
            FROM PetOwners
            WHERE (userName = :name)
              AND (userPassword = :pass)
        ");

        if ($stmt->execute(array(':name' => $name, ':pass' => $pass))){
            $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if(count($rows)=== 1){
                return $rows[0];
            }
        }
        return FALSE;
    }
} 