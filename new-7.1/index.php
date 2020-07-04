<?php

// Symmetric array destructuring


// IN normal array
$book = ['The Title', 'Joe Johnson'];
[$title, $author] = $book;
//var_dump($title, $author);

// In associative array
$book = ['title' => 'The Title', 'author' => 'Joe Johnson'];
['title' => $title, 'author' => $author] = $book;
//var_dump($title, $author);

$books = [
    ['title' => 'The Martian', 'author' => 'Andy Weir'],
    ['title' => 'Harry Potter', 'author' => 'JK Rowling'],
];

['title' => $book, 'author' => $author] = $books[0];
//var_dump($book, $author);

foreach ($books as ['title' => $title, 'author' => $author]) {
    var_dump($title, $author);
}
