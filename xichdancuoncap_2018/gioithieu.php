<?php
include 'includes/head.php';
include 'includes/nav.php'
?>
    <div class="container-fluid">
      <div class="intro">
        <div class="row">
          <div class="col-md-5">
            <div class="vertical-nav">
              <p><button type="button" id="cty"><a href="#">CÔNG TY</a></button></p>
              <p><button type="button" id="ceo"><a href="#">GIÁM ĐỐC ĐIỀU HÀNH (CEO)</a></button></p>
              <p><button type="button" id="dtac"><a href="#">ĐỐI TÁC</a></button></p>
            </div>
          </div>
          <div class="col-md-7 intro-content">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item" id="gt1"><a href="gioithieu.php">Giới thiệu</a></li>
                <li class="breadcrumb-item active" id="gt2" aria-current="page">Giới thiệu</li>
                <li class="breadcrumb-item active" id="bread-cty" aria-current="page">Công ty</li>
                <li class="breadcrumb-item active" id="bread-ceo" aria-current="page">Giám đốc điều hành (CEO)</li>
                <li class="breadcrumb-item active" id="bread-dtac" aria-current="page">Đối tác</li>
              </ol>
            </nav>
            <div class="content">
              <div class="cty-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="ceo-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="dtac-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

<?php include 'includes/footer.php' ?>
<script type="text/javascript">

</script>
