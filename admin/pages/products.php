<?php
include 'core/products-core.php';
$obj_prod = new product();
$load_prod = $obj_prod->loads_product();
vardump($path_prod);
?>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tất cả sản phẩm</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="index.php?click=products-add" class="btn btn-success text-light">Thêm</a></li>
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
                                        <th class="table-ma">Mã</th>
                                        <th class="table-thumb">Hình Đại Diện</th>
                                        <th class="table-name">Tên</th>
                                        <th class="table-price">Giá Gốc (VNĐ)</th>
                                        <th class="table-price">Giá Khuyến Mại (VNĐ)</th>
                                        <th class="table-soluong">Số Lượng</th>
                                        <th class="table-hanhdong">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($load_prod as $prod) {
                                    ?>
                                        <tr>
                                            <td style="text-align:center"><input type="checkbox" name="choose" value="checkedValue"></td>
                                            <td class="table-sku"><?= $prod->id_view ?></td>
                                            <td class="table-thumb"><img src="<?= $prod->prod_thumb ?>" style="width:120px;height:120px"></td>
                                            <td class="table-name"><?= $prod->name ?></td>
                                            <td class="table-price"><?= number_format($prod->old_price) ?></td>
                                            <td class="table-price"><?= number_format($prod->new_price) ?></td>
                                            <td class="table-soluong"><?= number_format($prod->prod_number) ?></td>
                                            <td style="padding:7px;text-align:center">
                                                <a data-toggle="tooltip" alt="Xem" title="Xem" href="index.php?click=products-show&id=<?= $prod->id  ?>"><img class="hanh-dong-img" src="images/show.png"></a>
                                                <a data-toggle="tooltip" alt="Sửa" title="Sửa" href="index.php?click=products-edit&id=<?= $prod->id  ?>"><img class="hanh-dong-img" src="images/edit.png"></a>
                                                <a data-toggle="tooltip" alt="Xóa" title="Xóa" href="index.php?click=products-remove&id=<?= $prod->id  ?>" onclick="return confirm('Bạn có muốn xóa hay không')"><img class="hanh-dong-img" src="images/delete.png"></a>
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