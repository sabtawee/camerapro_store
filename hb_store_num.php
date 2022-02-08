<?php include 'layout/header.php'?>

<?php include 'layout/navbar.php'?>

<?php include 'layout/menu.php'?>

<?php 
include_once('functions/functions.php');
$data = new DB_con();
$num = $data->getNumber();
while($row = mysqli_fetch_array($num)){
    $number = $row['number'];   
}
?>

<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">HB Camera Store <?php echo $number; ?></h1>
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
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="cJwMm06FMOt8HsIg1Jviz2tNseBMZjhflYH9KglU">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="div" placeholder="Division" value="HB"
                                    required autocomplete="div">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Process</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Sub Process" name="subprocess"
                                    autofocus autocomplete="subprocess" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Drawing No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ลำดับ Number ล่าสุด" value="A256"
                                    name="dwgno">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Create By</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Create By" value="T3210"
                                    name="updateby">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger float-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>



<?php include 'layout/footer.php'?>