<?php
require_once('./BookShelf.php');

class Main
{
    public static function index()
    {
        $bookShelf = new BookShelf();

        $bookShelf->appendBook(new Book('Around the world in 80 Days'));
        $bookShelf->appendBook(new Book('Bible'));
        $bookShelf->appendBook(new Book('Cinderella'));
        $bookShelf->appendBook(new Book('Daddy-Long-Legs'));

        $it = $bookShelf->iterator();

        while ($it->hasNext()) {
            $book = $it->next();
            echo $book->getName() . "\n";
        }
    }
}

Main::index();
