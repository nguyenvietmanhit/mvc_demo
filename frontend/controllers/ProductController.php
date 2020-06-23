<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
class ProductController extends Controller {
  public function showAll() {
    //get products
    $product_model = new Product();
    $products = $product_model->getProductInHomePage();

    //get categories để filter
    $category_model = new Category();
    $categories = $category_model->getAll();

    $this->content = $this->render('views/products/show_all.php', [
      'products' => $products,
      'categories' => $categories,
    ]);
    //show danh sách category bên sidebar left

    require_once 'views/layouts/main_product.php';
  }
}