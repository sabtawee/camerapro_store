<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">PM Camera Store</h1>
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
                            <a href="pm_store_num">
                                <h4 class="text-white">CREATE NUMBER</h4>

                                <p class="text-white">จองเลข นัมเบอร์ ของท่าน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sort-numeric-up-alt"></i>
                        </div>
                        <a href="pm_store_num" class="small-box-footer">Go To <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <!-- small box -->
                    <div class="small-box bg-pink">

                        <div class="inner">
                            <a href="pm_store_file">
                                <h4 class="text-white">UPLOAD FILE NEW !!</h4>

                                <p class="text-white">อัพโหลด ไฟล์ ใหม่</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        <a href="pm_store_file" class="small-box-footer">Go To <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <!-- small box -->
                    <div class="small-box bg-warning">

                        <div class="inner">
                            <a href="pm_store_revise">
                                <h4 class="text-white">ADD & REVISE !!</h4>

                                <p class="text-white">Add Evaluation & Other File</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <a href="pm_store_revise" class="small-box-footer">Go To <i
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
                                <th class="text-center" >No</th>
                                <th class="text-center" >Number</th>
                                <th class="text-center" >Line</th>
                                <th class="text-center" >Process</th>
                                <th class="text-center" >Factory+Div</th>
                                <th class="text-center" >Maker</th>
                                <th class="text-center" >Camera Type</th>
                                <th class="text-center" >Controler Type</th>
                                <th class="text-center" >Detail</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php                 
                        include_once('functions/functions_pm.php');
                        $data = new DB_con();
                        $sql = $data->getCameraHbAll();
                        while($row = mysqli_fetch_array($sql)) {   
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $row['id'];; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['Number']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['line']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['process']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['FactryDiv']; ?>
                                </td>
                                
                                <td class="text-center">
                                    <?php echo $row['maker']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['camera_type']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['controler_type']; ?>
                                </td>
                                <td class="text-center">
                                <a href="viewDetail_pm.php?Number=<?php echo $row['Number'] ?>" rel="noopener"
                                        class="btn btn-primary"><i class="fas fa-view"></i> View Detail</a>                                  
                                </td>
                            </tr>
                            <?php
                        } 
                        ?>
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