<?php

require_once("models/quote.php");
require_once("models/person.php");

$viewData = [];

$quote = getRandomQuote();
$quote["person"] = personFromQuote($quote["id"]);

$viewData["quote"] = $quote;


include("views/$mod/$action.php");