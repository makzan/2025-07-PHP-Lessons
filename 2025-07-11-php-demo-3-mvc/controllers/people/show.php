<?php

require_once("models/quote.php");
require_once("models/person.php");

$viewData = [];

$id = $_GET["id"];

$person = getPerson($id);
$quotes = getQuotesByPerson($id);

$viewData["person"] = $person;
$viewData["quotes"] = $quotes;


include("views/$mod/$action.php");