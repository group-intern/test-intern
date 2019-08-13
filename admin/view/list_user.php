
<div id="wrapper">
    <div id="page-wrapper">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Danh sách User</h3>
        <table class="table table-hover">
            <thead style="background: #3498db;margin-right:-10px;">
                <tr>
                    <th style="color: #fff">ID</th>
                    <th style="color: #fff">Họ tên</th>
                    <th style="color: #fff">Tài khoản</th>
                    <th style="color: #fff">Quyền hạn</th>
                    <th style="color: #fff">Ngày đăng kí</th>
                    <th style="color: #fff">Trạng thái</th>
                    <th style="color: #fff">Sửa</th>
                    <th style="color: #fff">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $value){
                        ?>
                        <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['hoten']?></td>
                            <td><?=$value['username']?></td>
                            <td>
                            <?php
                                if($value['role']==1){
                                    echo "Admin";
                                }
                                else{
                                    echo "Người dùng";
                                }
                            ?>
                            </td>
                            <td><?=$value['ngaytao']?></td>
                            
                            <td>
                                <?php
                                if($value['status']==1){
                                    echo "Kích hoạt";
                                }
                                else{
                                    echo "Khóa";
                                }
                            ?>
                            </td>
                            <td align="center"><a href="../view/index.php?controller=thanh-vien&action=edit&id=<?=$value['id']?>" ><img src="../Template/images/img-edit2.png" title="Sửa" width="30px" height="30px" alt=""></a></td>
                            <td align="center"><a onclick="return confirm('Bạn có thật sự muốn xóa không?')" href="../view/index.php?controller=thanh-vien&action=delete&id=<?=$value['id']?>" ><img title="Xóa" src="../Template/images/img-delete.png" width="30px" height="30px"></a></td>
                            </tr>
                        <?php
                    }
                ?>
            
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>
