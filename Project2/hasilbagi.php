<?php
require_once 'fungsibagi.php';

$pembagian = new fungsibagi;
// $pembagian->set_pembagian(2,2);
// $pembagian->set_pembagian(7,2);
$pembagian->set_pembagian(5,0);


    echo "pembagian = ".$pembagian->get_pembagian();
    echo"</br>";
 

?>