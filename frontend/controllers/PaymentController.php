<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';

class PaymentController extends Controller {
  public function index() {
    //nếu giỏ hàng trống thì ko cho phép truy cập trang này
    if (!isset($_SESSION['cart'])) {
      $_SESSION['error'] = 'Bạn chưa có sản phẩm nào trong giỏ hàng';
      header("Location: index.php");
      exit();
    }

    if (isset($_POST['submit'])) {
      $fullname = $_POST['fullname'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $note = $_POST['note'];
      if (empty($fullname) || empty($address) || empty($mobile)) {
        $this->error = 'Fullname, address, mobile ko đc để trống';
      }

      if (empty($this->error)) {
        $order_model = new Order();
        $order_model->fullname = $fullname;
        $order_model->address = $address;
        $order_model->mobile = $mobile;
        $order_model->email = $email;
        $order_model->note = $note;
        $price_total = 0;
        foreach ($_SESSION['cart'] as $cart) {
          $price_total += $cart['quality'] * $cart['price'];
        }
        $order_model->price_total = $price_total;
        //mặc định là chưa thanh toán
        $order_model->payment_status = 0;
        //lưu vào bảng orders
        $order_id = $order_model->insert();
        if ($order_id > 0) {
          //lưu vào bảng order_details
          $order_detail = new OrderDetail();
          $order_detail->order_id = $order_id;
          foreach ($_SESSION['cart'] AS $product_id => $cart) {
            $order_detail->product_id = $product_id;
            $order_detail->quality = $cart['quality'];
            $order_detail->insert();
          }

          //lưu thông tin thanh toán vào session để tới trang thanh toán
          $order = $order_model->getOrder($order_id);
          //xóa thông tin giỏ hàng
          unset($_SESSION['cart']);
          $_SESSION['order'] = $order;
          $_SESSION['success'] = 'Lưu thông tin thanh toán thành công';
          header("Location: phuong-thuc-thanh-toan");
          exit();
        } else {
          $_SESSION['error'] = 'Lưu thông tin thanh toán thất bại';
          header("Location: thanh-toan");
          exit();
        }


      }
    }


    $this->content = $this->render('views/payments/index.php');

    require_once 'views/layouts/main.php';
  }
}