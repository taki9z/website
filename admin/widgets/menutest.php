<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../index.php" class="site_title" target="_blank"><i class="fa fa-desktop"></i> <span>Xem trang chủ</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?= $target_dir_user.$_SESSION['avatar'] ?>" alt="Avatar" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $_SESSION['name'] ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Tổng quan</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php?click=home"><i class="fa fa-tachometer"></i> Bảng điều khiển</a></li>
                    <!-- <li><a><i class="fa fa-user"></i> Khách hàng</a></li> -->
                    <!-- <li><a><i class="fa fa-edit"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Quản lý đơn hàng</a></li>
                            <li><a href="#">Tạo đơn hàng</a></li>
                            <li><a href="#">Đơn hàng chưa hoàn tất</a></li>
                            <li><a href="#">Phiếu giao hàng</a></li>
                            <li><a href="#">Quản lý COD</a></li>
                        </ul>
                    </li> -->
                    <li><a><i class="fa fa-archive"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php?click=products">Tất cả sản phẩm</a></li>
                            <li><a href="index.php?click=products-add">Thêm sản phẩm mới</a></li>
                            <li><a href="index.php?click=products-categories">Danh mục</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-pencil-square-o"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php?click=posts">Tất cả bài viết</a></li>
                            <li><a href="index.php?click=posts-add">Thêm bài viết mới</a></li>
                            <li><a href="index.php?click=categories">Chuyên mục</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-file-powerpoint-o"></i> Trang <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php?click=pages">Tất cả các trang</a></li>
                            <li><a href="index.php?click=pages-add">Thêm trang mới</a></li>
                        </ul>
                    </li>
                <li><a><i class="fa fa-desktop"></i> Giao diện <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php?click=appearance">Quản lý giao diện</a></li>
                            <li><a href="index.php?click=theme-editor">Sửa giao diện</a></li>
                            <li><a href="index.php?click=widgets">Widget</a></li>
                            <li><a href="index.php?click=menus">Menu</a></li>
                        </ul>
                    </li>
                
                    <li><a><i class="fa fa-group"></i> Thành viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php?click=users">Quản lý thành viên</a></li>
                            <li><a href="index.php?click=users-add">Thêm mới</a></li>
                        </ul>
                    </li>
                    <!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="form.html">General Form</a></li>
                            <li><a href="form_advanced.html">Advanced Components</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="form_wizards.html">Form Wizard</a></li>
                            <li><a href="form_upload.html">Form Upload</a></li>
                            <li><a href="form_buttons.html">Form Buttons</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="tables.html">Tables</a></li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs.html">Chart JS</a></li>
                            <li><a href="chartjs2.html">Chart JS2</a></li>
                            <li><a href="morisjs.html">Moris JS</a></li>
                            <li><a href="echarts.html">ECharts</a></li>
                            <li><a href="other_charts.html">Other Charts</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>    
        </div>

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>