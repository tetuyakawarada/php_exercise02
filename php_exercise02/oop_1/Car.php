<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }


    public function information()
    {
        return <<< EOM
        車の車種:$this->name
        車体番号:$this->number
        カラー:$this->color
        EOM;
    }
}
