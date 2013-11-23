<?php
$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$array = array(
  array(
    "7/1/2014", 
    'encomenda de adubo', 
    '#', 
    '#51a351'
  ),
  array(
    "17/12/2013", 
    'flores lindas', 
    'calendar.php', 
    'blue'
  )
);

header('Content-Type: application/json');
echo json_encode($array);
exit;
?>