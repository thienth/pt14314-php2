<?php
require_once './models/BaseModel.php';
class Product extends BaseModel{
    public $table = 'products';
    protected $fillable = ['name', 'price', 'views',
                            'short_desc', 'star', 'detail'];
    public function insert(){
        try{
            $insertQuery = "insert into $this->table 
                          (name, price, views,
                            short_desc, star, detail, image)
                        values 
                             ('$this->name', '$this->price', '$this->views',
                            '$this->short_desc', '$this->star', '$this->detail', '$this->image')";
            $stmt = $this->connect->prepare($insertQuery);
            $stmt->execute();
            return true;
        }catch (Exception $ex){
            var_dump($ex->getMessage());
            return false;
        }

    }
}


?>