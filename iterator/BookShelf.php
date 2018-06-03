<?php
require_once('./Aggregate.php');
require_once('./Book.php');
require_once('./BookShelfIterator.php');

class BookShelf implements Aggregate
{
    public $books = [];
    public $last = 0;

    public function getBookAt(int $index)
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function iterator()
    {
        return new BookShelfIterator($this);
    }

    public function getLength()
    {
        return $this->last;
    }
}

