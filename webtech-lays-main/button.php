<?php
session_start();
if ($_SESSION == null) {
  echo '<a class="nav-link" href="log_in.php" style="font-size: 25px; padding: 10px; margin: 0px 20px 0 20px;"><b><img src="lay_img/login.png" alt=""></b></a>';
} else {
  echo
  '<div class="dropdown">
        <img class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" 
        src="lay_img/login.png" alt="" style="font-size: 20px; padding: 0px; margin: 0px 79px 0 30px;">
        </button>
        <ul class="dropdown-menu" style="text-align:center;">
          <li>' . $_SESSION['username'] . '</li>
          <li><hr class="dropdown-divider"></li>
          <li><a href="system_logout.php"><button class="btn btn-danger">Logout</button></a></li>
        </ul>
   </div>';
}
