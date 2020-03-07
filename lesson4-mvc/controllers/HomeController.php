<?php
namespace Controllers;
use Models\Product;
use Models\User;
class HomeController extends BaseController {


	public function index(){
		$products = Product::all();
		include_once './views/home/index.php';
	}

	public function dashboard(){
        $totalUser = User::count();
        
	    $this->render('admin.dashboard', [
	        'userCount' => $totalUser

        ]);
    }
}


 ?>