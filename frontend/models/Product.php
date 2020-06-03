<?php
require_once 'models/Model.php';
class Product extends Model {

  public function getProductInHomePage() {
    //do cả 2 bảng products và categories đều có trường name, nên cần phải thay đổi lại tên cột cho 1 trong 2 bảng
    $sql_select = "SELECT products.*, categories.name 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          WHERE products.status = 1";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $products;
  }
}