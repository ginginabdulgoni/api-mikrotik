<?php
require('conn.php');
$interface = $API->comm('/interface/print');
$result = json_encode($interface);
echo $result;


$API->disconnect();
