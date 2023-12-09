<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<?php

    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('lays.db');
        }
    }

    // Open Database 
    $db = new MyDB();

    if ($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['product'])) {
        if ($_SESSION == null) {
            echo "<script>
                        $(document).ready(function () {
                            Swal.fire({
                            icon: 'error',
                            title: 'กรุณาlogin',
                            confirmButtonColor: '#3085d6',
                            type: \"success\"}).then(okay => {
                                if (okay) {
                                 window.location.href = \"log_in.php\";
                               }
                            });
                        });
                        </script > ";
        }
        else{
            $check = 0;
        $id = $_SESSION['id'];
        $item = $_GET['product'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $sql = "SELECT * from Product";
        $ret = $db->query($sql);
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if ($row['Member_ID'] == $id and $row['Product_name'] == $item) {
                $check++;
            }
        }
        if ($check == 0) {
            $sql = <<<EOF
        INSERT INTO Product (Member_ID, Product_name, name, price)
        VALUES('$id', '$item', '$name', $price);
        EOF;
            $ret = $db->exec($sql);
            echo "<script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'เพิ่มสินค้าสำเร็จ',
                confirmButtonColor: '#3085d6',
                });
            });
         </script > ";
        } else {
            echo "<script>
                $(document).ready(function () {
                    Swal.fire({
                    icon: 'error',
                    title: 'มีสินค้าชิ้นนี้อยู่แล้ว',
                    confirmButtonColor: '#3085d6',
                    });
                });
                
                </script > ";
            $check = 0;
        }
        }
        
    }


$db->close();


?>