<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<?php
// Connect to Database 
class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('lays.db');
   }
}

// Open Database 
$db = new MyDB();

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['username'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $phone = $_POST['tel'];
   $check_user = 0;
   $check_phone = 0;
   $check_email = 0;
   // $sql_command = "SELECT * FROM Member WHERE Username ='$username' OR Email = '$email' OR phone = '$phone'; ";
   $sql = "SELECT * from Member";
   
   // $sql = "SELECT * from Member WHERE Username ='$username' OR Email = '$email' OR phone = '$phone'; ";
   $ret = $db -> query($sql);
   // $ret_email = $db->query($sql_email);
   // $ret_username = $db->query($sql_username);
   while ($row = $ret -> fetchArray(SQLITE3_ASSOC)) {
      if ($row['Username'] == $username) {
         $check_user++;
      }
      if ($row['Email'] == $email) {
         $check_email++;
      }
      if ($row['phone'] == $phone) {
         $check_phone++;
      }
   }
   
   if ($check_user > 0) {
      echo "<script>
      $(document).ready(function () {
         Swal.fire({
            icon: 'error',
            title: 'มีผู้ใช้ Username นี้แล้ว',
            text: 'กรุณาใช้ Username อื่น',
            showConfirmButton: false,
         });
      });
   </script > ";
   } else if ($check_email > 0) {
      echo "<script>
      $(document).ready(function () {
         Swal.fire({
            icon: 'error',
            title: 'มีผู้ใช้Email นี้แล้ว',
            text: 'กรุณาใช้Emailอื่น',
            showConfirmButton: false,
         });
   
      });
      </script > ";
   } else if ($check_phone > 0) {
      echo "<script>
      $(document).ready(function () {
         Swal.fire({
            icon: 'error',
            title: 'มีผู้ใช้ เบอร์โทร นี้แล้ว',
            text: 'กรุณาใช้ เบอร์โทร อื่น',
            showConfirmButton: false,
         });
   
      });
      
   </script > ";
   } else {
      $sql = <<<EOF
         INSERT INTO Member (Username, Password, Address, Email, firstname, lastname, phone)
      VALUES('$username', '$password', '$address', '$email', '$fname', '$lname', '$phone');
      EOF;
      $ret = $db -> exec($sql);
      echo "<script>
      $(document).ready(function(){
         Swal.fire({
            icon: 'success',
            title: 'Successful registration',
            confirmButtonColor: '#3085d6',
            type: \"success\"}).then(okay => {
               if (okay) {
                window.location.href = \"log_in.php\";
              }
          });
   
      });
      </script > ";
   }
   
   
}

//  Close database
$db->close();
?>