<?php
require('conn.php');
$userhotspot = $API->comm('/ip/hotspot/user/print');
$json = json_encode($userhotspot);
$result = json_decode($json, true);
// echo $result;
foreach ($result as $data) {
    echo $data['name'] . '<br>';
}
$API->disconnect();
