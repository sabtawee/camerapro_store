<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<?php 
include_once('functions/functions_ma.php');
$data = new DB_con();
$num = $data->getNumber();
$numrow = mysqli_num_rows($num);
if ($numrow == 0){
    $number = 0;
}else{
    while($row = mysqli_fetch_array($num)){
        $number = $row['number'];
    }
}

$count = $number + 1;
$count = sprintf('%03d',$count);
?>

<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">MA Camera Store <?php echo $count;  ?></h1>
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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Process Code</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-3 mt-2">
                                    <p><b>01</b> Automotive</p>
                                </div>
                                <div class="col-3 mt-2">
                                    <p><b>02</b> Non automotive</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card card-green">
                <div class="card-header">
                    <h3 class="card-title">Create Number</h3>
                </div>
                <form class="form-horizontal" method="POST" action="functions/api_ma">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder="Division" value="LPB"
                                    required autocomplete="location" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="div" placeholder="Division" value="PM"
                                    required autocomplete="div">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Process</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" maxlength="2" placeholder="Process" name="type"
                                    autofocus autocomplete="type" required>
                                <option >01</option>
                                <option >02</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ลำดับ Number ล่าสุด" value="<?php echo $count;  ?>"
                                    name="number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Create By</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Name"
                                    name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="create_number" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger float-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>



<?php include 'layout/footer.php'?>