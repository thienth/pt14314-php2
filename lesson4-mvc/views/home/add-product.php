<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .img-preview{
            min-height: 125px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="<?= BASE_URL . 'save-add-product'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục sản phẩm</label>
                        <select name="cate_id" class="form-control">
                            <?php foreach ($cates as $ca):?>
                            <option value="<?= $ca->id ?>"><?= $ca->cate_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm<span class="text-danger">*</span></label>
                        <input type="number" name="price" class="form-control" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng views</label>
                        <input type="number" name="views" class="form-control" placeholder="Nhập số lượt xem sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="short_desc" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="img-preview"></div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm<span class="text-danger">*</span></label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Số sao</label>
                        <input type="number" step="0.1" name="star" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="detail" class="form-control" rows="7"></textarea>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                    <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(document).ready(function(){

    });
</script>
</body>
</html>