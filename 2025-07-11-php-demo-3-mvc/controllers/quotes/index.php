<?php

require_once("models/quote.php");
require_once("models/person.php");

$viewData = [];

$quotes = getAllQuotes();

for ($i = 0; $i < count($quotes); $i++) {
    $quotes[$i]["person"] = personFromQuote($quotes[$i]["id"]);
}

$viewData["quotes"] = $quotes;


include("views/$mod/$action.php");