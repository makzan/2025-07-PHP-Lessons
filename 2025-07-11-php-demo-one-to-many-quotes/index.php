<?php
require_once "connect_db.php";

include_once "models/quote.php";
include_once "models/person.php";

// PHP 4 types of includes
// include
// include_once
// require
// require_once


// two modes: default (single quote), list, person
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

if ($mode == "person") {
    $person_id = $_GET["id"];
    $person = getPerson($person_id);
    $quotes = getQuotesByPerson($person_id);
}

include "views/template.php";
