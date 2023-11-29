<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/".$img;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' height='80'>";
} else {
    $hinh = "no photo";
}


?>

<div class="row">
    <div class="row frmtitle">
        <h1>Cập Nhật Loại Hàng Hóa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất Cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if ($iddm == $danhmuc['id'])
                        echo '<option value="' . $danhmuc['id'] . '"  selected>' . $danhmuc['name'] . '</option>';
                    else
                        echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm: <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Giá: <br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình sản phẩm: <br>
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Mô Tả: <br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>