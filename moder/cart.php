<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    
    // Bắt đầu một phiên nếu chưa được bắt đầu
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kiểm tra nếu biến session 'mycart' chưa được thiết lập, khởi tạo nó là một mảng rỗng
    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }

    if ($del == 1) {
        $xoa_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoa_th = '';
        $xoasp_td2 = '';
    }
    echo ' <tr>
    <th>Hình</th>
    <th>Sản Phẩm</th>
    <th>Đơn Giá </th>
    <th>Số Lượng</th>
    <th>Thành Tiền</th>
    ' . $xoa_th . '
    </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xóa"></a>';
        } else {
            $xoasp_td = '';
        }

        echo '
        <tr>
                <td><img src="' . $hinh . '" alt="" height="100px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . number_format($cart[3], 0, ",", ".") . '<u>đ</u></td>
                <td><input type="number" class="quantity-input" value="' . $cart[4] . '" min="1" oninput="updateQuantity(this, ' . $i . ')"></td>

                <td>' . number_format($ttien, 0, ",", ".") . '<u>đ</u></td>
                 ' . $xoasp_td . '
            </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4"><h4>Tổng tiền</h4></td>
            <td><h4>' . number_format($tong, 0, ",", ".") . '<u>đ</u></h4></td>
            ' . $xoasp_td2 . '
            </tr>';
}

function addToCart($product_id, $quantity) {
    // Bắt đầu một phiên nếu chưa được bắt đầu
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kiểm tra nếu biến session 'mycart' chưa được thiết lập, khởi tạo nó là một mảng rỗng
    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    $product_exists = false;
    foreach ($_SESSION['mycart'] as &$cart_item) {
        if ($cart_item[0] == $product_id) {
            // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
            $cart_item[4] += $quantity;
            $product_exists = true;
            break;
        }
    }

    // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới vào giỏ hàng
    if (!$product_exists) {
        // Thực hiện lấy thông tin sản phẩm từ cơ sở dữ liệu hoặc nơi khác
        $product_info = getProductInfo($product_id);

        // Thêm thông tin sản phẩm vào giỏ hàng
        $cart_item = array(
            $product_id,
            $product_info['product_name'],
            $product_info['image_path'],
            $product_info['price'],
            $quantity
        );

        // Thêm sản phẩm vào mảng giỏ hàng trong session
        $_SESSION['mycart'][] = $cart_item;
    }
}

function getProductInfo($product_id) {
    // Thực hiện lấy thông tin sản phẩm từ cơ sở dữ liệu hoặc nơi khác
    // Lưu ý: Hàm này cần được cập nhật để phản ánh cách bạn lấy thông tin sản phẩm
    // Dưới đây chỉ là một ví dụ đơn giản
    $product_info = array(
        'product_name' => 'Tên sản phẩm',
        'image_path' => 'duong/dan/toi/hinh-anh.jpg',
        'price' => 100000, // Giá sản phẩm
        // Các thông tin khác về sản phẩm có thể được thêm vào đây
    );

    return $product_info;
}

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo ' <tr>
    <th>Hình</th>
    <th>Sản Phẩm</th>
    <th>Đơn Giá </th>
    <th>Số Lượng</th>
    <th>Thành Tiền</th>
    </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
        <tr>
                <td><img src="' . $hinh . '" alt="" height="100px"></td>
                <td>' . $cart['name'] . '</td>
                <td>' .  number_format($cart['price'],0,",",".") . '<u>đ</u></td>
                <td>' . $cart['soluong'] . '</td>
                <td>' . number_format($cart['thanhtien'],0,",",".") . '<u>đ</u></td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng tiền</td>
            <td>' .number_format($tong,0 ,",",".") . '<u>đ</u></td>
        </tr>';
}

function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $idbill = pdo_query($sql);
    return $idbill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $idbill = pdo_query($sql);
    return sizeof($idbill);
}
function loadall_bill($kyw="",$iduser=0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
