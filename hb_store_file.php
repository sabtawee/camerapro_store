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
        <div class="col-12">
            <div class="card card-green">
                <div class="card-header">
                    <h3 class="card-title">UPLOAD Drawing</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 2%">No</th>
                                <th class="text-center" style="width: 20%">Number List</th>
                                <th class="text-center" style="width: 20%">FactoryDiv</th>
                                <th class="text-center" style="width: 20%">Upload File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                 
                        include_once('functions/functions.php');
                        $i = 1;
                        $data = new DB_con();
                        $sql = $data->getFilenull();
                        while($row = mysqli_fetch_array($sql)) {   
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $i; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['Number']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['FactryDiv']; ?>
                                </td>

                                <td class="project-actions text-center">
                                    <a href="hb_store_upload.php?id=<?php echo $row['id'] ?>" rel="noopener"
                                        target="_blank" class="btn btn-primary"><i class="fas fa-upload"></i> UPLOAD FILE</a>
                                </td>
                            </tr>
                            <?php
                        $i ++;
                        } 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>



<?php include 'layout/footer.php'?>