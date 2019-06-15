<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
//----------------------------------- DATABASE CONFIG END ------------------------------------------------------


if (isset($_GET['subcat'])) { $subcat = $_GET['subcat'];} else $subcat = "default";
if (isset($_GET['page'])) { $page = $_GET['page'];} else $page = 1;
if (isset($_GET['company'])) { $company = $_GET['company'];} else $company = "default";
if (isset($_GET['category'])) { $category = $_GET['category'];} else $category = "default";
if(!$page){$page = 1;}
if(!$company){}
if(!$category){$category = "default";}

?>