<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">HB Camera Store</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <!-- small box -->
                    <div class="small-box bg-success">

                        <div class="inner">
                            <a href="hb_store_num">
                                <h4 class="text-white">CREATE NUMBER</h4>

                                <p class="text-white">จองเลข นัมเบอร์ ของท่าน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sort-numeric-up-alt"></i>
                        </div>
                        <a href="hb_store_num" class="small-box-footer">Go To <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <!-- small box -->
                    <div class="small-box bg-pink">

                        <div class="inner">
                            <a href="">
                                <h4 class="text-white">UPLOAD NEW !!</h4>

                                <p class="text-white">อัพโหลด Drawing ใหม่</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        <a href="" class="small-box-footer">Go To <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <!-- small box -->
                    <div class="small-box bg-warning">

                        <div class="inner">
                            <a href="">
                                <h4 class="text-white">UPDATE & REVISE !!</h4>

                                <p class="text-white">แก้ไข Drawing ที่มีอยู่ในระบบ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <a href="" class="small-box-footer">Go To <i
                                class="fas fa-arrow-circle-right text-white"></i></a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Drawing DB Server</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 20%">Drawing List</th>
                                <th class="text-center" style="width: 20%">Upload</th>
                                <th class="text-center" style="width: 20%">Example</th>
                                <th class="text-center" style="width: 20%">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>

</div>



<?php include 'layout/footer.php'?>