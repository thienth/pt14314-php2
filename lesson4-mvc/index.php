<?php 

require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";


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
	case 'danh-sach-sp':
		$ctr = new ProductController();
		$ctr->list();
		break;
	
	default:
		# code...
		break;
}

 ?>