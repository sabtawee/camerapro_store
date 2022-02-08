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
         include_once('functions.php'); 
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
                  window.location = '../hb_store_num'
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