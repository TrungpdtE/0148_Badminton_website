<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:admin_login.php');
};

if (isset($_POST['update_payment'])) {

   $order_id = $_POST['order_id'];
   $payment_status = $_POST['payment_status'];
   $update_status = $conn->prepare("UPDATE `orders` SET payment_status = ? WHERE id = ?");
   $update_status->execute([$payment_status, $order_id]);
   $message[] = 'Trạng thái thanh toán được cập nhật!';
}

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   $delete_order = $conn->prepare("DELETE FROM `orders` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:placed_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đơn hàng</title>
   <link rel="shortcut icon" href="../imgs/icon.png" type="image/x-icon">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>

<body>

   <?php include '../components/admin_header.php' ?>

   <!-- placed orders section starts  -->

   <section class="placed-orders">

      <h1 class="heading">Các đơn đặt hàng</h1>

      <div class="box-container">

         <?php
         $select_orders = $conn->prepare("SELECT * FROM `orders`");
         $select_orders->execute();
         if ($select_orders->rowCount() > 0) {
            while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <div class="box">
                  <p> user id : <span><?= $fetch_orders['user_id']; ?></span> </p>
                  <p> Đặt lúc : <span><?= $fetch_orders['placed_on']; ?></span> </p>
                  <p> Họ và tên : <span><?= $fetch_orders['name']; ?></span> </p>
                  <p> Email : <span><?= $fetch_orders['email']; ?></span> </p>
                  <p> Số điện thoại : <span><?= $fetch_orders['number']; ?></span> </p>
                  <p> Địa chỉ : <span><?= $fetch_orders['address']; ?></span> </p>
                  <p> Tổng sản phẩm : <span><?= $fetch_orders['total_products']; ?></span> </p>
                  <p> Tổng giá : <span>$<?= $fetch_orders['total_price']; ?>/-</span> </p>
                  <p> Hình thức thanh toán : <span><?= $fetch_orders['method']; ?></span> </p>
                  <form action="" method="POST">
                     <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
                     <select name="payment_status" class="drop-down">
                        <option value="" selected disabled><?php
                                                            if ($fetch_orders['payment_status'] == 'pending') {
                                                               echo "Chưa giải quyết";
                                                            } else {
                                                               echo "Hoàn thành";
                                                            }
                                                            ?></option>
                        <option value="pending">Chưa giải quyết</option>
                        <option value="completed">Hoàn thành</option>
                     </select>
                     <div class="flex-btn">
                        <input type="submit" value="Cập nhật" class="btn" name="update_payment">
                        <a href="placed_orders.php?delete=<?= $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('Xóa đơn hàng này?');">Xóa</a>
                     </div>
                  </form>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">Chưa có đơn đặt hàng!</p>';
         }
         ?>

      </div>

   </section>

   <!-- placed orders section ends -->


   <!-- custom js file link  -->
   <script src="../js/admin_script.js"></script>

</body>

</html>