<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lays Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid" style="background-color: #DA281B; padding-right:0 !important; padding-left: 0 !important">
        <div class="menu">
            <div id="txt-menu">
                <p style="font-family: 'Volkhov', serif;">Menu</p>
            </div>
            <div class="container-fluid">
                <div class="row" id="menu-item">
                    <div class="col">
                        <a href="lays.php"><button class="button-menu"><img src="lay_img/lay-menu.webp" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="max.php"><button class="button-menu" style="background-color: #FF9900;"><img src="lay_img/max-menu.png" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="stax.php"><button class="button-menu"><img src="lay_img/stax-menu.png" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="drink.php"><button class="button-menu"><img src="lay_img/drink-menu.png" alt="" width="250px" height="250px"></button></a>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>


    <div class="container-fluid" style="background-color: #DA281B;">
        <div class="container">
            <div class="row">


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_bbq.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m1" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ รสบาร์บีคิว</h5>
                            <form action="max.php" method="get">
                                <button type="submit" class="btn btn-danger" value="lay_img/max_bbq.jpeg" name="product">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ รสบาร์บีคิว">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ รสบาร์บีคิว</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_bbq.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์แมกซ์ รสบาร์บีคิว พริกแซ่บซี๊ด<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 58.5%, น้ำมันพืช 34.5%, เครื่องปรุงรส 7%, (วัตถุปรุงแต่งรสอาหาร, สารควบคุมความเป็นกรด, สีธรรมชาติ, สารช่วยพา, สารทำให้คงตัว, สารป้องกันการจับกันเป็นก้อน, สารป้องกันการเกิดออกซิเดชั่น, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ แต่งกลิ่นสังเคาะห์ ไม่ใช้วัตถุกันเสีย<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" class="btn btn-danger" value="lay_img/max_bbq.jpeg" name="product">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ รสบาร์บีคิว">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_cheese.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m2" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ รสชีสซี่ชีส</h5>
                            <form action="max.php" method="get">
                                <button type="submit" name="product" value="lay_img/max_cheese.jpg" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ รสชีสซี่ชีส">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ รสชีสซี่ชีส</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_cheese.jpg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์แมกซ์ รสซี่ชีส กลิ่นชีสหอมยั่วใจ<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 58.5%, น้ำมันพืช 34.5%, เครื่องปรุงรส 7%, (วัตถุปรุงแต่งรสอาหาร, สารควบคุมความเป็นกรด, สีธรรมชาติ, สารช่วยพา, สารทำให้คงตัว, สารป้องกันการจับกันเป็นก้อน, สารป้องกันการเกิดออกซิเดชั่น, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ แต่งกลิ่นสังเคาะห์ ไม่ใช้วัตถุกันเสีย<br>
                                        <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือน นับจากวันที่ผลิต
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" name="product" value="lay_img/max_cheese.jpg" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ รสชีสซี่ชีส">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_sour.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m3" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ รสซาวครีมหัวหอม</h5>
                            <form action="max.php" method="get">
                                <button type="submit" value="lay_img/max_sour.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ รสซาวครีมหัวหอม">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ รสซาวครีมหัวหอม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_sour.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์แมกซ์ รสกูร์เมต์ ซาวครีมและหัวหอม<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 56%, น้ำมันพืช 36%, เครื่องปรุงรส 8%, (วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับกันเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย <br>
                                        <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือน นับจากวันที่ผลิต
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" value="lay_img/max_sour.jpeg" name="product" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ รสซาวครีมหัวหอม">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_pu.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m5" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ กลิ่นปูผัดผงกะหรี่</h5>
                            <form action="max.php" method="get">
                                <button type="submit" value="lay_img/max_pu.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ กลิ่นปูผัดผงกะหรี่">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ กลิ่นปูผัดผงกะหรี่
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_pu.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : เลย์แมกซ์กลิ่นปูผัดผงกะหรี่ มันฝรั่งทอดกรอบแผ่นหยักลึก พร้อมความหอมของเครื่องเทศแบบขั้นสุด ควบคู่ไปกับรสชาติของปูผสานกับผงกะหรี่รสจัดจ้าน กลมกล่อม ลงตัว อัดแน่นในแผ่นชิปทุกร่องหยัก ให้คุณเคี้ยวมันส์ กรอบ อร่อยแบบเต็มแมกซ์<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 56%, น้ำมันพืช 34%, เครื่องปรุงรส 10%, (วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับกันเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย <br>
                                        <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือน นับจากวันที่ผลิต
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" value="lay_img/max_pu.jpeg" name="product" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ กลิ่นปูผัดผงกะหรี่">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_pik.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m4" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ รสพริกปีศาจ
                            </h5>
                            <form action="max.php" method="get">
                                <button type="submit" value="lay_img/max_pik.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ รสพริกปีศาจ">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ รสพริกปีศาจ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_pik.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์แมกซ์ รสพริก เผ็ดสะใจ<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง น้ำมันปาล์ม กลิ่นธรรมชาติ เตรื่องปรุงรส วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับกันเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย<br>
                                        <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือน นับจากวันที่ผลิต
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" value="lay_img/max_pik.jpeg" name="product" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ รสพริกปีศาจ">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/max_kung.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#m6" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์แมกซ์ รสอูนางิ
                            </h5>
                            <form action="max.php" method="get">
                                <button type="submit" value="lay_img/max_kung.jpeg" name="product" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์แมกซ์ รสอูนางิ">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="m6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์แมกซ์ รสอูนางิ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/max_kung.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์แมกซ์ รสอูนางิ ได้รสกุ้งย่างเต็มๆคำ<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 56%, น้ำมันพืช 30%, เครื่องปรุงรส 14%, (วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับกันเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย <br>
                                        <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือน นับจากวันที่ผลิต
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="max.php" method="get">
                                        <button type="submit" value="lay_img/max_kung.jpeg" name="product" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์แมกซ์ รสอูนางิ">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>
    <?php include "system_cart.php" ?>

</body>


</html>