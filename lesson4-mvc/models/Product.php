<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'views',
                            'short_desc', 'star', 'detail'];
    protected $attributes = [
        'image' => "public/images/default-image.jpg",
    ];
}


?>