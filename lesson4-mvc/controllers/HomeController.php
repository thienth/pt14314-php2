<?php
namespace Controllers;
use Models\Product;
class HomeController{


	public function index(){
		$products = Product::all();
//		$products = Product::where('price', '>=', 1000)->get();
		include_once './views/home/index.php';
	}

}


 ?>