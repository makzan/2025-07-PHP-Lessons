<?php

require_once("models/quote.php");
require_once("models/person.php");

$viewData = [];

$id = $_GET["id"];

$quote = getQuote($id);
$quote["person"] = personFromQuote($id);

$viewData["quote"] = $quote;


include("views/$mod/$action.php");