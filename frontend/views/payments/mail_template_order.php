<?php
echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r($_SESSION);
echo "</pre>";
die;
?>
<h2>Cảm ơn bạn đã đặt hàng, <b><?php echo $order_model->fullname; ?></b></h2>
<p>
    Mã đơn hàng của bạn: <b>#<?php echo $order_model->id; ?></b>
</p>
<p>
    Số tiền cần thanh toán: <b><?php echo number_format($order_model->price_total, 0, '.', '.'); ?>đ</b>
</p>
<div>
    <p>
        - Để thanh toán đơn hàng, bạn hãy chuyển khoản theo thông tin sau:
        <br/>
        <b>
            BIDV NGUYEN VIET MANH <br/>
            112121212121111111 <br/>
            Chi nhành Hà Nội <br/>
        </b>
        Nội dung chuyển khoản: Thanh toán đơn hàng #<?php echo $order_model->id; ?>
    </p>
    <p>
        - Hoặc bạn có thể liên hệ trực tiếp với chúng tôi qua số điện thoại:
        <a href="tel:0879123123">0987599921</a>
    </p>
</div>
<h4>Thông tin người mua hàng</h4>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
    </tr>
    <tr>
        <td><?php echo $order_model->fullname; ?></td>
        <td><?php echo $order_model->mobile; ?></td>
        <td><?php echo $order_model->email; ?></td>
        <td><?php echo $order_model->address; ?></td>
    </tr>
</table>
<br/>
<h4>Thông tin đơn hàng</h4>
<table border="1" cellpadding="8" cellspacing="0">
    <tbody>
    <tr>
        <th width="40%">Tên sản phẩm</th>
        <th width="12%">Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
    </tr>

    <?php
    //khai báo 1 biến chứa tổng giá trị đơn hàng
    $url_camping = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    foreach ($_SESSION['cart'] AS $product_id => $cart):
      ?>
        <tr>
            <td>
                <a href="<?php echo $cart['url_friendly']; ?>" class="content-product-a">
                    <img class="product-avatar img-responsive"
                         src="<?php echo $url_camping . '/' . $cart['avatar'] ?>"
                         height="80">
                    <span class="content-product">
                                                                                            <?php echo $cart['name']; ?>
                                        </span>
                </a>
            </td>
            <td>
              <?php echo $cart['quantity'] ?>
            </td>
            <td>
              <?php echo number_format($cart['price'], 0, '.', '.'); ?>đ
            </td>
            <td>
              <?php
              //thành tiền
              $total_item = $cart['price'] * $cart['quantity'];
              echo number_format($total_item, 0, '.', '.');
              ?>đ
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="5" style="text-align: right">
            Tổng giá trị đơn hàng:
            <span class="product-price">
                      <?php
                      echo number_format($order_model->price_total, 0, '.', '.');
                      ?>đ
                    </span>
        </td>
    </tr>
    </tbody>
</table>
