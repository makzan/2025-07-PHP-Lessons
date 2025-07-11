<?php

require_once("connect_db.php");

$mod = "quotes";
$action = "index";

if (isset($_GET["mod"])) {
    $mod = $_GET["mod"];
}
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

include("views/template.php");
