<?php

namespace App\Library;

class Shelf 
{
    private $books = [];

    public function addBook(Book $book) : Shelf
    {
        $this->books[] = $book;

        $items = collect($this->books);

        $items->map(function ($book) {
            return $book->getTitle();
        })
    }

    public function titles() : array
    {
        return $this->books;
    }
}