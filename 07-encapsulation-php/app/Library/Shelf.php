<?php

namespace App\Library;

class Shelf 
{
    private $books = [];

    public function addBook(Book $book) : Shelf
    {
        $this->books = $this->book[];
        return $this;

    }

    public function titles() : array
    {
        return $this->books;
    }
}