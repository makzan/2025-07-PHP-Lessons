<?php

require_once("models/person.php");

$viewData = [];

$people = getAllPeople();


$viewData["people"] = $people;

include("views/$mod/$action.php");