<?php
require_once "controllers/get.controller.php";
$respose = new getController();
print_r($respose -> obtenerEmpleados());