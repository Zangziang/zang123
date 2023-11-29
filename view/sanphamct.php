<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php

                $img = $img_path . $img;
                echo "<div class='row mb spct'><img src='$img' width='200' hight='200'></div>";
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>
        <div class="row" id="binhluan">
        </div>
        <div class="row mb">
            <div class="boxtitle">Sản Phẩm cùng Loại</div>
            <div class="row boxcontent">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $img = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<div class="row mb10 top10">
                   <a href=""><img src="' . $img . '" alt=""></a>';
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
        <div class="side-bar p-sm-4 p-3">
            <div class="search-hotel border-bottom py-2">
                <h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
                <form action="#" method="post">
                    <input type="search" placeholder="Sản phẩm..." name="search" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <!-- price -->
            <div class="range border-bottom py-2">
                <h3 class="agileits-sear-head mb-3">Giá</h3>
                <div class="w3l-range">
                    <ul>
                        <li>
                            <a href="#">Dưới 1 triệu</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- //price -->

            <!-- reviews -->
            <div class="customer-rev border-bottom left-side py-2">
                <h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- //reviews -->
            <!-- electronics -->
            <div class="left-side border-bottom py-2">

                <h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li>
                                        <a href="' . $linkdm . '">' . $name . '</a>
                                     </li>';
                    }
                    ?>
                    <li>
                </ul>
            </div>
            <div class="boxfooter searbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm Kiếm">
                </form>
            </div>
            <!-- //electronics -->


            <!-- best seller -->
            <div class="f-grid py-2">
                <h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
                <div class="box-scroll">
                    <div class="scroll row boxcontent">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            $img = $img_path . $img;
                            echo '<div class="row mb10 top10">
                                            <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                                            <a href="' . $linksp . '">' . $name . '</a>
                                        </div>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            <!-- //best seller -->
        </div>
        <!-- //product right -->
    </div>
</div>
</div>
</div>
<!-- //top products -->