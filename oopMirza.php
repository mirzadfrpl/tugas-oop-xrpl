<?php

class Employed {

    public $nama;
    public $salary;
    public $posisi;

    public function __construct($nama, $salary, $posisi)
    {
        $this->nama = $nama;
        $this->salary = $salary;
        $this->salary = $posisi;
    }
}

$employed1 = new Employed("Mirza", 5000, true);

var_dump($employed1);