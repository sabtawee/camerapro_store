<?php

//define('DB_SERVER', '127.0.0.1'); // Your hostname
define('DB_SERVER', '10.121.42.48'); // Your hostname
define('DB_USER', 'root'); // Database Username
define('DB_PASS', 'P@ssw0rd'); // Database Password
define('DB_NAME', 'camera_db'); // Database Name

class DB_con
{
    public function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
        }
    }
    public function login($emp)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE empid = '$emp'");
        return $result;
    }
    public function addImage($img_name)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO cci_result (`img_name`) VALUES ('$img_name')");
        return $result;
    }
    public function getResult()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM cci_result");
        return $result;
    }
    public function deleteImage($id)
    {
        $result = mysqli_query($this->dbcon, "DELETE FROM cci_result WHERE (`id` = '$id')");
        return $result;
    }

    //! create number form HB Division

    public function getNumber()
    {
        $result = mysqli_query($this->dbcon, "SELECT number FROM hb_store_log ORDER BY number DESC LIMIT 1");
        return $result;
    }

    public function addNumber($gennum, $type, $number, $location, $div, $name)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO hb_store_log (`gennum`, `type`, `number`, `location`, `div`, `name`) 
        VALUES ('$gennum', '$type', '$number', '$location', '$div', '$name')");
        return $result;
    }
    public function addStoreNumber($gennum, $location, $div, $FactoryDiv, $name){
        $result = mysqli_query($this->dbcon, "INSERT INTO hb_store (`Number`, `Location`, `Div`, `FactryDiv`, `name`)
        VALUES ('$gennum', '$location', '$div', '$FactoryDiv', '$name')");
        return $result; 
    }
    public function checkNumber($number)
    {
        $result = mysqli_query($this->dbcon, "SELECT number FROM hb_store_log WHERE number = '$number'");
        return $result;
    }
    public function getFilenull(){
        $result = mysqli_query($this->dbcon, "SELECT * FROM hb_store WHERE file = '0'");
        return $result;
    }
    public function getStorehbById($id)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM hb_store WHERE id = '$id'");
        return $result;
    }

    public function uploadfileHbstore($id, $number, 
    $location, $div, $factryDiv, $line, 
    $process, $purpose, $ffci, $ev, $jugement, 
    $actualmaster, $using_master, $cf, 
    $status, $file, $maker,
    $camera_type, $controler_type, $name, $type)
    {
        $result = mysqli_query($this->dbcon, "UPDATE hb_store 
        SET 
        `Number` = '$number', 
        `Location` = '$location', 
        `Div` = '$div', 
        `FactryDiv` = '$factryDiv', 
        `line` = '$line', 
        `process` = '$process', 
        `purpose` = '$purpose', 
        `ffci` = '$ffci', 
        `ev` = '$ev', 
        `jugement` = '$jugement', 
        `actualmaster` = '$actualmaster', 
        `using_master` = '$using_master', 
        `cf` = '$cf', 
        `status` = '$status', 
        `file` = '$file',
        `maker` = '$maker',
        `camera_type` = '$camera_type',
        `controler_type` = '$controler_type',
        
        `name` = '$name',
        `type` = '$type'
        WHERE (`id` = '$id');");
        return $result;
    }

    public function getCameraHbAll()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM hb_store WHERE file != '0' group by Number");
        return $result;
    }
    public function getCameraHbByNumber($number)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM hb_store WHERE Number = '$number'");
        return $result;
    }







    public function AddRevice($number, 
    $location, $div, $factryDiv, $line, 
    $process, $purpose, $ffci, $ev, $jugement, 
    $actualmaster, $using_master, $cf, 
    $status, $file, $maker,
    $camera_type, $controler_type, $name, $type)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO hb_store (`Number`, `Location`, `Div`, `FactryDiv`, `line`, `process`, `purpose`, `ffci`, `ev`, `jugement`, `actualmaster`, `using_master`, `cf`, `status`, `file`, `name`, `maker`, `camera_type`, `controler_type`, `type`) 
        VALUES ('$number', 
        '$location', '$div', '$factryDiv', '$line', 
        '$process', '$purpose', '$ffci', '$ev', '$jugement', 
        '$actualmaster', '$using_master', '$cf', 
        '$status', '$file', '$name', '$maker',
        '$camera_type', '$controler_type', '$type')");
        return $result;
    }
    public function AddEvaluation()
    {

    }
    public function AddOther()
    {

    }

}