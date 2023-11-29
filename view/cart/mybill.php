<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đơn hàng của bạn</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th></th>
                        <th>STT</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Số lượng</th>
                        <th>Tổng giá trị</th>
                        <th>Tình trạng</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '
                            <tr>
                                <td><td>
                                <td>DAM-' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>'.$countsp.'</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $ttdh . '</td>
                            ';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>