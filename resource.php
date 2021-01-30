<?php
require('conn.php');
$resource = $API->comm('/system/resource/print');
$result = json_encode($resource);
echo $result;
$API->disconnect();
