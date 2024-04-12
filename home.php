<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';
include './convert_currency.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>



   <section class="hero">

      <div class="swiper hero-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="content">
                  <span>BEST SELLER OF 2024</span>
                  <h3>YONEX ASTROX 88D PRO 2024</h3>
                  <span>DEFINITION OF DOUBLE DEFENSE ABILITY</span>

                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/vot-cau-long-yonex-astrox-88d-game-2024-chinh-hang_1711052755.webp" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>BEST SELLER OF 2024</span>
                  <h3>VICTOR THRUSTER RYUGA 2 PRO</h3>
                  <span>INFERNO DOMINATE DOOM DRAGON SERIES     </span>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/vot-cau-long-victor-ryuga-ii-pro-chinh-hang-3_1709607219.webp" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>BEST SELLER OF 2024</span>
                  <h3>LI-NING HALBERTEC 9000</h3>
                  <span>DOUBLE HIGH CONTROL ATTACK ABILITY    </span>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/Vot-cau-long-Lining-Halbertec-9000-chinh-hang-1.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>BEST SELLER OF 2024</span>
                  <h3>MIZUNO ALTIUS 01 SPEED</h3>
                  <span>PHENOMENAL SPIRIT SHARPNESS CONTROL      </span>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/9A3992F2-003D-4CBE-A3B0-5CC6326AA8BC_600x.webp" alt="">
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <section class="category">

      <h1 class="title">Mẫu VỢT HOT</h1>

      <div class="box-container">

         <a href="category.php?category=YONEX" class="box">
            <img src="imgs/yonexlogospecialspg.png" alt="">
            <h3>YONEX</h3>
         </a>

         <a href="category.php?category=VICTOR" class="box">
            <img src="imgs/top-9-thuong-hieu-vot-cau-long-dinh-dam-tai-thi-truong-viet-nam-3.webp" alt="">
            <h3>VICTOR</h3>
         </a>

         <a href="category.php?category=LINING" class="box">
            <img src="imgs/logo-lining-inkythuatso-21-14-56-33.jpg" alt="">
            <h3>LI-NING</h3>
         </a>

         <a href="category.php?category=MIZUNO" class="box">
            <img src="imgs/MIZUNO_logo.svg.png" alt="">
            <h3>MIZUNO</h3>
         </a>

      </div>

   </section>


   <section class="products">

      <h1 class="title">MẪU VỢT MỚI NHẤT</h1>

      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="box">
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                  <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                  <div class="name"><?= $fetch_products['name']; ?></div>
                  <div class="flex">
                     <div class="price"><?php echo currency_format($fetch_products['price']); ?></div>

                     <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                  </div>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">Không có sản phẩm để hiển thị!</p>';
         }
         ?>

      </div>

      <div class="more-btn">
         <a href="./product.php" class="btn">Xem tất cả</a>
      </div>

   </section>



   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".hero-slider", {
         loop: true,
         grabCursor: true,
         effect: "flip",
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });
   </script>

</body>

</html>