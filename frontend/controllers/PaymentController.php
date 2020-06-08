<?php
require_once 'controllers/Controller.php';

class PaymentController extends Controller {
  public function index() {
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

      }
    }


    $this->content = $this->render('views/payments/index.php');

    require_once 'views/layouts/main.php';
  }
}