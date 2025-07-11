<?php
require_once "connect_db.php";

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

function getQuotesByPerson($person_id) {
    global $pdo;
    $query = "SELECT * FROM new_quotes WHERE person_id=$person_id";
    $stmt = $pdo->query($query);
    $quotes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $quotes;
}
