<?php


require_once "connect.php";
require_once "vendor/autoload.php";
require "Controllers/CustomersController.php";

$homePage = new Controllers\CustomersController();
echo $homePage->list();

