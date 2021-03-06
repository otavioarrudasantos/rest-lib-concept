<?php
namespace Xosq\Inspiration\Database;

use Xosq\Inspiration\Database\Model;
use Xosq\Inspiration\DataProvider\DataProviderInterface;
use Xosq\Inspiration\Database\Connection;
use Xosq\Inspiration\DataProvider\DatabaseProviderFactory;

class DatabaseProvider implements DataProviderInterface{

    public static $factory;

    public $dataDriver;

    public $entity;

    public function getEntity(){
        return $this->entity;
    }
    public function setEntity($entity){
        $this->entity= $entity;
    }

    public function getDataDriver(){
        return $this->dataDriver;
    }
    public function setDataDriver($dataDriver){
        $this->dataDriver = $dataDriver;
    }

    public function findAll(){
      
    }
 
    public function find($id){

    }

    public function insert($data){

    }

    public function update($id, $data){

    }

    public function delete($id){

    }

    public static function getFactory(){
        if(!isset(self::$factory)){
            self::$factory = new DatabaseProviderFactory();    
            return self::$factory;
        }

        return self::$factory;
        
     }

}
