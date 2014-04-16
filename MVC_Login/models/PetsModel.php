<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */

class PetsModel{

    private $dbase;

    public function __construct($data, $user, $pass){
        //$this->dbase = $data;
        $this->dbase = new \PDO($data, $user, $pass);
        $this->dbase->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll(){
        $sql = "
            SELECT *
            FROM PetOwners";
        $statement = $this->dbase->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function getDetailed($id){
        $sql = "
            SELECT *
            FROM PetOwners
            WHERE userId=$id
            ";
        $statement = $this->dbase->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function loginInfo($name, $pass){
        $stmt = $this->dbase->prepare("
            SELECT userId AS id, userName AS name, userPassword AS pass, userSalt
            FROM PetOwners
            WHERE (userName = :name)
              AND (userPassword = MD5(CONCAT(:pass, userSalt)))
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