<?php
include 'core/posts-core.php';
$post = loaddata_post('data/posts.txt');

?>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tất cả bài viết</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="index.php?click=product-add" class="btn btn-success text-light">Thêm</a></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive table-taki">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:20px">Chọn</th>
                                        <th class="table-ma">Hình đại diện</th>
                                        <th class="table-thumb">Tiêu đề</th>                                        
                                        <th class="table-price">Chuyên mục</th>
                                        <th class="table-price">Thời gian</th>
                                        <th class="table-name">Tác giả</th>
                                        <th class="table-hanhdong">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($post as $postid => $posts) {
                                    ?>
                                        <tr>
                                            <td style="text-align:center"><input type="checkbox" name="choose" value="checkedValue"></td>
                                            <td class="table-thumb"><img src="images/posts/<?=$posts['posts_thumb']?>" style="width:120px;height:120px"></td>
                                            <td class="table-name"><?= $posts['name'] ?></td>
                                            <td class="table-category"><?= $posts['category'] ?></td>
                                            <td class="table-time"><?= $posts['time'] ?></td>
                                            <td class="table-author"><?= $posts['author'] ?></td>
                                            <td style="padding:7px;text-align:center">
                                                <a data-toggle="tooltip" alt="Xem" title="Xem" href="index.php?click=product-show&sku=<?= $sku ?>"><img class="hanh-dong-img" src="images/show.png"></a>
                                                <a data-toggle="tooltip" alt="Sửa" title="Sửa" href="index.php?click=product-edit&sku=<?= $sku ?>"><img class="hanh-dong-img" src="images/edit.png"></a>
                                                <a data-toggle="tooltip" alt="Xóa" title="Xóa" href="index.php?click=product-remove&sku=<?= $sku ?>" onclick="return confirm('Bạn có muốn xóa hay không')"><img class="hanh-dong-img" src="images/delete.png"></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>