<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lays Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
  <script src="sign_up.js"></script>
</head>

<body style="background-color: #DA281B">
  <!-- <?php include 'navbar.php' ?> -->
<div class="log">
  <div class="container" align="center">
    <form class="row g-3"
      style="background-color: #FFB916; padding: 30px; border-radius: 20px; width: 50%;"
      name="myForm" action="sign_up.php" onsubmit="return validateForm()" method="post">
      <h1 align="center" style="color:white; font-family: 'Volkhov', serif;">Sign up</h1>
      <div class="col-md-12">
        <input class="form-control" type="text" name="username" id="uname" placeholder="Username">
      </div>
      <div class="col-md-12">
        <input type="password" class="form-control" name="password" id="pass" placeholder="Password">
      </div>
      <div class="col-md-12">
        <input type="password" class="form-control" name="con_pass" id="con_pass" placeholder="Confirm Password">
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      <div class="col-md-12">
        <input class="form-control" type="text" name="fname" id="fname" placeholder="Firstname">
      </div>
      <div class="col-md-12">
        <input class="form-control" type="text" name="lname" id="lname" placeholder="Lastname">
      </div>
      <div class="col-md-12">
        <input class="form-control" type="text" name="tel" id="tel" placeholder="Phone number">
      </div>
      <div class="col-12">
        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address"></textarea>
      </div>
      <div class="col-12" align="center">
        <button type="submit" class="btn btn-danger" style="font-family: 'Volkhov', serif;">Sign in</button>
      </div>
    </form>
  </div>
</div>

  <!-- <?php include 'footer.php' ?> -->
  <?php include "system_register.php"?>
</body>

</html>