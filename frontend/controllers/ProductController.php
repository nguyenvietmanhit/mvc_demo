<?php
require_once 'controllers/Controller.php';
class ProductController extends Controller {
  public function showAll() {
    $this->content = $this->render('views/products/show_all.php');
    //show danh sách category bên sidebar left

    require_once 'views/layouts/main_product.php';
  }
}