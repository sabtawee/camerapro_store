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
        <?php 
        include_once('functions/functions_pm.php');
        $id = $_GET['id'];
        $data = new DB_con();
        $sql = $data->getStorehbById($id);
        while($row = mysqli_fetch_array($sql)) {
        ?>
        <div class="col-12">
            <div class="card card-green">
                <div class="card-header">
                    <h3 class="card-title">Other File</h3>
                </div>
                <form class="form-horizontal" method="POST" action="functions/api_pm.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" placeholder=""
                                    value="<?php echo $row['Number']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder="" value="<?php echo $row['Location']; ?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="div" placeholder="" value="<?php echo $row['Div']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Factory Division</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="factryDiv" placeholder="" value="<?php echo $row['FactryDiv']; ?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Line</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="line" placeholder="Line" value="<?php echo $row['line']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Process</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="process" placeholder="Process" value="<?php echo $row['process']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Purpose</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="purpose" placeholder="Purpose(angle,position,color, length, etc)"  value="<?php echo $row['purpose']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">flowout from Camera</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ffci" placeholder="If flowout from Camera inspection" value="<?php echo $row['ffci']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Equipment verification</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ev" placeholder="Equipment verification" value="<?php echo $row['ev']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judgement</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jugement" placeholder="OK/NG Judgement by master" value="<?php echo $row['jugement']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Actual Master</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="actualmaster" placeholder="OK/NG Actual master value record" value="<?php echo $row['actualmaster']; ?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Using Master</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="using_master" placeholder="Using master by product or Jig (gauge)" value="<?php echo $row['using_master']; ?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No confirmation</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cf" placeholder="No confirmation"  value="<?php echo $row['cf']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Use/Unuse</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="status" placeholder="Use/Unuse"  value="<?php echo $row['status']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Maker</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="maker" placeholder="Maker"  value="<?php echo $row['maker']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Camera Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="camera_type" placeholder="Camera Type"  value="<?php echo $row['camera_type']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Controller Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="controler_type" placeholder="Use/Unuse"  value="<?php echo $row['controler_type']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">File Other Upload</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="other_hbstore" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger float-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <?php 
    } 
    ?>
    </section>

</div>



<?php include 'layout/footer.php'?>