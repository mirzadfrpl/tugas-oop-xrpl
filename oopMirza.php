<?php

class Employed {

    public $nama;
    public $salary;

    public function __construct($nama, $salary)
    {
        $this->nama = $nama;
        $this->salary = $salary;
    }
}

$employed1 = new Employed("Mirza", 5000);

var_dump($employed1);