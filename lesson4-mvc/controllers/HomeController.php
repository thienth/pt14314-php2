<?php
namespace Controllers;
use Models\Product;
class HomeController extends BaseController {


	public function index(){
		$products = Product::all();
		include_once './views/home/index.php';
	}

	public function demoLayout(){

	    $this->render('home.test-content', ['name' => 'thienth', 'age' => 30]);
    }

}


 ?>