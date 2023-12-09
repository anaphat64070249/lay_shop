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
                        <a href="stax.php"><button class="button-menu" style="background-color: #FF9900;"><img src="lay_img/stax-menu.png" alt="" width="250px" height="250px"></button></a>
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
                            <img src="lay_img/stax_original.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s1" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสมันฝรั่งออริจินัล
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" class="btn btn-danger" value="lay_img/stax_original.webp">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสมันฝรั่งออริจินัล">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสมันฝรั่งออริจินัล</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_original.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งทอดน้ำมันดอกทานตะวัน ตรา เลย์สแตคส์ ด้วยรสชาติที่อร่อยและความกรอบของแผ่นมันฝรั่ง ช่วยเติมสีสันในวันที่วุ่นวายได้ทุกที่ทุกเวลา<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่งแห้ง, น้ำมันพืช (น้ำมันเมล็ดฝ้าย, น้ำมันดอกทานตะวัน, น้ำมันข้าวโพด), แป้งข้าวโพด, แป้งข้าวจ้าว, ส่วนผสมที่น้อยกว่า 2% (โมโนและไดกลีเซอไรด์, เกลือ, น้ำตาล, เดกซ์โทรส, เลซิตินจากถั่วเหลือง)<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" class="btn btn-danger" value="lay_img/stax_original.webp">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสมันฝรั่งออริจินัล">
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
                            <img src="lay_img/stax_sour.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s2" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสซาวครีมหัวหอม
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" class="btn btn-danger" value="lay_img/stax_sour.webp">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสซาวครีมหัวหอม">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสซาวครีมและหัวหอม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_sour.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสซาวครีมและหัวหอมทอดน้ำมันดอกทานตะวัน ตรา เลย์สแตคส์ ด้วยรสชาติที่อร่อยและความกรอบของแผ่นมันฝรั่ง ช่วยเติมสีสันในวันที่วุ่นวายได้ทุกที่ทุกเวลา<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่งแห้ง, น้ำมันพืช (น้ำมันเมล็ดฝ้าย, น้ำมันดอกทานตะวัน, น้ำมันข้าวโพด), แป้งข้าวโพด, แป้งข้าวจ้าว, ส่วนผสมที่น้อยกว่า 2% (น้ำตาล, เกลือ, โมโนและไดกลีเซอไรด์, เดกซ์โทรส, หางนม, เลซิตินจากถั่วเหลือง, ผงหัวหอม, เวย์, โมโนโซเดียม กลูตาเมต, แป้งข้าวโพด, ซาวครีม (ครีมหมัก, หางนม), แลคโตส, มอลโตเดกซ์ทริน (ทำจากข้าวโพด), สารปรุงแต่งรส, กรดมาลิก, กรดซิตริก, เชดดาชีส (นม, ชีสหมัก, เกลือ, เอนไซม์), น้ำเชื่อมข้าวโพดเข้มข้น, บัตเตอร์มิลค์, สารปรุงแต่งสี, ไดโซเดียม ไอโนซิเนท, ไดโซเดียม กัวนีเลท<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" class="btn btn-danger" value="lay_img/stax_sour.webp">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสซาวครีมหัวหอม">
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
                            <img src="lay_img/stax_bbq.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s3" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสบาร์บีคิว
                            </h5>

                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_bbq.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสบาร์บีคิว">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสบาร์บีคิว</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_bbq.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสบาร์บีคิว ตรา เลย์สแตคส์ มันฝรั่งแท้จากเลย์ ใช้สูตรลดไขมัน และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (52%), น้ำมันรำข้าว (32%), แป้งตั้งหมิ่น (7%), เครื่องปรุงรส (5%), สตาร์ชดัดแปร (4%), ผงชูรส (โมโนโซเดียม กลูตาเมต, ไรโบไทด์), สารให้ความหวาน (แอสปาร์แตม), สี, สารควบคุมความเป็นกรด, สารป้องกันการรวมตัวเป็นก้อน, สารคงตัว, อีมัลซิไฟเออร์, สารปรุงแต่งรส<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_bbq.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสบาร์บีคิว">
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
                            <img src="lay_img/stax_cheese.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s4" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสชีส
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_cheese.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสชีส">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสชีส</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_cheese.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสชีส ตรา เลย์สแตคส์ มันฝรั่งแท้จากเลย์ ใช้สูตรลดไขมัน และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (52%), น้ำมันรำข้าว (32%), แป้งตั้งหมิ่น (7%), เครื่องปรุงรสชีส (5%), ผงชูรส, สารให้ความหวาน, สารปรุงแต่งสี, สารควบคุมความเป็นกรด, สารป้องกันการรวมตัวเป็นก้อน, สารคงตัว, อีมัลซิไฟเออร์, สตาร์ชดัดแปร<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_cheese.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสชีส">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
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
                            <img src="lay_img/stax_salt.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s5" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสเกลือ
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_salt.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสเกลือ">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสเกลือ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_salt.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสเกลือ ตรา เลย์สแตคส์ มันฝรั่งแท้จากเลย์ ใช้สูตรลดไขมัน และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (52%), น้ำมันรำข้าว (32%), แป้งตั้งหมิ่น (7%), เครื่องปรุงรสเกลือ (5%), ผงชูรส, สารให้ความหวาน, สารปรุงแต่งสี, สารควบคุมความเป็นกรด, สารป้องกันการรวมตัวเป็นก้อน, สารคงตัว, อีมัลซิไฟเออร์, สตาร์ชดัดแปร<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_salt.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสเกลือ">
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
                            <img src="lay_img/stax_bacon.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s6" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสเบคอน
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_bacon.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสเบคอน">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสเบคอน</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_bacon.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสเบคอน ตรา เลย์สแตคส์ มันฝรั่งแท้จากเลย์ ใช้สูตรลดไขมัน และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (52%), น้ำมันรำข้าว (32%), แป้งตั้งหมิ่น (7%), เครื่องปรุงรส (5%), สตาร์ชดัดแปร (4%), ผงชูรส (โมโนโซเดียม กลูตาเมต, ไรโบไทด์), สารให้ความหวาน (แอสปาร์แตม)<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_bacon.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสเบคอน">
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
                            <img src="lay_img/stax_chick.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s7" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสไก่ทอด
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_chick.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสไก่ทอด">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสไก่ทอด</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_chick.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสไก่ทอด ตรา เลย์สแตคส์ ด้วยรสชาติที่อร่อยและความกรอบของแผ่นมันฝรั่ง ช่วยเติมสีสันในวันที่วุ่นวายได้ทุกที่ทุกเวลา<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่งแห้ง, น้ำมันพืช ,แป้งข้าวโพด, แป้งข้าวจ้าว, ส่วนผสมที่น้อยกว่า 2% (น้ำตาล, เกลือ, โมโนและไดกลีเซอไรด์, เดกซ์โทรส, หางนม, เลซิตินจากถั่วเหลือง, ผงหัวหอม, เวย์, โมโนโซเดียม กลูตาเมต, แป้งข้าวโพด, ซาวครีม (ครีมหมัก, หางนม), แลคโตส, สารปรุงแต่งรส, กรดมาลิก, กรดซิตริก<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_chick.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสไก่ทอด">
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
                            <img src="lay_img/stax_hot.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#s8" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์สแตคส์ รสฮอตชิลลี่
                            </h5>
                            <form action="stax.php" method="get">
                                <button type="submit" name="product" value="lay_img/stax_hot.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์สแตคส์ รสฮอตชิลลี่">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="s8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์สแตคส์ รสฮอตชิลลี่</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/stax_hot.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งรสฮอตชิลลี่ ตรา เลย์สแตคส์ มันฝรั่งแท้จากเลย์ ใช้สูตรลดไขมัน และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง 52%, น้ำมันพืช 32%, แป้งสาลี 6%, เครื่องปรุงรส 5%, (สารทำให้คงตัว), อิมัลซิไฟเออร์, วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บรักษาอาหาร แต่งกลิ่นธรรมชาติ แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="stax.php" method="get">
                                        <button type="submit" name="product" value="lay_img/stax_hot.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์สแตคส์ รสฮอตชิลลี่">
                                            <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
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

    <?php include "system_cart.php" ?>
    <?php include 'footer.php' ?>
</body>

</html>