<?php
// phpinfo();
//ini_set("soap.wsdl_cache_enabled", "0");

class client
{
    public function __construct()
    {
        ini_set("soap.wsdl_cache_enabled", "0");  
        $params = array('location'=>'http://localhost/WebService/soap/server.php',
        'uri'=>'urn://localhost/WebService/soap/server.php',
        'trace'=>true,
        'soap_version' => SOAP_1_2);
        $this->instance = new SoapClient(NULL, $params);
    }

    public function getName($id_array){
        //return $this->instance->__soapCall('getStudentName', $id_array);
        return $this->instance->__soapCall('getStudentName', $id_array);

    }
}
$client = new client();
?>
