<?php

if ($_SESSION == null) {

} else {
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('lays.db');
        }
    }
    $db = new MyDB();
    $sql = "SELECT * from Product";
        $id = $_SESSION['id'];
        $ret = $db->query($sql);
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if ($row['Member_ID'] == $id) {
                $name = $row['name'];
                $product1 =  $row['Product_name'];
                $product_id = $row['Peoduct_ID'];
                $price = $row['price'];
                echo "<tr><td><img src=\"$product1\" width=\"150px\" height=\"150px\"><p style='color:white;'>$name</p></td>";
                echo "<td style='color:white;'>$price</td>";
                echo '<td >
                    <button type="button" class="button_cart" onclick="minus_'.$product_id.'()"><img src="lay_img/minus.png" width="20px" height="20px"></button>
                    <input type="text" maxlength="2" size="3"  style="text-align: center; " disabled  id="'.$product_id.'" value="1" min="1" max="100">
                    <button type="button" class="button_cart"  onclick="plus_'.$product_id.'()"><img src="lay_img/plus.png" width="20px" height="20px"></button>
                    </td>
                    ';
                
                echo '<td><input type="text" size="5" style="text-align: center;" id="price_'.$product_id.'" value="'.$price.'" disabled></td>';
                
                
                echo "<td>
                            <form action=\"system_delete.php\" method=\"get\">
                                <button type=\"submit\" class=\"button_cart\" value=\"$product1\" name=\"product\" >
                                <img src=\"lay_img/bin.png\" >
                                </button>
                            </form>
                     </td>
                </tr>";
                echo 
                "<script>
                function plus_$product_id(){
                    let num = document.getElementById(\"$product_id\");
                    let old_price =  parseInt(document.getElementById(\"price_$product_id\").value);
                    let price = document.getElementById(\"price_$product_id\");
                    let bill = document.getElementById(\"bill_$product_id\");
                    let all = document.getElementById(\"all_price\");
                    if(parseInt(num.value)+1>100){
                        Swal.fire({
                            icon: 'error',
                            title: 'สินค้าต้องไม่เกิน100ชิ้น',
                            confirmButtonColor: '#3085d6',
                        })
                    }
                    else{
                        num.value = parseInt(num.value)+1;
                        price.value = parseInt(num.value*parseInt($price));
                        bill.value = parseInt(num.value*parseInt($price));
                        all.value = (parseInt(all.value)+parseInt(price.value)-old_price);
                        Swal.fire({
                            icon: 'success',
                            title: 'เพิ่มจำนวนสินค้าสำเร็จ',
                            confirmButtonColor: '#3085d6',
                        })
                    }

                }
                function minus_$product_id(){
                    let num = document.getElementById(\"$product_id\");
                    let price = document.getElementById(\"price_$product_id\");
                    let bill = document.getElementById(\"bill_$product_id\");
                    let old_price =  parseInt(document.getElementById(\"price_$product_id\").value);
                    let all = document.getElementById(\"all_price\");
                    if(parseInt(num.value)-1<1){
                        Swal.fire({
                            icon: 'error',
                            title: 'จำนวนสินค้าไม่ถูกต้อง',
                            confirmButtonColor: '#3085d6',
                        })
                    }
                    else{
                        num.value = parseInt(num.value)-1;
                        price.value = parseInt(num.value*parseInt($price));
                        bill.value = parseInt(num.value*parseInt($price));
                        all.value = (parseInt(all.value)-parseInt(price.value));
                        Swal.fire({
                            icon: 'success',
                            title: 'ลบจำนวนสินค้าสำเร็จ',
                            confirmButtonColor: '#3085d6',
                        })
                    }
        
                }
                </script>";
            }
        }

}
