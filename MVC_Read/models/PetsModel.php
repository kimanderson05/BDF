<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */

class PetsModel{

    private $dbase;

    public function __construct($data){
        $this->dbase=$data;
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

}