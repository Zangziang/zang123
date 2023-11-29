
<div class="row boxcontent formtaikhoan">
     <form action="index.php?act=dangky" method="post">
         <div class="row mb10">
             Email:
             <input type="email" name="email" required>
         </div>
         <div class="row mb10">
             Tên đăng nhập:
             <input type="text" name="user" required>
         </div>
         <div class="row mb10">
             Mật khẩu:
             <input type="password" name="pass" required>
         </div>
         <div class="row mb10">
             <input type="submit" value="Đăng Ký" name="dangky">
             <input type="reset" value="Nhập lại">
         </div>
     </form>
 </div>
 <h2 class="thongbao">
         <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
     </h2>