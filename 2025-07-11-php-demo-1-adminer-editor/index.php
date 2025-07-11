<?php
require_once "connect_db.php";

include_once "models/quote.php";

// PHP 4 types of includes
// include
// include_once
// require
// require_once


// two modes: default (single quote) and list
$mode = "single";
if (isset($_GET["mode"])) {
    $mode = $_GET["mode"];
}

if ($mode == "single") {
    if (isset($_GET["id"])) {
        $quote = getQuote($_GET["id"]);
    } else {
        $quote = getRandomQuote();
    }
}

include "views/template.php";
