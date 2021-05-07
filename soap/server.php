<?php
class server
{
    private $con;
    public function __construct()
    {
        $this->con = (is_null($this->con))? self::connect():$this->con;
    }

    static function connect()
    {
        // $con=mysqli_connect('localhost', 'root', 'root');
        // $db=mysqli_select_db( $con, 'soap');
        // return $con;
        // $servername = "localhost";
        // $database = "soap";
        // $username = "root";
        // $password = "";
        // // Create connection
        // $con = mysqli_connect($servername, $username, $password, $database);
        // if (!$con) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }
        $con=mysqli_connect("localhost","root","","soap");
        //$db=mysqli_select_db($con,'soap');
        return $con;
       
    }

    public function getStudentName($id_array)
    {
        $id=$id_array['id'];
        $sql="SELECT * FROM students WHERE id = '$id'";
        $qry=mysqli_query($this->con,$sql);
        $res=mysqli_fetch_array($qry);
        return $res['name'];
        return "Ngô Thị Hằng";
    }
}

ini_set('soap.wsdl_cache_ttl', '0');
$params = array('uri' => 'WebService/soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass("server");
$server->handle();
?>
