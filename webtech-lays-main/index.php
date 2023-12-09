<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lays Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
</head>

<body style="overflow-y: hidden;">
    <section class="first">
        <nav id="navbar-scroll" class="navbar navbar-expand-lg navbar-light "
            style=" position: relative; margin: 0 auto;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="lay_img/logo.png" alt="logo" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-lg-auto" id="navbar_forjs">
                        <a class="nav-link active" aria-current="page" href="index.php"
                            style="font-size: 25px; padding: 10px; margin: 0px 20px 0 20px; color: #fff; font-family: 'Volkhov', serif;">Home</a>
                        <a class="nav-link" href="menu.php"
                            style="font-size: 25px; padding: 10px; margin: 0px 20px 0 20px; color: #fff; font-family: 'Volkhov', serif;">Menu</a>
                        <a class="nav-link" href="cart.php"
                            style="font-size: 25px; padding: 10px; margin: 0px 20px 0 20px;"><img src="lay_img/cart.png"
                                alt="" width="40px" height="40px"></a>
                        <?php include 'button.php'; ?>
                    </div>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="main-txt">
                <h1 style="font-family: 'Volkhov', serif;">Lays Shop</h1>
                <h3>เลย์กินกับอะไรก็อร่อย</h3>
                <p>เลย์ มันฝรั่งแท้คุณภาพดี แสนอร่อย หลากหลายรสชาติมีให้คุณเลือกสรรค์ได้ใน 4 รูปแบบ<br>
                    เลย์คลาสสิค มันฝรั่งแท้แผ่นเรียบ บาง กรอบ<br>
                    เลย์ ร็อค มันฝรั่งแผ่นหยัก รสชาติเข้มข้น<br>
                    เลย์ แมกซ์ มันฝรั่งแผ่นหยัก รสชาติเข้มข้นกว่าเดิม<br>
                    เลย์ สแตคส์ มันฝรั่งคุณภาพดี อร่อยเท่ากันทุกแผ่น</p>
                    <a href="menu.php">สั่งเลย</a>
            </div>
        </div>

        <div class="social">
            <a href="https://www.facebook.com/LaysThailand"><img src="lay_img/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/laysthailand/"><img src="lay_img/ig.png" alt=""></a>
            <a href="https://twitter.com/laysthailand?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="lay_img/twitter.png" alt=""></a>
            <a href="https://www.youtube.com/user/LaysThailand"><img src="lay_img/youtube.png" alt=""></a>
        </div>

        <div class="img-index">
            <img src="lay_img/banner-index.png" alt="">
        </div>
    </section>

</body>

</html>