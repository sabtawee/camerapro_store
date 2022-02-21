<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<?php $number = $_GET['Number']; ?>

<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">VIEW Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail : <?php echo $number ?></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Recent Activity</h4>
                                <?php                 
                                include_once('functions/functions.php');
                                $data = new DB_con();
                                $sql = $data->getCameraHbByNumber($number);
                                while($row = mysqli_fetch_array($sql)) {   
                                ?>
                                <div class="post">
                                    <div class="user-block">
                                        <span class="username">
                                            <a><?php echo $row['type']?></a>
                                        </span>
                                        <span class="description">Update : <?php echo $row['created_at'] ?></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p><b>Location :</b> <?php echo $row['Location']?></p>
                                            <p><b>DIV :</b> <?php echo $row['Div']?></p>
                                            <p><b>Factory Div :</b> <?php echo $row['FactryDiv']?></p>
                                            <p><b>Line :</b> <?php echo $row['line']?></p>  
                                            <p><b>Process :</b> <?php echo $row['process']?></p>
                                            <p><b>Purpose :</b> <?php echo $row['purpose']?></p>                          
                                        </div>
                                        <div class="col-4">
                                            <p><b>If flowout from Camera inspection :</b> <?php echo $row['ffci']?></p>
                                            <p><b>Equipment verification :</b> <?php echo $row['ev']?></p>
                                            <p><b>Judgement by master :</b> <?php echo $row['jugement']?></p>
                                            <p><b>Actual master value record :</b> <?php echo $row['actualmaster']?></p>
                                            <p><b>Using master by product or Jig（gauge） :</b> <?php echo $row['using_master']?></p>
                                        </div>
                                        <div class="col-4">                              
                                            <p><b>No confirmation :</b> <?php echo $row['cf']?></p>
                                            <p><b>Use/Unuse :</b> <?php echo $row['status']?></p>
                                            <p><b>Maker :</b> <?php echo $row['maker']?></p>
                                            <p><b>Camera Type :</b> <?php echo $row['camera_type']?></p>
                                            <p><b>Controller Type :</b> <?php echo $row['controler_type']?></p>
                                        </div>
                                    </div>
                                    <p>
                                    <a href="<?php echo $row['file']?>" class="link-black text-sm" download><i class="fas fa-link mr-1"></i>Download File</a>
                                    </p>
                                </div>
                                <?php
                                } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

</div>



<?php include 'layout/footer.php'?>