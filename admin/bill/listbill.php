<div class="row">
            <div class="row frmtitle mb">
                <h1>Danh Sách Đơn Hàng</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" >
                    <select name="iddm" >
                        <option value="0" selected>Tất Cả</option>
                        <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>                      
                    </select>
                    <input type="submit" name="listok" value="Tìm Kiếm">
                </form>
            <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Số lượng Hàng</th>
                        <th>Giá Đơn Hàng</th>
                        <th>Tình Trạng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                        foreach($listbill as $bill){
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br>'.$bill["bill_email"].'
                            <br>'.$bill["bill_address"].'
                            <br>'.$bill["bill_tel"];
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill["id"]);
                            echo'
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td><strong>'.$bill["total"].'</strong></td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill["ngaydathang"].'</td>
                                <td><input type="button" value="sửa"><a href="index.php?act=billcomfirm"><input type="button" value="chi tiết sản phẩm"></a></td>
                            </tr>
                            ';
                        }
                    
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xóa Các Mục Đã Chọn">
            </div>
            </div>
        </div>
