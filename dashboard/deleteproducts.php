<?php
session_start();
require_once("lib/productus.php");
//echo $_GET['proid'];die;
$data=$obj1->deleteproducts($_GET['proid']);
if($data == 1){
    header("LOCATION:selectproducts.php");
}
else{
    header("LOCATION:selectproducts.php");

}
?>
