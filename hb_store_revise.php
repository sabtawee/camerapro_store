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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Revise DB Server</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Number</th>
                                <th class="text-center">Line</th>
                                <th class="text-center">Process</th>
                                <th class="text-center">Evaluation</th>
                                <th class="text-center">Other</th>
                                <th class="text-center">Revise</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php                 
                        include_once('functions/functions.php');
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
                                <a href="hb_store_evaluation.php?id=<?php echo $row['id'] ?>" rel="noopener"
                                        class="btn btn-success" ><i class="fas fa-edit"></i> Add Evaluation File</a>
                                </td>
                                <td class="text-center">
                                <a href="hb_store_other.php?id=<?php echo $row['id'] ?>" rel="noopener"
                                        class="btn btn-primary" ><i class="fas fa-edit"></i> Add Other File</a>
                                </td>
                                <td class="text-center">
                                <a href="hb_store_re_up.php?id=<?php echo $row['id'] ?>" rel="noopener"
                                        class="btn btn-warning" ><i class="fas fa-edit"></i> Revise File</a>                                  
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