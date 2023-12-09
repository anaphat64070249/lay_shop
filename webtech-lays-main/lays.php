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
                        <a href="lays.php"><button class="button-menu" style="background-color: #FF9900;"><img src="lay_img/lay-menu.webp" alt="" width="250px" height="250px"></button></a>
                    </div>
                    <div class="col">
                        <a href="max.php"><button class="button-menu"><img src="lay_img/max-menu.png" alt="" width="250px" height="250px"></button></a>
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
                            <img src="lay_img/original.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#one" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค มันฝรั่งแท้</h5>
                            <form action="lays.php" method="get">
                                <button type="submit" value="lay_img/original.webp" name="product" class="btn btn-danger">
                                    <input type="hidden" name="name" value="เลย์คลาสสิค มันฝรั่งแท้">
                                    <input type="hidden" name="price" value="30">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="one" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค มันฝรั่งแท้</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/original.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งคลาสสิครสเกลือ ตรา เลย์ ทำจากมันฝรั่งแท้ 100% ปรุงรสตามสไตล์เลย์ ไม่มีกลูเตน<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง, น้ำมันปาล์ม, น้ำมันถั่วเหลือง, เกลือ<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="lays.php" method="get">
                                        <button type="submit" value="lay_img/original.webp" name="product" class="btn btn-danger">
                                            <input type="hidden" name="name" value="เลย์คลาสสิค มันฝรั่งแท้">
                                            <input type="hidden" name="price" value="30">
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
                            <img src="lay_img/nori.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#two" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค โนริสาหร่าย</h5>
                            <form action="lays.php" method="get">
                                <button type="submit" name="product" value="lay_img/nori.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์คลาสสิค โนริสาหร่าย"> <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="two" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค โนริสาหร่าย</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/nori.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งคลาสสิคโนริสาหร่าย ตรา เลย์ ทำจากมันฝรั่งแท้ 100% มีไขมันอิ่มตัวน้อยลงถึง 50%<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันรำข้าว ( 31%), เครื่องปรุงรส (7%), โมโนโซเดียม กลูตาเมต, ไรโบไทด์, สารปรุงแต่งรส สารป้องกันการรวมตัวเป็นก้อน<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="lays.php" method="get">
                                        <button type="submit" name="product" value="lay_img/nori.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์คลาสสิค โนริสาหร่าย"> <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
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
                            <img src="lay_img/bbq.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#three" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค เอ็กซ์ตร้าบาบีคิว</h5>
                            <form action="lays.php" method="get">
                                <button type="submit" name="product" value="lay_img/bbq.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์คลาสสิค เอ็กซ์ตร้าบาบีคิว"> <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="three" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค เอ็กซ์ตร้าบาบีคิว</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/bbq.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : มันฝรั่งแผ่นหยักรสBBQ ตรา เลย์ ทำจากมันฝรั่งแท้ 100% ปรุงรสตามสไตล์เลย์<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันรำข้าว (32%), เครื่องปรุงรส (6%), โมโนโซเดียม กลูตาเมต, ไรโบไทด์, สารปรุงแต่งรส, สารป้องกันการรวมตัวเป็นก้อน<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="lays.php" method="get">
                                        <button type="submit" name="product" value="lay_img/bbq.webp" class="btn btn-danger">
                                            <input type="hidden" name="price" value="30">
                                            <input type="hidden" name="name" value="เลย์คลาสสิค เอ็กซ์ตร้าบาบีคิว"> <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
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
                            <img src="lay_img/mieng.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#four" style="cursor: pointer;" alt="...">
                        </div>
                        <div class="card-body bg-Warning">
                            <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค เมี่ยงคำครบรส</h5>
                            <form action="lays.php" method="get">
                                <button type="submit" name="product" value="lay_img/mieng.webp" class="btn btn-danger">
                                    <input type="hidden" name="price" value="30">
                                    <input type="hidden" name="name" value="เลย์คลาสสิค เมี่ยงคำครบรส">
                                    <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="four" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค เมี่ยงคำครบรส</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="lay_img/mieng.webp" alt="" width="100%"><br><br>
                                    <p><b>คุณสมบัติ</b> : นฝรั่งรสเมี่ยงคำ ตรา เลย์ ทำจากมันฝรั่งแท้ มีไขมันต่ำ และไม่ใช้วัตถุกันเสีย<br>
                                        <b>ส่วนประกอบ</b> : มันฝรั่ง (62.2%), น้ำมันรำข้าว (30.6%), เครื่องปรุงรส (7.2%), สารปรุงแต่งเลียนธรรมชาติ, ผงชูรส (โมโนโซเดียม กลูตาเมต, ไรโบไทด์), สารปรุงแต่งสี, สารป้องกันการรวมตัวเป็นก้อน<br>
                                        <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="lays.php" method="get">
                                        <button type="submit" name="product" value="lay_img/mieng.webp" class="btn btn-danger">
                                            <input type="hidden" name="name" value="เลย์คลาสสิค เมี่ยงคำครบรส">
                                            <input type="hidden" name="price" value="30">
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

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="lay_img/salmon.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#five" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค แซลมอนครีมชีส
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/salmon.webp" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค แซลมอนครีมชีส">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="five" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค
                                            กลิ่นสโมคแซลมอนครีมชีส</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/salmon.webp" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นเรียบ เลย์ กลิ่นสโมคแซลมอนครีมชีส<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 62.2% น้ำมันมีช 31.3 % เครื่องปรุงรส 6.5% (วัตถุปรุงแต่งรสอาหาร(มโนโซเดียมกลูตาเมต, ไดโซเดียม 5-ไรโบนิวคลิโอไทด์), สารป้องกันการจับเป็นกัอน (INS 551), สารควบคุมความเป็นกรด
                                            (INS 330), สีธรรมชาติ (INS 160c(i), วัตถุที่ให้ความหวานแทนน้ำตาล (ซูคราโลส), ก๊าซที่ช่วยในการเก็บรักษาอาทาร(INS 941) แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย
                                            <br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/salmon.webp" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค แซลมอนครีมชีส">
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
                                <img src="lay_img/hed.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#six" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค รสเห็ดทรัฟเฟิล
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/hed.webp" class="btn btn-danger">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค รสเห็ดทรัฟเฟิล">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="six" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค รสเห็ดทรัฟเฟิล</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/hed.webp" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์มันฝรั่งแท้ทอดกรอบแผ่นเรียบ รสทรัฟเฟิล ระดับพรีเมียม จากทรัฟเฟิลแท้ หอมกรุ่น อร่อยทุกโมเมนต์<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 62.3%, น้ำมันพืช 30.7%, เครื่องปรุงรส 7%, (วัตถุปรุงแต่งรสอาหาร, สารป้องกันการจับเป็นก้อน, สารควบคุมความเป็นกรด, ก๊าซที่ช่วยในการเก็บ<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/hed.webp" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค รสเห็ดทรัฟเฟิล">
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
                                <img src="lay_img/rock-original.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#seven" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค มันฝรั่งแท้</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/rock-original.webp" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อค มันฝรั่งแท้">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="seven" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค มันฝรั่งแท้</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/rock-original.webp" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแผ่นหยักรสเกลือ ตรา เลย์ ทำจากมันฝรั่งแท้ 100% ปรุงรสตามสไตล์เลย์ม<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (63.7%), น้ำมันพืช (30%), เครื่องปรุงรส (6.3%)<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/rock-original.webp" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์ร็อค มันฝรั่งแท้">
                                                <input type="hidden" name="price" value="30">
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
                                <img src="lay_img/squid.webp" class="card-img-top" data-bs-toggle="modal" data-bs-target="#eight" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค หมึกย่างฮอตชิลลี่
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/squid.webp" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อค หมึกย่างฮอตชิลลี่">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="eight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค หมึกย่างฮอตชิลลี่</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/squid.webp" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแผ่นหยักรสหมึกย่าง ตรา เลย์ ทำจากมันฝรั่งแท้ 100% ปรุงรสตามสไตล์เลย์<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (63.7%), น้ำมันพืช (30%), เครื่องปรุงรส (6.3%)<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/squid.webp" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์ร็อค หมึกย่างฮอตชิลลี่">
                                                <input type="hidden" name="price" value="30">
                                                <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="lay_img/salmonseed.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#nine" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค แซลมอนแซ่บซี๊ด
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/salmonseed.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค แซลมอนแซ่บซี๊ด">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="nine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค แซลมอนแซ่บซี๊ด</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/salmonseed.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นเรียบ เลย์ รสแซลมอนแซ่บซี๊ด (แซลมอน, พริกขี้หนู และมะนาว) ครั้งแรกของเลย์! กับการคอมโบมันฝรั่งแท้ทอดกรอบ 3 รสเข้าด้วยกัน คลุกเคล้าอย่างลงตัว รวมเป็น 3 รสชาติในซองเดียว เลย์ 3in1 รสแซลมอนแซ่บซี๊ด เผ็ดเปรี้ยว กลมกล่อม แซ่บซี๊ดไม่เหมือนใคร<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 60.1% น้ำมันพืช 32.9% เครื่องปรุงรส 7% (วัตถุปรุงแต่ง รสอาหาร (มอโนโซเดียมแอล-กลูตาเมต, ไดโซเดียม 5 ไรโบนิวคลีโอไทด์), สารเพิ่มปริมาณ (มอลโทเดกซ์ทริม (INS 160C(1), INS 141(), วัตถุที่ให้ความหวานแทนน้ำตาล (แอสพาร์เทม), ก๊าซที่ช่วยในการเก็บรักษา การควบคุมความเป็นกรด (INS 330, INS 296), สารป้องกันการจับเป็นก้อน (INS 551), สีธรรมชาติ อาหาร (INS 941)) แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/salmonseed.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค แซลมอนแซ่บซี๊ด">
                                                <input type="hidden" name="price" value="30">
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
                                <img src="lay_img/popcorn.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#ten" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค กลิ่นป๊อปคอร์น
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/popcorn.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นป๊อปคอร์น">
                                        <input type="hidden" name="price" value="30">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="ten" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค กลิ่นป๊อปคอร์นมิกซ์
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/popcorn.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นหยัก เลย์ กลิ่นป๊อปคอร์นมิกซ์ (บัตเตอร์คอร์น, คาราเมล, และเชดด้าชีส) ครั้งแรกของเลย์! กับการรวม 3 คอมโบ มันฝรั่งแท้ทอดกรอบเข้าด้วยกัน คลุกเคล้าอย่างลงตัว รวมเป็น 3 รสชาติในซองเดียวในแบบเลย์ 3in1 กลิ่นป๊อปคอร์นมิกซ์ หอมหวาน กลมกล่อม ไม่เหมือนใคร<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 61% น้ำมันพืช 32% เครื่องปรุงรส 7% (วัตถุปรุงแต่งรสอาหาร(มอโนโซเดียมแอล-กลูตาเมต, ไดโซเดียม 5 ไรโบนิวคลีโอไทด์ )<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/popcorn.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นป๊อปคอร์น">
                                                <input type="hidden" name="price" value="30">
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
                                <img src="lay_img/basil.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#eleven" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค รสกะเพรากรอบ</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/basil.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="name" value="เลย์ร็อค รสกะเพรากรอบ">
                                        <input type="hidden" name="price" value="30">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="eleven" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค รสกะเพรากรอบ</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/basil.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแผ่นหยักรสกระเพรา ตรา เลย์ ร็อค ทำจากมันฝรั่งแท้ ทอดในน้ำมันรำข้าว ทำให้ลดปริมานไขมันลงถึง 50% เมื่อเทียบกับทอดด้วยน้ำมันปาล์ม ไม่ใช้วัตถุกันเสีย<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันรำข้าว (32%), เครื่องปรุงรส (6%), สารปรุงแต่งสี, โมโนโซเดียม กลูตาเมต, ไรโบไทด์<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/basil.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="name" value="เลย์ร็อค รสกะเพรากรอบ">
                                                <input type="hidden" name="price" value="30">
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
                                <img src="lay_img/seafood.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#twelve" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">
                                    เลย์ร็อครสกุ้งเผา+น้ำจิ้มซีฟู้ด</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/seafood.jpg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อครสกุ้งเผา+รสน้ำจิ้มซีฟู้ด">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="twelve" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค
                                            รสกุ้งเผา+รสน้ำจิ้มซีฟู้ด</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/seafood.jpg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์ร็อค2อิน1รสกุ้งเผาและน้ำจิ้มซีฟู้ด ผลิตจากมันฝรั่งคุณภาพเยี่ยม แผ่นหยัก เคี้ยวเพลิน กรอบหอม อร่อย รับประทานได้หลากหลายโอกาส ไม่ว่าจะเป็นของว่าง หรือช่วงเวลาสนุกๆ อย่างปาร์ตี้ไทม์<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง,น้ำมันรำข้าว,เครื่องปรุงรส,แต่งกลิ่นเลียนแบบธรรมชาติ<br>
                                            <b>วิธีใช้</b> : หลังจากเปิดซองรับประทานแล้ว หากรับประทานไม่หมด ควรปิดซองให้สนิท
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/seafood.jpg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์ร็อครสกุ้งเผา+รสน้ำจิ้มซีฟู้ด">
                                                <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="lay_img/wakyu.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#thirteen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค กลิ่นสเต๊กวากิว
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/wakyu.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นสเต๊กวากิว">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="thirteen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค กลิ่นสเต๊กวากิว</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/wakyu.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งแท้ทอดกรอบแผ่นเรียบ เลย์ กลิ่นสเต๊กวากิว<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 61%, น้ำมันพืช 32%, เครื่องปรุงรส 7%, (สารช่วยพา (มอลโทเดกซ์ทริน), วัตถุปรุงแต่งรสอาหาร (โมโนโซเดียมกลูตามเมต, ไดโซเดียม 5'-ไรโบนิวคลีโอไทด์), สารควบคุมความเป็นกรด (INS 330), สารป้องกันการจับเป็นก่อน (INS 551), สีธรรมชาติ (INS 160c(i)), ก๊าซที่ช่วยในการเก็บรักษาอาหาร (INS 941)) แต่งกลิ่นสังเคราะห์ ไม่ใช้วัตถุกันเสีย คุณค่าทางโภชนาการต่อ 1 ซอง ควรแบ่งกิน 2.5 ครั้ง พลังงาน 430 กิโลแคลอรี่ *22%, น้ำตาล 3กรัม *5%, ไขมัน 25กรัม *38%, โซเดียม 350มิลลิกรัม<br>
                                            <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือนนับจากวันที่ผลิตสินค้า
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/wakyu.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นสเต๊กวากิว">
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
                                <img src="lay_img/green.png" class="card-img-top" data-bs-toggle="modal" data-bs-target="#fourteen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค กลิ่นแกงเขียวหวาน
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/green.png" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อค กลิ่นแกงเขียวหวาน">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="fourteen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค กลิ่นแกงเขียวหวาน</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/green.png" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์รสใหม่ล่าสุดแกงเขียวหวาน เติมความสนุกในทุกช่วงเวลากับเลย์รสชาติใหม่แกงเขียวหวาน ที่จะให้คุณได้ลิ้มลองรสชาติแกงเขียวหวานในรูปแบบของมันฝรั่งเลย์<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันรำข้าว (32%), เครื่องปรุงรส (6%), สารปรุงแต่งสี, โมโนโซเดียม กลูตาเมต, ไรโบไทด์, เครื่องปรุงรสแกงเขียวหวาน<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/green.png" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์ร็อค กลิ่นแกงเขียวหวาน">
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
                                <img src="lay_img/lime.png" class="card-img-top" data-bs-toggle="modal" data-bs-target="#fifth" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค รสมะนาวแซ่บซี้ด
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/lime.png" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค รสมะนาวแซ่บซี้ด">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="fifth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค รสมะนาวแซ่บซี้ด</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/lime.png" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : แผ่นมันฝรั่งสีเหลืองอ่อน มีผงเครื่องปรุ่งเล็กน้อย กลิ่นของมะนาวค่อนข้างแรง และรสชาติค่อนข้างเปรี้ยวมาก แต่มีความเผ็ดและเค็มเล็กน้อยมาตัด เหมาะสำหรับคนที่ชอบทานรสเปรี้ยว<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 60.1%, น้ำมันพืช 32.9%, เครื่องปรุงรส 7%, (วัตถุปรุงแต่งรสอาหาร, สารเพิ่มปริมาณ, สารควบคุมความเป็นกรด, สารป้องกันการจับเป็นก้อน, สีธรรมชาติ, วัตถุที่ให้ความหวานแทนน้ำตาล, ก๊าซที่ช่วยในการเก็บรักษาอาหาร) แต่งกลิ่นเลียนธรรมชาติ ไม่ใช้วัตถุกันเสีย<br>
                                            <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือนนับจากวันที่ผลิตสินค้า
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/lime.png" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค รสมะนาวแซ่บซี้ด">
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
                                <img src="lay_img/hotpot.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#sixteen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค
                                    กลิ่นแจ่วฮ้อนหม้อไฟ</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/hotpot.jpg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นแจ่วฮ้อนหม้อไฟ">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="sixteen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค กลิ่นแจ่วฮ้อนหม้อไฟ
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/hotpot.jpg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์กลิ่นแจ่วฮ้อนหม้อไฟ เมนูสุดฮิตสไตล์อีสานแบบเผ็ดนัว ได้กลิ่นสมุนไพร ที่เป็นเอกลักษณ์เฉพาะตัว อร่อย กลมกล่อม ทุกคำที่ทาน<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง 63%, น้ำมันพืช 30%, เครื่องปรุงรส 7% (วัตถุปรุงแต่งรสอาหาร (โมโนโซเดียมกลูตาเมต, ไดโซเดียม 5'-ไอโนซิเนต, ไดโซเดียม 5'-กัวไนเลต), สารทำให้คงตัว (INS414, INS1414), สีธรรมชาติ (INS160c(i)), สารป้องกันการจับเป็นก้อน (INS551), ก๊าซที่ช่วยในการเก็บรักษาอาหาร(INS941), แต่งกลิ่นธรรมชาติ, แต่งกลิ่นเลียนธรรมชาติ, ไม่ใช้วัตถุกันเสียติ<br>
                                            <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 12 เดือนนับจากวันที่ผลิตสินค้า
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/hotpot.jpg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค กลิ่นแจ่วฮ้อนหม้อไฟ">
                                                <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="lay_img/cheese.png" class="card-img-top" data-bs-toggle="modal" data-bs-target="#seventeen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค กลิ่นชีสซี่สไปซี่
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/cheese.png" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อค กลิ่นชีสซี่สไปซี่">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="seventeen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค กลิ่นชีสซี่สไปซี่</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/cheese.png" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์ร็อค กลิ่นชีสซี่สไปซี่ หอมกลิ่นชีสที่มีความเผ็ดเต็มคำ<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (52%), น้ำมันรำข้าว (32%), แป้งตั้งหมิ่น (7%), เครื่องปรุงรส (5%), สตาร์ชดัดแปร (4%), ผงชูรส (โมโนโซเดียม กลูตาเมต ไรโบไทด์), มอลโตเดกซ์ทริน, สี, สารป้องกันการรวมตัวเป็นก้อน, สารคงตัว, อีมัลซิไฟเออร์, สารปรุงแต่งรส<br>
                                            <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 12 เดือนนับจากวันที่ผลิตสินค้า
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/cheese.png" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์ร็อค กลิ่นชีสซี่สไปซี่">
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
                                <img src="lay_img/lab.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#eighteen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์ร็อค รสลาบแซ่บนัว</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/lab.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์ร็อค รสลาบแซ่บนัว">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="eighteen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์ร็อค รสลาบแซ่บนัว</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/lab.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์รสลาบแซ่บนัว เติมความสนุกในทุกช่วงเวลากับเลย์รสชาติใหม่รสลาบ ที่จะให้คุณได้ลิ้มลองรสชาติลาบในรูปแบบของมันฝรั่งเลย์<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันรำข้าว (32%), เครื่องปรุงรส (6%), สารปรุงแต่งสี, โมโนโซเดียม กลูตาเมต, ไรโบไทด์, เครื่องปรุงรสลาบ<br>
                                            <b>วิธีใช้</b> : สามารถเก็บรักษาได้ 6 เดือนนับจากวันที่ผลิตสินค้า
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/lab.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์ร็อค รสลาบแซ่บนัว">
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
                                <img src="lay_img/sour.jpeg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#nineteen" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค ซาวครีมหัวหอม
                                </h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/sour.jpeg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค ซาวครีมหัวหอม">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="nineteen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค รสซาวครีมหัวหอม</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/sour.jpeg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : มันฝรั่งคลาสสิครสซาวครีม ตรา เลย์ ทำจากมันฝรั่งแท้ 100% ปรุงรสตามสไตล์เลย์ ไม่มีกลูเตน<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง (62%), น้ำมันพืช (32%), เครื่องปรุงรส (6%)<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/sour.jpeg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค ซาวครีมหัวหอม">
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
                                <img src="lay_img/egg.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#twenty" style="cursor: pointer;" alt="...">
                            </div>
                            <div class="card-body bg-Warning">
                                <h5 class="card-title" style="color:#fff; font-size: 20px;">เลย์คลาสสิค รสไข่เค็ม</h5>
                                <form action="lays.php" method="get">
                                    <button type="submit" name="product" value="lay_img/egg.jpg" class="btn btn-danger">
                                        <input type="hidden" name="price" value="30">
                                        <input type="hidden" name="name" value="เลย์คลาสสิค รสไข่เค็ม">
                                        <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="twenty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เลย์คลาสสิค รสไข่เค็ม</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="lay_img/egg.jpg" alt="" width="100%"><br><br>
                                        <p><b>คุณสมบัติ</b> : เลย์ มันฝรั่งแท้ทอดกรอบแผ่นเรียบ รสไข่เค็ม หอมลึกถึงเครื่องปรุง ได้รสกลิ่นไข่เค็ม ได้รสชาติเค็มมัน ผสมเข้ากันดีกับมันฝรั่งทอดกรอบ<br>
                                            <b>ส่วนประกอบ</b> : มันฝรั่ง, น้ำมันรำข้าว, เครื่องปรุงรส (วัตถุปรุงแต่งรสอาหาร (โมโนโซเดียมกลูตาเมต, ไดโซเดียม 5'-ไรโบนิวคลีโอไทด์, สารเพิ่มปริมาณ (มอลโทเดกซ์ทริน), สารควบคุมความเป็นกรด (INS 341(iii)), สารป้องกันการจับเป็นก้อน (INS 551), สารทำให้คงตัว (INS 414), สีธรรมชาติ (INS160c)<br>
                                            <b>วิธีใช้</b> : ควรรับประทานทันทีไม่ควรเก็บไว้นาน
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="lays.php" method="get">
                                            <button type="submit" name="product" value="lay_img/egg.jpg" class="btn btn-danger">
                                                <input type="hidden" name="price" value="30">
                                                <input type="hidden" name="name" value="เลย์คลาสสิค รสไข่เค็ม">
                                                <img src="lay_img/cart.png" width="20px" height="20px">&nbsp30 ฿
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <?php include "system_cart.php" ?>

</body>


</html>