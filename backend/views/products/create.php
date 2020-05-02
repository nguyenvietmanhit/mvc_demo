<h2>Thêm mới sản phẩm</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category_id">Chọn danh mục</label>
        <select name="category_id" class="form-control" id="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>">
                    <?php echo $category['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Nhập tên sản phẩm</label>
        <input type="text" name="title" value="" class="form-control" id="title" />
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh đại diện</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar" />
    </div>
    <div class="form-group">
        <label for="price">Giá</label>
        <input type="number" name="price" value="" class="form-control" id="price" />
    </div>
    <div class="form-group">
        <label for="summary">Mô tả ngắn sản phẩm</label>
        <textarea name="summary" id="summary" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="description">Mô tả chi tiết sản phẩm</label>
        <textarea name="content" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="status">Trạng thái</label>
        <select name="status" class="form-control" id="status">
            <option value="0">Disabled</option>
            <option value="1">Active</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
        <a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>
    </div>
</form>