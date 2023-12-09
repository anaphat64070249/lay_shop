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

<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid"
        style="background-color: #DA281B; padding-right:0 !important; padding-left: 0 !important">
        <div id="banner">
            <img src="lay_img/banner.jpeg" alt="banner" width="100%">
        </div>
        <div class="all">
        <div class="menu">
            <div id="txt-menu">
                <p style="font-family: 'Volkhov', serif;">Menu</p>
            </div>
            <div class="container-fluid">
                <div class="row" id="menu-item">
                    <div class="col">
                        <a href="lays.php"><button class="button-menu"><img src="lay_img/lay-menu.webp" alt="" width="250px"
                            height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="max.php"><button class="button-menu"><img src="lay_img/max-menu.png" alt="" width="250px"
                            height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="stax.php"><button class="button-menu"><img src="lay_img/stax-menu.png" alt="" width="250px"
                            height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="drink.php"><button class="button-menu"><img src="lay_img/drink-menu.png" alt="" width="250px"
                            height="250px"></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="best-sel">
            <div id="txt-menu">
                <p style="font-family: 'Volkhov', serif;">Best Seller</p>
            </div>
            <div class="container">

                <section id="r1" class="section active">
                    <div class="container-fluid" id="rec">
                        <div class="row">
                            <div class="col">
                                <img src="lay_img/rec4.jpeg" alt="" width="80%" style="padding: 50px 0px 50px 50px">
                            </div>
                            <div class="col" id="txt-rec">
                                <h1 style="font-size: 50px;">เลย์กลิ่นข้าวผัดปู</h1>
                                <p style="font-size: 20px;">หอมกลิ่นข้าวผัด เคลือบกะทะ และ เนื้อปูเน้นๆ เพิ่มมิติความอร่อย ฟิน พลาดไม่ได้</p>
                                <form action="lays.php" method="get">
                                <button type="submit" value="lay_img/original.webp" name="product" class="btn btn-danger">
                                    <input type="hidden" name="name" value="เลย์คลาสสิค มันฝรั่งแท้">
                                    <input type="hidden" name="price" value="30">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="r2" class="section">
                    <div class="container-fluid" id="rec">
                        <div class="row">
                            <div class="col">
                                <img src="lay_img/rec3.jpeg" alt="" width="80%" style="padding: 50px 0px 50px 50px">
                            </div>
                            <div class="col" id="txt-rec">
                                <h1 style="font-size: 50px;">เลย์แม็กรสซาวครีมหัวหอม</h1>
                                <p style="font-size: 20px;">มันฝรั่งทอดกรอบแผ่นหยักลึก กรอบมัน
                                    หอมกลิ่นซาวครีมและหัวหอม<br>อร่อยกลมกล่อมลงตัวในแผ่นชิปทุกร่องหยัก ให้คุณเคี้ยวมันส์
                                    กรอบ อร่อยแบบเต็มแมกซ์</p>
                                    
                                    <form action="lays.php" method="get">
                                <button type="submit" value="lay_img/rec3.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="name" value="เลย์แม็กรสซาวครีมหัวหอม">
                                    <input type="hidden" name="price" value="30">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="r3" class="section">
                    <div class="container-fluid" id="rec">
                        <div class="row">
                            <div class="col">
                                <img src="lay_img/rec1.jpeg" alt="" width="80%" style="padding: 50px 0px 50px 50px">
                            </div>
                            <div class="col" id="txt-rec">
                                <h1 style="font-size: 50px;">เลย์แม็กรสพริกปีศาจ</h1>
                                <p style="font-size: 20px;">มันฝรั่งแผ่นหยักรสพริกปีศาจ ผลิตจากมันฝรั่งแท้<br>เผ็ดจัดจ้าน เคี้ยวเพลิน กรอบ หอม
                                    อร่อย
                                </p>
                                <form action="lays.php" method="get">
                                <button type="submit" value="lay_img/rec1.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="name" value="เลย์แม็กรสพริกปีศาจ">
                                    <input type="hidden" name="price" value="30">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </section><br><br>

                <nav class="nav">
                    <button class="button-active" id="r1-button" onclick="displayR1()">1</button>
                    <button id="r2-button" onclick="displayR2()">2</button>
                    <button id="r3-button" onclick="displayR3()">3</button>
                </nav><br>

                <!-- <nav>
                    <button class="previous" id="previous" onclick="displayPrevious()">Previous</button>
                    <button class="next button-active" id="next" onclick="displayNext()">Next</button>
                </nav><br><br> -->
            </div>
        </div>
    </div>
    </div>

    <?php include 'footer.php' ?>
</body>

<script src="menujs.js"></script>

</html>