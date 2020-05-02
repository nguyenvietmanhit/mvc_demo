<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class ProductController extends Controller
{
    public function index()
    {
        $arr_params = [];


        $product_model = new Product();

        //lấy tổng số bản ghi đang có trong bảng products
        $count_total = $product_model->countTotal();
        //        xử lý phân trang
        $query_additional = '';
        if (isset($_GET['title'])) {
            $query_additional .= '&title=' . $_GET['title'];
        }
        if (isset($_GET['category_id'])) {
            $query_additional .= '&category_id=' . $_GET['category_id'];
        }
        $arr_params = [
            'total' => $count_total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'product',
            'action' => 'index',
            'query_additional' => $query_additional,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $products = $product_model->getAllPagination($arr_params);
        $pagination = new Pagination($arr_params);

        $pages = $pagination->getPagination();

        //lấy danh sách category đang có trên hệ thống để phục vụ cho search
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/products/index.php', [
            'products' => $products,
            'categories' => $categories,
            'pages' => $pages,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create() {
        //xử lý submit form
        if (isset($_POST['submit'])) {
            echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
            print_r($_POST);
            echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
            print_r($_FILES);
            echo "</pre>";
//            die;
            echo "</pre>";
//            die;
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $status = $_POST['status'];
            //xử lý validate
            if (empty($title)) {
                $this->error = 'Không được để trống title';
            } else if ($_FILES['avatar']['error'] == 0) {
                //validate khi có file upload lên thì bắt buộc phải là ảnh và dung lượng không quá 2 Mb
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }

            //nếu ko có lỗi thì tiến hành save dữ liệu
            if (empty($this->error)) {
                //xử lý upload file nếu có
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__
                }
            }
        }

        //lấy danh sách category đang có trên hệ thống để phục vụ cho search
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/products/create.php', [
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
}