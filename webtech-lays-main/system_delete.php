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
    $db= new MyDB();

    session_start();
    
    $id = $_SESSION['id'];
    $item = $_GET['product'];
    $sql = "DELETE from Product where Product_name = '$item' and Member_ID = '$id';";
    $ret = $db->exec($sql);
    $db->close();
    echo "<script>
        $(document).ready(function () {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            showConfirmButton: false,
                });
            });
            
        </script > ";
    header("location: cart.php");

?>