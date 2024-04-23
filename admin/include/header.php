<nav class="navbar navbar-expand-lg navbar-light fixed-top"
    style="background-color: #fff; padding-left: 15px; padding-right: 15px;">
    <a class="navbar-brand" href="">
        <img src="../../img/logo.png" alt="" class="navigation__logo h-20">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="homePage.php">Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Quản lý
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../users/index.php">Người dùng</a></li>
                    <li><a class="dropdown-item" href="#">Sản phẩm</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex mb-2 mb-lg-0">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"
                    aria-hidden="true"></i></button>
        </form>
        <div class="admin_section d-flex align-items-center ms-3">
            <a class="me-3" href="#">
                <i class="fas fa-fw fa-crown"></i>
                Admin
            </a>
            <a class="btn btn-danger text-white" href="./Register.php" role="button">Đăng xuất</a>
        </div>
    </div>
</nav>