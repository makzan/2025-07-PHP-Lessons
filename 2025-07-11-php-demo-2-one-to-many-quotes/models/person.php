<?php
require_once "connect_db.php";

function getPerson($id) {
    global $pdo;
    $query = "SELECT * FROM people WHERE id=$id";
    $stmt = $pdo->query($query);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);
    return $person;
}
