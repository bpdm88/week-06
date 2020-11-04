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

    public function read($pages)
    {
        $this->pagesRead += $pages;
    }

    public function currentPage()
    {
        return $this->pagesRead;
    } 
}