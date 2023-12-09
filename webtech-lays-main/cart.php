<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lays Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
</head>

<body style="background-color: #DA281B;">
  <?php include "navbar.php" ?>


  <div class="container-fluid" id="page_content">
    <div class="content" id="content2" style="padding-left:0; padding-bottom:100px;">
      <div class="row">
        <div class="col-lg-8">
          <table class="table" >
            <h3 style="text-align: center; color:white;">ตะกร้าสินค้า</h3>
            <thead>
              <tr style="text-align: center; color:white;">
                <th scope="col">สินค้า</th>
                <th scope="col">ราคา/ชิ้น</th>
                <th scope="col">จำนวน</th>
                <th scope="col">ราคารวม</th>
                <th></th>
              </tr>
            </thead>
            <tbody style="text-align: center;">
              <?php include "system_show_cart.php" ?>
            </tbody>
          </table>
        </div>
        <div class="col-lg-4">
          <table class="table">
            <h3 style="color:white;">สรุปรายการสินค้า</h3>
            <thead>
            </thead>
            <tbody>
              <?php include "system_bill.php" ?>

            </tbody>
          </table>
          <form action="cart.php" method="POST" id="sent" onsubmit="return success()">
            <button type="submit" class="btn btn-warning" style="float: right; color:white; margin-right:70px;">สั่งซื้อสินค้า</button>
          </form>
        </div>
      </div>
    </div>
  </div><br><br>

  <?php include "system_sent.php" ?>

  <div class="container-fluid" style="padding-right:0 !important; padding-left: 0 !important">

  <footer class="text-center text-lg-start" style="background-color: #FFB916; margin-top: 275px">
    <div class="container d-flex justify-content-center py-5">
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: rgba(0, 0, 0, 0.2); border-color: rgba(0, 0, 0, 0.2);">
        <a href="https://www.facebook.com/LaysThailand"><i class="fab fa-facebook-f"><img src="lay_img/facebook.png" alt=""></i></a>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: rgba(0, 0, 0, 0.2); border-color: rgba(0, 0, 0, 0.2);">
        <a href="https://www.instagram.com/laysthailand/"><i class="fab fa-instagram"><img src="lay_img/ig.png" alt=""></i></a>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: rgba(0, 0, 0, 0.2); border-color: rgba(0, 0, 0, 0.2);">
        <a href="https://twitter.com/laysthailand?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"><img src="lay_img/twitter.png" alt=""></i></a>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: rgba(0, 0, 0, 0.2); border-color: rgba(0, 0, 0, 0.2);">
        <a href="https://www.youtube.com/user/LaysThailand"><i class="fab fa-youtube"><img src="lay_img/youtube.png" alt=""></i></a>
      </button>
    </div>

    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a>Lays_shop-Webtech</a>
    </div>
  </footer>

</div>
  
</body>

</html>