<?php

$db_msg = null;

function connectDatabase(){
    $hostname="localhost";
    $username = "root";
    $password = "";
    try{
        $db = new PDO("mysql:host=localhost;port=3306;dbname=sensors",$username,$password);
    }

    catch(PDOException $e){
        $db = -1;
        $db_msg = "Khong ket noi duoc co so du lieu".$e->getMessage();
    }
    return $db;
}

function recordSensor($name, $value, $status){
    $db = connectDatabase();
    if($db){
        $sql = "INSERT  INTO sensorinfor(SensorName, SensorValue, SensorStatus) VALUES (\"$name\", \"$value\", $status)";

        try{
            $r = $db->query($sql);
            //echo $sql;
        }catch(PDOException $e){
            echo "Loi trong qua trinh gi du lieu" . $e->getMessage();
        }
    }
    else {
        echo $db_msg;
    }

}
?>
