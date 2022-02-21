<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Control</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <?php 
         include_once('functions_pm.php'); 
         $data = new DB_con();

    if (isset($_POST['login'])) {
        $emp = $_POST['emp'];
        

        $result = $data->login($emp);
        $num = mysqli_fetch_array($result);

        $type = $num['type'];

        if ($type == 'Admin') {
            $_SESSION['empid'] = $num['empid'];
            echo '<script>';
            echo "Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'สวัสดี $emp',
                  text: 'เข้าสู่ระบบ',
                  showConfirmButton: false,
                  timer: 1500
                  }).then(function() {
                  window.location = '../admin/home';
                  });";
            echo '</script>';
        } else {
          echo '<script>';
          echo "Swal.fire({
                  icon: 'error',
                  title: 'ท่านไม่สามารถเข้าได้',
                  text: 'ทานไม่ใช่ Admin'
              }).then(function() {
                  window.location = '../login';
              });";
          echo '</script>';
        }
    }
    if (isset($_POST['create_number'])) {
        $location = $_POST['location'];
        $div = $_POST['div'];
        $type = $_POST['type'];
        $number = $_POST['number'];
        $name = $_POST['name'];
        $gennum = $div."-".$type."-".$number;
        $FactoryDiv = $location.$div;
        $checkNumber = $data->checkNumber($number);  
        $checknum = mysqli_num_rows($checkNumber);
 
        if($checknum == 0){
            $sql = $data->addNumber($gennum, $type, $number, $location, $div, $name);
            $addStore = $data->addStoreNumber($gennum, $location, $div, $FactoryDiv, $name);
            echo '<script>';
            echo "Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'บันทึกเข้าสู่ระบบ',
                  text: 'Number : $gennum',
                  }).then(function() {
                  window.location = '../pm_store_num'
                  });";
            echo '</script>';
        }else{
            echo '<script>';
            echo "Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'โปรดตรวจสอบ'
                }).then(function() {
                    window.history.back();
                });";
            echo '</script>';
        }

    }

    if (isset($_POST['uplod_hbstore'])){
        $id = $_GET['id'];
        $number = $_POST['number'];
        $location = $_POST['location'];
        $div = $_POST['div'];
        $factryDiv = $_POST['factryDiv'];
        $line = $_POST['line'];
        $process = $_POST['process'];
        $purpose = $_POST['purpose'];
        $ffci = $_POST['ffci'];
        $ev = $_POST['ev'];
        $jugement = $_POST['jugement'];
        $actualmaster = $_POST['actualmaster'];
        $using_master = $_POST['using_master'];
        $cf = $_POST['cf'];
        $status = $_POST['status'];
        $name = $_POST['name'];
        $maker = $_POST['maker'];
        $camera_type = $_POST['camera_type'];
        $controler_type = $_POST['controler_type'];
        $type = "Camera Program";
        $file_name = $_FILES['file']['name'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file = "upload/pm_store/cameraProgram/".$file_name;
        if ($file_name == '') {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'Upload Error',
              }).then(function() {
                  window.history.back();
              });";
            echo '</script>';
        } else {
            $upload = $data->uploadfileHbstore($id, $number, 
            $location, $div, $factryDiv, $line, 
            $process, $purpose, $ffci, $ev, $jugement, 
            $actualmaster, $using_master, $cf, 
            $status, $file, $maker,
            $camera_type, $controler_type, $name, $type);
            move_uploaded_file($file_tmp,"../upload/pm_store/cameraProgram/".$file_name);
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Upload Success',
                text: '$number'
                }).then(function() {
                window.location = '../pm_store';
                });";
            echo '</script>';
        }
    }

    if (isset($_POST['revise_hbstore'])){
        $id = $_GET['id'];
        $number = $_POST['number'];
        $location = $_POST['location'];
        $div = $_POST['div'];
        $factryDiv = $_POST['factryDiv'];
        $line = $_POST['line'];
        $process = $_POST['process'];
        $purpose = $_POST['purpose'];
        $ffci = $_POST['ffci'];
        $ev = $_POST['ev'];
        $jugement = $_POST['jugement'];
        $actualmaster = $_POST['actualmaster'];
        $using_master = $_POST['using_master'];
        $cf = $_POST['cf'];
        $status = $_POST['status'];
        $name = $_POST['name'];
        $maker = $_POST['maker'];
        $camera_type = $_POST['camera_type'];
        $controler_type = $_POST['controler_type'];
        $type = "Revise Program";
        $file_name = $_FILES['file']['name'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file = "upload/pm_store/cameraProgram/".$file_name;
        if ($file_name == '') {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'Upload Error',
              }).then(function() {
                  window.history.back();
              });";
            echo '</script>';
        } else {
            $upload = $data->AddRevice($number, 
            $location, $div, $factryDiv, $line, 
            $process, $purpose, $ffci, $ev, $jugement, 
            $actualmaster, $using_master, $cf, 
            $status, $file, $maker,
            $camera_type, $controler_type, $name, $type);
            move_uploaded_file($file_tmp,"../upload/pm_store/cameraProgram/".$file_name);
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Revise Success',
                text: '$number'
                }).then(function() {
                window.location = '../pm_store';
                });";
            echo '</script>';
        }
    }
    if (isset($_POST['ev_hbstore'])){
        $id = $_GET['id'];
        $number = $_POST['number'];
        $location = $_POST['location'];
        $div = $_POST['div'];
        $factryDiv = $_POST['factryDiv'];
        $line = $_POST['line'];
        $process = $_POST['process'];
        $purpose = $_POST['purpose'];
        $ffci = $_POST['ffci'];
        $ev = $_POST['ev'];
        $jugement = $_POST['jugement'];
        $actualmaster = $_POST['actualmaster'];
        $using_master = $_POST['using_master'];
        $cf = $_POST['cf'];
        $status = $_POST['status'];
        $name = $_POST['name'];
        $maker = $_POST['maker'];
        $camera_type = $_POST['camera_type'];
        $controler_type = $_POST['controler_type'];
        $type = "Evaluation Data";
        $file_name = $_FILES['file']['name'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file = "upload/pm_store/evaluationData/".$file_name;
        if ($file_name == '') {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'Upload Error',
              }).then(function() {
                  window.history.back();
              });";
            echo '</script>';
        } else {
            $upload = $data->AddRevice($number, 
            $location, $div, $factryDiv, $line, 
            $process, $purpose, $ffci, $ev, $jugement, 
            $actualmaster, $using_master, $cf, 
            $status, $file, $maker,
            $camera_type, $controler_type, $name, $type);
            move_uploaded_file($file_tmp,"../upload/pm_store/evaluationData/".$file_name);
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Evaluation Success',
                text: '$number'
                }).then(function() {
                window.location = '../pm_store';
                });";
            echo '</script>';
        }
    }

    if (isset($_POST['other_hbstore'])){
        $id = $_GET['id'];
        $number = $_POST['number'];
        $location = $_POST['location'];
        $div = $_POST['div'];
        $factryDiv = $_POST['factryDiv'];
        $line = $_POST['line'];
        $process = $_POST['process'];
        $purpose = $_POST['purpose'];
        $ffci = $_POST['ffci'];
        $ev = $_POST['ev'];
        $jugement = $_POST['jugement'];
        $actualmaster = $_POST['actualmaster'];
        $using_master = $_POST['using_master'];
        $cf = $_POST['cf'];
        $status = $_POST['status'];
        $name = $_POST['name'];
        $maker = $_POST['maker'];
        $camera_type = $_POST['camera_type'];
        $controler_type = $_POST['controler_type'];
        $type = "Other";
        $file_name = $_FILES['file']['name'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file = "upload/pm_store/other/".$file_name;
        if ($file_name == '') {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'Upload Error',
              }).then(function() {
                  window.history.back();
              });";
            echo '</script>';
        } else {
            $upload = $data->AddRevice($number, 
            $location, $div, $factryDiv, $line, 
            $process, $purpose, $ffci, $ev, $jugement, 
            $actualmaster, $using_master, $cf, 
            $status, $file, $maker,
            $camera_type, $controler_type, $name, $type);
            move_uploaded_file($file_tmp,"../upload/pm_store/other/".$file_name);
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Other Upload Success',
                text: '$number'
                }).then(function() {
                window.location = '../pm_store';
                });";
            echo '</script>';
        }
    }

    if (isset($_POST['addimage'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $img_name = "upload/".$file_name;
        


        if ($file_name == '') {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'ท่านไม่สามารถเข้าได้',
              }).then(function() {
                  window.location = '../addimg';
              });";
            echo '</script>';
            
        } else {
            $data->addimage($img_name);
            move_uploaded_file($file_tmp,"../upload/".$file_name);
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Upload Success',
                text: '$file_name'
                }).then(function() {
                window.location = '../addimg';
                });";
            echo '</script>';
        }
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql = $data->deleteImage($id);

        if ($sql) {
            echo '<script>';
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Deleted Successfully',
                }).then(function() {
                window.location = '../addimg';
                });";
            echo '</script>';
                       
        } else {
            echo '<script>';
            echo "Swal.fire({
                  icon: 'error',
                  title: 'Delete Failed',
              }).then(function() {
                  window.location = '../addimg';
              });";
            echo '</script>';
        }
    }
?>

    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>