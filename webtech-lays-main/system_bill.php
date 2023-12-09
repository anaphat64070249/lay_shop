<?php

if ($_SESSION == null) {

} else {
    
    
    $sql = "SELECT * from Product";
        $all = 0;
        $id = $_SESSION['id'];
        $ret = $db->query($sql);
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if ($row['Member_ID'] == $id) {
                
                $product = $row['name'];
                $product_id = $row['Peoduct_ID'];
                $price = $row['price'];
                echo '<tr><td style="color:white;">'.$product.'</td>
                    <td>
                        <input size="5" type="text" style="text-align: center;" id="bill_'.$product_id.'" disabled value="'.$price.'">
                    </td>
                </tr>';
                $all += $price;
            }
        }
        echo'<th style="color:white;">รวมทั้งหมด</th>
        <td>
            <input size="5" style="text-align: center;" id=all_price type="text" value='.$all.' disabled>
        </td>';

}


?>