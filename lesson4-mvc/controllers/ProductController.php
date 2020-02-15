<?php 

require_once './models/Product.php';
require_once './models/Category.php';
class ProductController{
	public function detail(){
		echo "Trang chi tiet san pham";
	}

	public function remove(){
        // 1. lấy thông tin product id từ đường dẫn
        $proid = isset($_GET['id']) ? $_GET['id'] : -1;
        if($proid == -1){
            header("location: " . BASE_URL . "?msg=id không tồn tại");
            die;
        }

        // 2. thực hiện xóa
        if(Product::destroy($proid)){
            header("location: " . BASE_URL . "?msg=Xóa sản phẩm thành công!");
            die;
        }

        header("location: " . BASE_URL . "?msg=Xóa không thành công!");
        die;
    }

    public function addForm(){
	    $cates = Category::getAll();
	    include_once './views/home/add-product.php';
    }
}

 ?>