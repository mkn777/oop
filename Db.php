<?php


class Db
{

    public $table;

    private $mypr;

    private static $a;

    public static $bo;

    public function all()
    {
        //self::$bo;
        //static::$bo;
        return "select * from {$this->table}";


    }

    public function delete($id)
    {
        return "delete from {$this->table} where id = {$id}";

    }

    public function find($id , $columns = null){

        $columns = !is_null($columns)?  implode(',', $columns): '*';
        echo "select $columns from {$this->table} where id = {$id} ";
    }



}

$connection = new Db();
$connection->table = 'ali';
$connection->find(56 , array('id ', 'name' ));




?>