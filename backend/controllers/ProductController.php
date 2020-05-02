<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class ProductController extends Controller
{
    public function index() {
        $arr_params = [];
//        xử lý phân trang
//        $pagination = new Pagination();



        $product_model = new Product();
        $products = $product_model->getAll();

        //lấy tổng số bản ghi đang có trong bảng products
        $count_total = $product_model->countTotal();

        //lấy danh sách category đang có trên hệ thống để phục vụ cho search
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/products/index.php', [
            'products' => $products,
            'categories' => $categories,
        ]);
        require_once 'views/layouts/main.php';
    }
}