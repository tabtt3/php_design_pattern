<?php
require_once('./CharDisplay.php');
require_once('./StringDisplay.php');

class Main{
    public static function index()
    {
        $charDisplay = new CharDisplay('H');
        $charDisplay->display();

        print("\n");
        $stringDisplay = new StringDisplay('Hello World');
        $stringDisplay->display();
    }
}

Main::index();
