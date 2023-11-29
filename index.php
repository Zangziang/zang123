<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Web bán điện máy</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/styles.css">
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<?php
	session_start();
	include "moder/pdo.php";
	include "moder/danhmuc.php";
	include "moder/sanpham.php";
	include "moder/taikhoan.php";
	include "moder/cart.php";
	include "view/header.php";
	include "global.php";

	if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

	$spnew = loadall_sanpham_home();
	$dsdm = loadall_danhmuc();
	$dstop10 = loadall_sanpham_top10();

	if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
		$act = $_GET['act'];
		switch ($act) {
			case 'sanpham':
				if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
					$kyw = $_POST['kyw'];
				} else {
					$kyw = "";
				}
				if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
					$iddm = $_GET['iddm'];
				} else {
					$iddm = 0;
				}
				$dssp = loadall_sanpham($kyw, $iddm);
				$tendm = load_ten_dm($iddm);
				include "view/sanpham.php";
				break;
			case 'sanphamct':
				if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
					$id = $_GET['idsp'];
					$onesp = loadone_sanpham($id);
					extract($onesp);
					$sp_cung_loai = load_sanpham_cungloai($id, $iddm);
					include "view/sanphamct.php";
				} else {
					include "view/home.php";
				}

				break;
			case 'dangky':
				if (isset($_POST['dangky']) && ($_POST['dangky'])) {
					$email = $_POST['email'];
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					insert_taikhoan($email, $user, $pass);
					$thongbao = "Đăng Ký Tài Khoản Thành Công!";
				}
				include "view/taikhoan/dangky.php";
				break;


			case 'dangnhap':
				if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$checkuser = checkuser($user, $pass);
					if (is_array($checkuser)) {
						$_SESSION['user'] = $checkuser;
						//$thongbao = "Đăng nhập thành công!";
						header('Location: index.php');
					} else {
						$thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại tài khoản hoặc mật khẩu!";
					}
				}
				include "view/taikhoan/dangnhap.php";
				break;
			case 'edit_taikhoan':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$tell = $_POST['tell'];
					$id = $_POST['id'];

					update_taikhoan($id, $user, $pass, $email, $address, $tell);
					$_SESSION['user'] = checkuser($user, $pass);
					header('Location: index.php?act=edit_taikhoan');
				}
				include "view/taikhoan/edit_taikhoan.php";
				break;
			case 'quenmk':
				if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
					$email = $_POST['email'];
					$checkemail = checkemail($email);
					if (is_array($checkemail)) {
						$thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
					} else {
						$thongbao = "Email không tồn tại!";
					}
				}
				include "view/taikhoan/quenmk.php";
				break;

			case 'thoat':
				session_unset();
				header('Location: index.php');
				include "view/home.php";
				break;

			case 'addtocart':
				if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
					$id = $_POST['id'];
					$name = $_POST['name'];
					$img = $_POST['img'];
					$price = $_POST['price'];
					$soluong = 1;
					$ttien = $soluong * $price;
					$spadd = [$id, $name, $img, $price, $soluong, $ttien];
					array_push($_SESSION['mycart'], $spadd);
				}
				include "view/cart/viewcart.php";
				break;

			case 'delcart':
				if (isset($_GET['idcart'])) {
					array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
				} else {
					$_SESSION['mycart'] = [];
				}

				include "view/cart/viewcart.php";

				break;

			case 'bill':
				include "view/cart/bill.php";
				break;

			case 'billcomfirm':

				if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
					if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
					else $id=0;
					$name = $_POST['name'];
					$address = $_POST['address'];
					$email = $_POST['email'];
					$tel = $_POST['tel'];
					$pttt = $_POST['pttt'];
					$ngaydathang = date('h:i:sa d/m/Y');
					$tongdonhang = tongdonhang();
					// tao bill
					$idbill = insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang,$tongdonhang);

					//insert into cart: $session['mycart'] & idbill
					foreach ($_SESSION['mycart'] as $cart) {
						insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
					}

					//xoa session
					$_SESSION['cart'] = [];
				}
				$bill = loadone_bill($idbill);
				$billct = loadall_cart($idbill);
				include "view/cart/billcomfirm.php";
				break;

			case 'mybill':
				$listbill=loadall_bill($_SESSION['user']['id']);
				include "view/cart/mybill.php";
				break;

			case 'gioithieu':
				include "view/gioithieu.php";
				break;

			case 'lienhe':
				include "view/lienhe.php";
				break;
			default:
				include "view/home.php";
				break;
		}
	} else {
		include "view/home.php";
	}
	include "view/footer.php";
	?>
	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<!--  <script src="js/minicart.js"></script> -->
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function(evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function() {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>