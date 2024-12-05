<?php
$conn = sqlsrv_connect("", array("Database" => "", "UID" => ""));
if (!$conn) die(print_r(sqlsrv_errors(), true));