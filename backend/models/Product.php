<?php
require_once 'models/Model.php';
class Product extends Model
{
    /**
     * Lấy thông tin của sản phẩm đang có trên hệ thống
     * @param array $arr_params Mảng các tham số search nếu có
     * @return array
     */
    public function getAll($arr_params = []) {
        $str_search = '';
        if (isset($arr_params['title']) && !empty($arr_params['title'])) {
            $str_search .= " AND products.title LIKE '%{$arr_params['title']}%'";
        }
        if (isset($arr_params['category_id']) && !empty($arr_params['category_id'])) {
            $str_search .= " AND products.category_id = {$arr_params['category_id']}";
        }
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = products.category_id
                        WHERE TRUE $str_search
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
}