<?php

$page = "home";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

include "views/template.php";
