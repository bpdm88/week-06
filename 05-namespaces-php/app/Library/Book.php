<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $pagesRead = 1;

    public function __construct($title, $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $pages) : void
    {
        $this->pagesRead += $pages;
    }

    public function currentPage() : int
    {
        return $this->pagesRead;
    } 
}