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

    <style media="screen">
      .round {
          width: 100%;
          border-radius: 15px;
          border: none;
          padding: 5px 5px 5px 25px;
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        }
        li a.dropdown-toggle{
          color: #1E4490;
        }

        .inner-addon {
        position: relative;
        }
        hr{
          width: auto;
          margin-left: -1px;
        }

        p {
          margin: -6px 0 10px;
        }

        /* style icon */
        .inner-addon .glyphicon {
          position: absolute;
          padding: 10px;
          pointer-events: none;
        }

        /* align icon */
        .right-addon .glyphicon {
          right: 5px;
          margin-top:10px;
        }

        /* add padding  */
        .right-addon input {
          padding-right: 30px;

        }
        form{
          margin-left: 75px;
          margin-top: 10px;
        }
        #search1{
          width: 0px;
          float: right;
          position: relative;
          transition: width 0.5s;
           text-align: left;
           margin-top: 18px;
           opacity: 0;

        }
        #search1:hover{
          width: 390px;
          opacity: 9;
        }
        img#Logo {
          margin-right: -16px;
            padding-bottom: 10px;
        }

        li a:hover#gt, a:hover#sp, a:hover#lh, a:hover#vd, a:hover#tltk {
            background-color:  #1E4490;
        }
        .jumbotron {
            padding-top: 175px;
        }

        input.form-st {
          border: none;
          border-bottom: 1px solid #1E4490;
          box-shadow:  none;
          border-radius: unset;
          width: max-content;
          margin: auto;
          width: 346px;
        }

        label{
          margin-left: 50px;
          font-weight: unset;
          color: #1E4490;
          font-size: 25px;
        }
        img.avatar {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 78px;
          margin-top: 20px;
          margin-bottom:11px;
        }

        form.modal-content.animate {
          width: 450px;
          height: 635px;
          border-radius: 50px;
        }
        p.dksd{
          text-align: left;
          padding: 0px 51px 0px 51px;
          font-size: 18px;
          color: #1E4490;
        }

        p.dksd2{
          margin-top: 14px;
          margin-bottom: 20px;
          text-align: center;
          padding: 0px 51px 0px 51px;
          font-size: 18px;
          color: #1E4490;
          font-weight: bold;
        }
        button.sign-up{
          margin: auto;
          background-color: #1E4490;
          color: white;
          border-radius: 25px;
          display: flex;
          justify-content: center;
          width: 39%;
          font-size: 23px;
          font-weight: bold;
        }
        button.sign-in{
          margin: auto;
          background-color: #1E4490;
          color: white;
          border-radius: 25px;
          display: flex;
          justify-content: center;
          width: 39%;
          font-size: 23px;
          font-weight: bold;
        }
        .col-lg-3 {
            padding-left: 58px;
            font-size: 18px;
        }

        .col-lg-2 {
              font-size: 18px;
        }

        div#footer_1 {
            height:  534px;
        }


      </style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header -->
    <div class="container" id="menu-bar" >
      <div class="row" id = "Mast_Head">
        <div class="col-lg-4">
          <a href="#"><img src="images/Home-Logo.svg" id = "Logo" alt=""></a>
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
                  <input type="text" class="form-control form-st" id="pw1" placeholder="">

                </div>

                <div class="form-group">
                  <label for="pw2">Nhập lại mật khẩu:</label>
                  <input type="text" class="form-control form-st" id="pw2" placeholder="">

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
                  <input type="text" class="form-control form-st" id="name" placeholder="">
                </div>

                <div class="form-group">
                  <label for="pw1">Mật khẩu:</label>
                  <input type="text" class="form-control form-st" id="pw1" placeholder="">

                </div>

                <button type="submit" class="btn btn-default sign-in hvr-fade">
                    Đăng nhập
                </button>

                <p class="dksd2">Chưa có tài khoản? <a href="#" style="color:#F29220; text-decoration: underline;" id="apply">Đăng ký</a>
                </p>
              </form>
        </div>
      </div>
