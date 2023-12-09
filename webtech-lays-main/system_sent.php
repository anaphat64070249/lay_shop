<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<?php
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
} else {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_SESSION['id'];
        $sql = "DELETE from Product where Member_ID = '$id';";
        $ret = $db->exec($sql);
        echo ("<script>
            $(document).ready(function(){
            Swal.fire({
                icon: 'success',
                title: 'Success',
                confirmButtonColor: '#3085d6',
                type: \"success\"}).then(okay => {
                    if (okay) {
                     window.location.href = \"cart.php\";
                   }
            });
            
        });
        
            </script >");
            $_SESSION['sent'] = true;
    }


    $db->close();
}
?>