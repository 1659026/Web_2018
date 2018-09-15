<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header -->
    <div class="container" id="menu-bar" >
      <div class="white-background">

      </div>
      <div class="row" id = "Mast_Head">
        <div class="col-lg-4">
          <a href="index.php"><img src="images/Home-Logo.svg" id = "Logo" alt=""></a>
        </div>
        <div class="col-lg-4">
          <form class="" id="search-form" action="index.php" method="post">
            <div class="search">
              <div class="form-group inner-addon right-addon">
                <label for=""></label>
                  <input type="text" class="form-control round" id="search1" placeholder="Tìm kiếm...">
                  <i class="glyphicon glyphicon-search form-control-feedback"></i>
              </div>
            </div>
          </form>
        </div>
        <div id="topbar" class="col-lg-4">
         <nav>
          <ul>
           <li class="side-menu"><a href="#">VI</a></li>
           <li class="divider">|</li>
           <li class="side-menu"><a href="#">EN</a></li>
           <li class="divider">|</li>
           <li  class="side-menu"><a href="#" class="hvr-fade" id="login-btn" onclick="document.getElementById('id01').style.display='block';$('.signup').hide();$('.signin').show();">Đăng nhập</a></li>
          </ul>
         </nav>
        </div>
        <!-- The Modal -->
        <div id="id01" class="modal" >
          <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>
          <!-- Modal Content -->
          <form class="modal-content animate signup" style="width: 450px;" action="index.php">
            <div class="imgcontainer">
              <img src="images/icon-1@2x.png" alt="Avatar" class="avatar">
            </div>

                <div class="form-group">
                  <label for="name">Tên đăng nhập:</label>
                  <input type="text" class="form-control form-st" id="name" placeholder="">
                </div>

                <div class="form-group">
                  <label for="pw1">Mật khẩu:</label>
                  <input type="password" class="form-control form-st" id="pw1" placeholder="">

                </div>

                <div class="form-group">
                  <label for="pw2">Nhập lại mật khẩu:</label>
                  <input type="password" class="form-control form-st" id="pw2" placeholder="">

                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control form-st" id="email" placeholder="">
                </div>

                <p class="dksd">Với việc bấm "Đăng ký", bạn đã đồng ý với <a href="#" style="color:#F29220; text-decoration: underline;">Điều khoản sử dụng</a>
                </p>

                <button type="submit" class="btn btn-default sign-up hvr-fade">
                    Đăng ký
                </button>
                <p class="dksd2">Có tài khoản rồi? <a href="#" style="color:#F29220; text-decoration: underline;" id="login">Đăng nhập</a>
                </p>
          </form>
          <form class="modal-content animate signin" style="width: 450px; height: 450px" action="index.php">
            <div class="imgcontainer">
              <img src="images/icon-1@2x.png" alt="Avatar" class="avatar">
            </div>

                <div class="form-group">
                  <label for="name">Tên đăng nhập:</label>
                  <input type="text" class="form-control form-st" id="login_name" placeholder="">
                </div>

                <div class="form-group">
                  <label for="pw1">Mật khẩu:</label>
                  <input type="password" class="form-control form-st" id="login_pw" placeholder="">

                </div>

                <button type="submit" class="btn btn-default sign-in hvr-fade">
                    Đăng nhập
                </button>

                <p class="dksd2">Chưa có tài khoản? <a href="#" style="color:#F29220; text-decoration: underline;" id="apply">Đăng ký</a>
                </p>
              </form>
        </div>
      </div>
