<?php

$quotes = [];

$quotes[] = ["The only thing we have to fear is fear itself.", "Franklin D. Roosevelt"];
$quotes[] = ["I think, therefore I am.", "René Descartes "];
$quotes[] = ["To be, or not to be: that is the question.", "William Shakespeare "];
$quotes[] = ["Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.", "Bernard M. Baruch"];
$quotes[] = ["I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin but by the content of their character.", "Martin Luther King, Jr."];
$quotes[] = ["The unexamined life is not worth living.", "Socrates"];
$quotes[] = ["But man is not made for defeat. A man can be destroyed but not defeated.", "Ernest Hemingway "];
$quotes[] = ["I love you the more in that I believe you had liked me for my own sake and for nothing else.", "John Keats "];
$quotes[] = ["Life does not cease to be funny when people die any more than it ceases to be serious when people laugh.", "George Bernard Shaw "];
$quotes[] = ["The greatest glory in living lies not in never falling, but in rising every time we fall.", "Nelson Mandela"];


function getQuote($id) {
    global $quotes;
    return $quotes[$id];
}

function getRandomQuote() {
    global $quotes;
    $randomIndex = array_rand($quotes);
    return $quotes[$randomIndex];
}
