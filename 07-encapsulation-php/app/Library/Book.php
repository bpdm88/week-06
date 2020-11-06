<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $pagesRead = 1;

    public function __construct(string $title, int $pages)
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

    public function getTitle() : string 
    {
        return $this->title;
    }
}