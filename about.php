<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giới thiệu</title>
   <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>ABOUT US </h3>
      <p><a href="home.php">Trang chủ</a> <span> / Giới thiệu</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="./imgs/Axelsen_Short_810x540_201909.webp" alt="">
         </div>

         <div class="content">
            <h3>Hồ sơ của chúng tôi</h3>
            <p>Giao hàng toàn quốc, qúy khách hàng vui lòng thanh toán tiền trước, phí ship vui lòng thanh toán cho nhân viên bưu điện lúc nhận hàng. Miễn phí ship khu vực nội TPHCM</p>
            <a href="./product.php" class="btn">Sản phẩm</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="title">Các bước mua hàng</h1>

      <div class="box-container">

         <div class="box">
            <img src="imgs/step-1.png" alt="">
            <h3>Chọn sản phẩm</h3>
            <p>Nhấn vào sản phẩm muốn mua, thêm vào giỏ hàng và điền thông tin thanh toán.</p>
         </div>

         <div class="box">
            <img src="imgs/step-2.png" alt="">
            <h3>Giao hàng nhanh</h3>
            <p>Giao hàng toàn quốc trong vòng 3 ngày, quý khách vui lòng thanh toán khi nhận hàng.</p>
         </div>

         <div class="box">
            <img src="imgs/5475166.png" alt="">
            <h3>Đập hộp thôi</h3>
            <p>Chúc quý khách sử dụng sản phẩm tốt lành, đừng quên giới thiệu cho bạn bè biết.</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="title">Đội ngũ nhân viên</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="./imgs/jack.jpg" alt="">
               <h3>TRỊNH TRẦN PHƯƠNG TUẤN</h3>
               <p>QUẢN LÝ
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/9._ma_roc_1-0_bo_dao_nha_ronaldo_khoc.jpg" alt="">
               <h3>KIM RI CHA</h3>
               <p>
NHÂN VIÊN BÁN HÀNG               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/messi-khoc.jpg" alt="">
               <h3>MOHAMAD AL SATIJ</h3>
               <p>
NHÂN VIÊN BÁN HÀNG               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/2nam-ngan-dong-gui-xe-de-di-hoc-khong-co-phai-bo-luon-ca-buoi-hoc-kicm-1643283976137635395855.webp" alt="">
               <h3>K-ICM</h3>
               <p>
NHÂN VIÊN BÁN HÀNG               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/imagesSSSSS.jpg" alt="">
               <h3>TRUNG TẤN PHAN</h3>
               <p>
NHÂN VIÊN BÁN HÀNG               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/g1-9496-1699257565.jpg" alt="">
               <h3>Nguyễn Thanh Tùng</h3>
               <p>
                  Nguyễn Thanh Tùng, thường được biết đến với nghệ danh Sơn Tùng M-TP, là nhân viên mới của shop.
                  Có khiếu ăn nói nên được khách hàng mến mộ rất nhiều.
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- reviews section ends -->




   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=






   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            700: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>