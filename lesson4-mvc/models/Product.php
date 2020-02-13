<?php
require_once './models/BaseModel.php';
class Product extends BaseModel{
    protected $table = 'products';

    public static function getAll(){
        $model = new static();
        $sql = "select * from " . $model->table;
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $data;
    }

}


?>