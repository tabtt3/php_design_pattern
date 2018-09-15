<?php
require_once('./AbstractDisplay.php');

class CharDisplay extends AbstractDisplay {
    private $char;

    public function __construct($char)
    {
        $this->char = $char;
    }

    public function open()
    {
        print("<<");
    }

    public function show()
    {
        print($this->char);
    }

    public function close()
    {
        print(">>");
    }
}
