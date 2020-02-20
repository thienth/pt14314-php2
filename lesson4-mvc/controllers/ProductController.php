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

    public function saveAdd(){
	    $model = new Product();
        // gán dữ liệu cho model
        $model->fill($_POST);
        // validate dữ liệu thêm 1 lần nữa bằng php => form
        // lưu file ảnh
        $image = $_FILES['image'];
        $filename = "";
        if($image['size'] > 0){
            $filename = "public/images/" . uniqid() . '-' . $image['name'];
            move_uploaded_file($image['tmp_name'], $filename);
        }
        $model->image = $filename;
        // lưu dữ liệu với csdl
        $model->insert();
        header('location: ' . BASE_URL);
        die;
    }

    public function checkNameExisted(){
	    $name = $_POST['name'];
        $checkNameQuery = "select * from " . (new Product())->table . " where name = '$name'";
        $data = Product::customQuery($checkNameQuery);
	    echo count($data) == 0 ? "true" : "false";
    }
}

 ?>