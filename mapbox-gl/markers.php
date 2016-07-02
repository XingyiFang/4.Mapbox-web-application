<?php
$data = $_REQUEST['data'];
$fp = fopen('markers.js', 'w');

fwrite($fp, 'var markers='.$data);

fclose($fp);


?>