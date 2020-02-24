<?php 
session_start();
require_once './commons/helpers.php';

require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';
require_once './controllers/CategoryController.php';
require_once './models/BaseModel.php';
require_once './models/Category.php';
require_once './models/Product.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

use Controllers\HomeController;
use Controllers\ProductController;

switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
		break;
	case 'gioi-thieu':
		$ctr = new HomeController();
		$ctr->about();
		break;
	case 'chi-tiet-sp':
		$ctr = new ProductController();
		$ctr->detail();
		break;
	case 'remove-product':
		$ctr = new ProductController();
		$ctr->remove();
		break;
	case 'check-product-name':
		$ctr = new ProductController();
		$ctr->checkNameExisted();
		break;
	case 'save-add-product':
		$ctr = new ProductController();
		$ctr->saveAdd();
		break;
	case 'add-product':
		$ctr = new ProductController();
		$ctr->addForm();
		break;
	case 'edit-product':
		$ctr = new ProductController();
		$ctr->editForm();
		break;
	case 'save-edit-product':
		$ctr = new ProductController();
		$ctr->saveEdit();
		break;
	
	default:
		# code...
		break;
}

 ?>