<!-- su dung DOM nham tao ra cac phan tu trong file XML -->
<?php
    //tao XML declaration
    $doc=new DOMDocument('1.0', 'utf-8');
    $doc->formatOutput=true;
    //tao ra the root co ten la note
    $root=$doc->createElement('note');
    //noi the root vao document
    $doc->appendChild($root);
    //tao ra phan tu co ten la from
    $from=$doc->createElement('from');
    //thiet lap noi dung cho phan tu from
    $from->nodeValue="Hang Ngo";
    //thiet lap thuoc tinh cho phan tu from
    $from->setAttribute('name', 'ThanhHoa');
    //dat phan tu from la con cua phan tu root
    $root->appendChild($from);
    //ghi file xml
    $doc->save('note.xml');
    //thong bao thanh cong
    echo "Lưu thành công";
?>