<?php 
function __autoload($class) {
    include "include/$class.php";
}
$srch = new Search();
$blogInfo = $srch->getBlogInfo();
$count = count($blogInfo);

$data = array(
  'draw'=>1, 
  'recordsTotal'=>intval($count), 
  'recordsFiltered'=>intval($count), 
  'data'=>$blogInfo,
);
//send data as json format
echo json_encode($data);
?>  
