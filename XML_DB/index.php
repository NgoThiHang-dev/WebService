<?php
    include 'connect.php';
    //createElement and appendChild()
    $result=mysqli_query($con, 'select * from courses');

    $xml=new DOMDocument("1.0", "utf-8");
    $xml->formatOutput=true;
    $courses=$xml->createElement("courses");
    $xml->appendChild($courses);
    while($row=mysqli_fetch_array($result)){
        $course=$xml->createElement("course");
        $courses->appendChild($course);
        $name=$xml->createElement("name", $row['name']);
        $courses->appendChild($name);
        $price=$xml->createElement("price", $row['price']);
        $courses->appendChild($price);
    }

    echo "<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("reports.xml");

?>