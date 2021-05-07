<?php
    //khoi tao doi tuong document
    $document=new DOMDocument();
    //load tai lieu XML
    $document->load('DS_SV.xml');
    //lay ra root node
    $root=$document->documentElement;
    //in ra nội dung của root element
    $content=$root->textContent;
    echo 'root = '.$content;
    //lay ra danh sach cac node con
    $listchilds=$root->childNodes;
    //duyet qua danh sach cac node con cua root node
    foreach($listchilds as $child)
    {
        if($child->nodeType==XML_ELEMENT_NODE)
            echo '<br>'.$child->nodeValue;
    }
    // //lay ra danh sach cac phan tu student
    // $listStudent=$root->getElementsByTagName('student');
    // foreach($listStudent as $sv)
    // {
    //     if($sv->nodeType==XML_ELEMENT_NODE)
    //         echo '<br>'.$sv->nodeType;
    // }
?>