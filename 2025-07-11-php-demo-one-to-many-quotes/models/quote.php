<?php
require_once "connect_db.php";

// SQL basics
// INSERT INTO quotes (content, who)
// VALUES ('The only thing we have to fear is fear itself.', 'Franklin D. Roosevelt')

// Fetch all records
// SELECT * FROM quotes

// Fetch records by id
// SELECT * FROM quotes WHERE id=1

// Fetch random record
// SELECT * FROM quotes ORDER BY RAND() LIMIT 1

// or Fetch all, then shuffle the array in PHP


function getAllQuotes() {
    global $pdo;
    $query = "SELECT * FROM new_quotes";
    $stmt = $pdo->query($query);
    $quotes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $quotes;
}

function getPreviousQuote($id) {
    global $pdo;
    $query = "SELECT * FROM new_quotes WHERE id < $id ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->query($query);
    $quote = $stmt->fetch(PDO::FETCH_ASSOC);
    return $quote;
}

function getNextQuote($id) {
    global $pdo;
    $query = "SELECT * FROM new_quotes WHERE id > $id ORDER BY id ASC LIMIT 1";
    $stmt = $pdo->query($query);
    $quote = $stmt->fetch(PDO::FETCH_ASSOC);
    return $quote;
}

function getQuote($id) {
    global $pdo;
    $query = "SELECT * FROM new_quotes WHERE id=$id";
    $stmt = $pdo->query($query);
    $quote = $stmt->fetch(PDO::FETCH_ASSOC);
    return $quote;
}

function getRandomQuote() {
    global $pdo;

    $query = "SELECT * FROM new_quotes ORDER BY RAND() LIMIT 1";
    $stmt = $pdo->query($query);
    $quote = $stmt->fetch(PDO::FETCH_ASSOC);
    return $quote;
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

function getQuotesByPerson($person_id) {
    global $pdo;
    $query = "SELECT * FROM new_quotes WHERE person_id=$person_id";
    $stmt = $pdo->query($query);
    $quotes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $quotes;
}
