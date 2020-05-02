<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class ProductController extends Controller
{
    public function index() {
        $arr_params = [];
        //nếu có hành động search thì truyền lại param
        if (isset($_GET['search'])) {
            $title = $_GET['title'];
            $category_id = $_GET['category_id'];
            $arr_params['title'] = $title;
            $arr_params['category_id'] = $category_id;
        }

//        xử lý phân trang
        $pagination = new Pagination();


        $product_model = new Product();
        $products = $product_model->getAll($arr_params);

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