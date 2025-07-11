<?php

require_once "connect_db.php";

function getPerson($id) {
    global $pdo;
    $query = "SELECT * FROM people WHERE id=$id";
    $stmt = $pdo->query($query);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);
    return $person;
}

function getAllPeople() {
    global $pdo;
    $query = "SELECT * FROM people";
    $stmt = $pdo->query($query);
    $people = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $people;
}

function personNameFromQuote($id) {
    return personFromQuote($id)["name"];
}
function personFromQuote($id) {
    global $pdo;
    $quote = getQuote($id);
    $person_id = $quote['person_id'];
    $query = "SELECT * FROM people WHERE id=$person_id";
    $stmt = $pdo->query($query);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);
    return $person;
}