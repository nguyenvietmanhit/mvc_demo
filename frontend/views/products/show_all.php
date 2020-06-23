<div class="product-main">

    <div class="container">
        <div class="row">
            <div class="main-left col-md-3 col-sm-3 col-xs-12">
                <h3>Lọc</h3>
                <form action="" method="GET">
                  <?php if (!empty($categories)): ?>
                      <div class="form-group">
                          <b>Danh mục</b> <br/>
                        <?php foreach ($categories AS $category): ?>
                            <input type="checkbox" name="category[]"
                                   value="<?php echo $category['id']; ?>"/> <?php echo $category['name']; ?> <br/>
                        <?php endforeach; ?>
                      </div>
                  <?php endif; ?>

                    <div class="form-group">
                        <b>Khoảng giá</b> <br/>
                        <input type="checkbox" name="price[]" value="1"/> Dưới 1tr <br/>
                        <input type="checkbox" name="price[]" value="2"/> Từ 1 - 2tr <br/>
                        <input type="checkbox" name="price[]" value="3"/> Từ 2 - 3tr <br/>
                        <input type="checkbox" name="price[]" value="4"/> Trên hơn 3tr <br/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="filter" value="Filter" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
            <div class="main-right col-md-9 col-sm-9 col-xs-12">
                <h2>Danh sách sản phẩm</h2>
              <?php if (!empty($products)): ?>
                  <div class="row">
                      <?php foreach ($products AS $product): ?>
                      <div class="product-item col-md-4 col-sm-4 col-xs-12">
                          <a href="chi-tiet/<?php echo $product['id']?>" class="product-link">
                              <img src="../backend/assets/uploads/<?php echo $product['avatar']?>" height="150" class="product-image">
                          </a>
                          <div class="home-page">
                              <a href="#" class="timeline-category-name font-arial"><?php echo $product['category_name']?></a>
                              <a href="chi-tiet/<?php echo $product['id']?>" class="product-link">
                                  <h3 class="timeline-post-title"><?php echo $product['title']?></h3>
                              </a>
                              <div class="product-price timeline-post-info">
                                <?php echo number_format($product['price'])?>đ
                              </div>
                              <div class="timeline-post-info">
                                  <a href="them-vao-gio-hang/<?php echo $product['id']?>" class="product-cart">
                                      Thêm vào giỏ hàng
                                  </a>
                              </div>
                          </div>
                      </div>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>
            </div>
        </div>

    </div>
</div>
</div>

