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
                    <h1 class="m-0">Edit Computer</h1>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                            <?php 
                            include_once('../functions/functions.php');
                            $id = $_GET['id'];
                            $data = new DB_con();
                            $sql = $data->getComputerById($id);
                            while($row = mysqli_fetch_array($sql)) {
                            ?>
                    <form action="../functions/api.php?id=<?php echo $id ?>" method="post">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Edit From</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-3">
                                        <label>Division</label>
                                        <select type="text" class="form-control" name="div" placeholder="Division"
                                            required>
                                            <option><?php echo $row['div'] ?></option>
                                            <option>PM</option>
                                            <option>HB</option>
                                            <option>MA</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label>Emp No</label>
                                        <input type="text" class="form-control" name="emp"
                                            value="<?php echo $row['emp'] ?>" placeholder="Emp No" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Process/Line/Machine</label>
                                        <input type="text" class="form-control" name="pro_use"
                                            value="<?php echo $row['pro_use'] ?>" placeholder="ex. ST05" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Location Use</label>
                                        <select type="text" class="form-control" name="loc_use"
                                            placeholder="Location Use" required>
                                            <option><?php echo $row['loc_use'] ?></option>
                                            <option>Phase 2</option>
                                            <option>Phase 6</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="<?php echo $row['phone'] ?>"
                                            name="phone" placeholder="Tel.ext" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Type</label>
                                        <select type="text" class="form-control" name="type"
                                            placeholder="ex. DELL/SN0000001" required>
                                            <option><?php echo $row['type'] ?></option>
                                            <option>Notebook</option>
                                            <option>PC</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-3">
                                        <label>Department</label>
                                        <select type="text" class="form-control" name="department" placeholder="ex. SIC"
                                            required>
                                            <option><?php echo $row['department'] ?></option>
                                            <?php                 
                                            $sql = $data->getDepartment();
                                            while($row = mysqli_fetch_array($sql)) {   
                                            ?>
                                            <option><?php echo $row['name'] ?></option>
                                            <?php
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                    <?php 
                                }
                                ?>
                                    <div class="col-3">
                                        <label>Adjectments</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['empid'] ?>"
                                            name="editname" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update_com" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>


                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'layout/footer.php'?>

<?php 
}
?>