<?php
require_once('./Iterate.php');
require_once('./BookShelf.php');

class BookShelfIterator implements Iterate
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function Next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}
