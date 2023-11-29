<!-- top-header -->
<div class="agile-main-top">
	<div class="container-fluid">
		<div class="row main-top-w3l py-2">
			<div class="col-lg-4 header-most-top">

			</div>
			<div class="col-lg-8 header-right mt-lg-0 mt-2">
				<!-- header lists -->
				<ul>
					<li class="text-center border-right text-white">
						<i class="fas fa-phone mr-2"></i> 0909999999
					</li>
					<li class="text-center border-right text-white">
						<a href="index.php?act=dangnhap" data-toggle="modal" data-target="#dangnhap" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
					</li>
					<li class="text-center text-white">
						<a href="index.php?act=dangky" data-toggle="modal" data-target="#dangky" class="text-white">
							<i class="fas fa-sign-out-alt mr-2"></i>Đăng ký </a>
					</li>
				</ul>
				<!-- //header lists -->
			</div>
		</div>
	</div>
</div>
<!-- //top-header -->


<!-- header-bottom-->
<div class="header-bot">
	<div class="container">
		<div class="row header-bot_inner_wthreeinfo_header_mid">
			<!-- logo -->
			<div class="col-md-3 logo_agile">
				<h1 class="text-center">
					<a href="index.php" class="font-weight-bold font-italic">
						<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
					</a>
				</h1>
			</div>
			<!-- //logo -->
			
			<!-- header-bot -->
			<div class="col-md-9 header mt-4 mb-md-0 mb-4">
				<div class="row">
					<!-- search -->
					<div class="col-10 agileits_search">
						<form class="form-inline" action="index.php?act=sanpham" method="POST">
							<input class="form-control mr-sm-2" name="kyw" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
							<button class="btn my-2 my-sm-0" name="timkiem" type="submit">Tìm kiếm</button>
						</form>
					</div>
					<!-- //search -->
					<!-- cart details -->
					<!-- //cart details -->
				</div>
				<div class="row mb menu">
					<ul>
						<li><a href="index.php">Trang Chủ </a></li>
						<li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
						<li><a href="index.php?act=lienhe">Liên Hệ</a></li>
						<li><a href="index.php?act=gopy">Gợi Ý</a></li>
						<li><a href="index.php?act=binhluan">Tin Tức</a></li>
						<li><a href="index.php?act=mybill">Giỏ hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="boxbanner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 3</div> -->
                        <img src="./images/1.jpg"  style="width:1000px">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides fade">
                        <!-- <div class="numbertext">2 / 3</div> -->
                        <img src="./images/2.jpg"  style="width:1000px">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                        <!-- <div class="numbertext">3 / 3</div> -->
                        <img src="./images/3.jpg"  style="width:1000px">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
				<!-- slideshow JS -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->