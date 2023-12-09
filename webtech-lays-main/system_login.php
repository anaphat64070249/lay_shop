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
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['uname']) and isset($_POST['pass'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $sql = "SELECT * from Member";
    $ret = $db->query($sql);
    
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        if ($row['Username'] == $username and $row['Password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['ID'];
            $_SESSION['check_login'] = true;
            $_SESSION['sent'] = true;
            header("location: index.php");
        }
        
    }
    
    if ($_SESSION == null) {
        echo "<script>
        $(document).ready(function () {
            Swal.fire({
            icon: 'error',
            confirmButtonColor: '#3085d6',
            title: 'Username/Password ไม่ถูกต้อง',
                });
            });
        </script > ";
    }
}

$db->close();
?>