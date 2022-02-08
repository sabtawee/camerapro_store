<?php 

session_start();

if ($_SESSION['empid'] == "") {
    header("location: ../login");
} else {
?>

<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<!-- http://10.121.1.123:1823/balance/homedata -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Computer</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Computer In System</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                No
                            </th>
                            <th style="width: 20%">
                                Computer No
                            </th>
                            <th style="width: 20%">
                                Division
                            </th>
                            <th style="width: 20%">
                                Process Use
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Status
                            </th>

                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                 
                        include_once('../functions/functions.php');
                        $data = new DB_con();
                        $i = 1;
                        $sql = $data->getShowComputer();
                        while($row = mysqli_fetch_array($sql)) {   
                        ?>
                        <tr>
                            <td>
                                <?php echo $i ?>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['com_number']; ?>
                                </a>
                                <br />
                                <small>
                                    <?php echo $row['emp']." ".$row['nameE']; ?>
                                </small>
                            </td>
                            <td>
                                <?php echo $row['div']." ".$row['department']; ?>
                            </td>
                            <td>
                                <?php echo $row['pro_use']; ?>
                            </td>
                            <td class="project_progress">
                                <?php echo $row['phone']; ?>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success"><?php echo $row['status']; ?></span>
                            </td>
                            <td class="project-actions text-center">
                                <a href="computer_update.php?id=<?php echo $row['id'] ?>" rel="noopener"
                                    class="btn btn-danger"><i class="fas fa-edit"></i>Edit</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a href="com_result_export" class="btn btn-primary">Export to Excel</a>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'layout/footer.php'?>

<?php 
}
?>