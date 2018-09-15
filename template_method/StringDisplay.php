<?php
require_once('./AbstractDisplay.php');

class StringDisplay extends AbstractDisplay {
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function open()
    {
        print("+----------+\n");
    }

    public function show()
    {
        print("|" . $this->string . "|\n");
    }

    public function close()
    {
        print("+----------+\n");
    }
}
