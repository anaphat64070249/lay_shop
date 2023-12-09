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

<body style="background-color: #DA281B">
    <!-- <?php include 'navbar.php' ?> -->
<div class="log">
    <div class="container-fluid" id="login_box">
        <h1 id="txt-log" style="font-family: 'Volkhov', serif;">LogIn</h1>
        <form action="log_in.php" method="post">
            <div class="form-group" style="padding: 2rem;">
                <input class="form-control" type="text" id="login_uname" placeholder="Username" name="uname" size="5"><br>
                <input class="form-control" type="password" id="login_pass" placeholder="Password" name="pass"><br>
            </div>
            <div align="right" style="margin-right:30px;">
                <button style="margin-bottom: 30px; margin-right:15px; font-family: 'Volkhov', serif;" id="login_btn" type="submit">Log In</button>
                <a href="sign_up.php"><button id="signup_btn" type="button" style="font-family: 'Volkhov', serif;">Sign up</button></a>
            </div>
        </form>
    </div>
</div>
    <?php include "system_login.php"?>
    <!-- <?php include 'footer.php' ?> -->
</body>

</html>