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
                        <a href="max.php"><button class="button-menu"><img src="lay_img/max-menu.png" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="stax.php"><button class="button-menu"><img src="lay_img/stax-menu.png" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="drink.php"><button class="button-menu" style="background-color: #FF9900;"><img src="lay_img/drink-menu.png" alt="" width="250px" height="250px"></button></a>
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
                            <img src="lay_img/pepsi.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s1" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เป๊ปซี่
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" class="btn btn-danger" value="lay_img/pepsi.jpeg">
                                    <input type="hidden" name="price" value="15">
                                    <input type="hidden" name="name" value="เป๊ปซี่ เครื่องดื่มอัดลม">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เป๊ปซี่ เครื่องดื่มอัดลม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/pepsi.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : เป๊ปซี่ เครื่องดื่มที่ช่วยให้คุณสดชื่น รสชาติซาบซ่า ช่วยดับกระหายทุกครั้งเมื่อดื่ม<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 7.6% INS 290 แต่งกลิ่นรสธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" class="btn btn-danger" value="lay_img/pepsi.jpeg">
                                            <input type="hidden" name="price" value="15">
                                            <input type="hidden" name="name" value="เป๊ปซี่">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/coke.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s2" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">โคคา-โคล่า
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" class="btn btn-danger" value="lay_img/coke.jpeg">
                                    <input type="hidden" name="name" value="โคคา-โคล่า">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">โคคา-โคล่า</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/coke.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : โคคา-โคล่า รสชาติออริจินัล เพลิดเพลินไปกับรสชาติของเครื่องดื่มที่สดชื่นที่จะทำให้ช่วงเวลาของคุณพิเศษยิ่งขึ้น<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 7.6% INS 290 แต่งกลิ่นรสธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" class="btn btn-danger" value="lay_img/coke.jpeg">
                                        <input type="hidden" name="price" value="15">
                                            <input type="hidden" name="name" value="โคคา-โคล่า">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/fanta.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s3" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">แฟนต้า
                            </h5>

                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/fanta.jpeg" class="btn btn-danger">
                                    <input type="hidden" name="name" value="แฟนต้า">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">แฟนต้่า เครื่องดื่มอัดลม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/fanta.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : สดใส, สดชื่น, และมีชีวิตชีวาได้ทันทีกับ แฟนต้าน้ำเขียว กลิ่นผลไม้รวม<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 7.6% INS 290 แต่งกลิ่นรสธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/fanta.jpeg" class="btn btn-danger">
                                            <input type="hidden" name="name" value="แฟนต้า">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/cha.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s4" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">ชาคูลล์ซ่า
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/cha.jpeg" class="btn btn-danger">
                                    <input type="hidden" name="name" value="ชาคูลล์ซ่า">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ชาคูลล์ซ่า ชาเขียวโซดา กลิ่นฮันนี่เลม่อน</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/cha.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : ชาเขียวโซดา ชาคูลล์ซ่า ให้รสชาติความอร่อยที่แตกต่าง ด้วยความหอม ซ่า สดชื่น และมีประโยชน์จากชาเขียวที่ชงจากสุดยอดใบชาเขียวแท้ธรรมชาติที่ได้รับการคัดสรรมาเป็นอย่างดี<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 7.6% INS 290 แต่งกลิ่นรสธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/cha.jpeg" class="btn btn-danger">
                                            <input type="hidden" name="name" value="ชาคูลล์ซ่า">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-hover-zoom">
                            <img src="lay_img/7up.gif" height="285px" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s5" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">7UP
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/7up.gif" class="btn btn-danger">
                                    <input type="hidden" name="name" value="7UP">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">7UP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/7up.gif" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : เซเว่น-อัพ ไม่มีน้ำตาล เครื่องดื่มใส ซ่า สดชื่น กลิ่นเลมอน มะนาว ปราศจากแคลอรี ไม่เจือสี และมีมีกาเฟอีน<br>
                                        <b>ส่วนประกอบ</b> : แต่งกลิ่นธรรมชาติ (วัตถุเจือปนอาหาร (INS 290, INS 330, INS 331(iii), INS 296), วัตถุให้ความหวานแทนน้ำตาล (แอสพาร์เทม, ซูคราโลส, อะซีซัลเฟม โพแทสเซียม), วัตถุกันเสีย (INS 211, INS 202))<br>
                                        <b>วิธีใช้</b> : คำเตือน ผู้ที่มีสภาวะฟินิลคีโตนูเรีย ผลิตภัณฑ์นี้มีมีฟินิลอลานีน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/7up.gif" class="btn btn-danger">
                                            <input type="hidden" name="name" value="7UP">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/lipton.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s6" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">ชาลิปตัน
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/lipton.jpeg" class="btn btn-danger">
                                    <input type="hidden" name="name" value="ชาลิปตัน">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ลิปตันไอซ์ทีเลมอนชาปรุงสำเร็จรสเลมอน</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/lipton.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : “ลิปตันกับคนโปรด ลิปตันกับจานโปรด” เพื่อเติมเต็มอรรถรสและเพิ่มความอร่อยในทุกมื้ออาหาร ในวันอากาศร้อนๆ หรือเพื่อความสดชื่นช่วงบ่าย ด้วยรสชาติเปรี้ยว หวาน สดชื่นลงตัวอันเป็นเอกลักษณ์ของ ลิปตัน ไอซ์ที ชาปรุงสำเร็จ ที่อุดมด้วยใบชาแท้ คุณภาพสูง<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 5.7% ชาผงสำเร็จรูป 0.12% (สารควบคุมความ เป็นกรด (INS 330, INS 331(iii)), สารป้องกันการเกิดออกซิเดชั่น (INS 300), วัตถุที่ให้ความหวานแทนน้ำตาล (สตีวิออลไกลโคไซด์)) แต่งกลิ่นธรรมชาติ มีกาเฟอีน 9.8 มก. ต่อ 100 มล.<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/lipton.jpeg" class="btn btn-danger">
                                            <input type="hidden" name="name" value="ชาลิปตัน">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/mirinda.jpeg" height="285px" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s7" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">มิรินด้า
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/mirinda.jpeg" class="btn btn-danger">
                                    <input type="hidden" name="name" value="มิรินด้า">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">มิรินด้าน้ำหวานกลิ่นส้ม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/mirinda.jpeg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มิรินด้า ส้ม เครื่องดื่มซ่า กลิ่นส้ม เปรี้ยมอมหวาน หอมกลิ่นผลไม้ สดชื่น พร้อมฟรายฟองซาบซ่า ให้คุณได้อร่อยเพลิดเพลิน พร้อมเปิดประสบการณ์ความสนุกและซาบซ่าบนปลายลิ้น<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 4.91% กลิ่นส้ม 0.23% (วัตถุเจือปนอาหาร (INS 290, INS 330, INS 414, INS 331(iii), วัตถุที่ให้ความหวานแทนน้้ำตาล (แอซีซัลเฟมโพแทสเซียม, ซูคราโลส), วัตถุกันเสีย (INS 202, INS 211), สีสังเคราะห์ (INS 110)) แต่งกลิ่นธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/mirinda.jpeg" class="btn btn-danger">
                                            <input type="hidden" name="name" value="มิรินด้า">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
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
                            <img src="lay_img/sprite.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s8" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">สไปร์ท
                            </h5>
                            <form action="drink.php" method="get">
                                <button type="submit" name="product" value="lay_img/sprite.jpg" class="btn btn-danger">
                                    <input type="hidden" name="name" value="สไปร์ท">
                                    <input type="hidden" name="price" value="15">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">สไปร์ทเครื่องดื่มอัดลมกลิ่นเลมอนไลม์</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/sprite.jpg" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : สไปร์ท สูตรไม่มีน้ำตาล เป็นเครื่องดื่มที่สมบูรณ์แบบสำหรับผู้ที่ต้องการรสชาติของสไปร์ทโดยไม่มีน้ำตาล<br>
                                        <b>ส่วนประกอบ</b> : น้ำตาล 7.6% INS 290 แต่งกลิ่นรสธรรมชาติ<br>
                                        <b>วิธีใช้</b> : ควรบริโภคก่อนวันที่ระบุข้างขวด
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="drink.php" method="get">
                                        <button type="submit" name="product" value="lay_img/sprite.jpg" class="btn btn-danger">
                                            <input type="hidden" name="name" value="สไปร์ท">
                                            <input type="hidden" name="price" value="15">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp15 ฿
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br>
        </div>
    </div>


    <?php include 'footer.php' ?>
    <?php include "system_cart.php" ?>
</body>

</html>