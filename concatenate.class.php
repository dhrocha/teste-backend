<?php

class Concatenate
{

    private $prop1 = "";
    private $prop2 = "";
    private $prop3 = "";

    public function getProp1()
    {
        return $this->prop1;
    }
    public function getProp2()
    {
        return $this->prop2;
    }
    public function getProp3()
    {
        return $this->prop3;
    }

    public function setProp1($prop1)
    {
        $this->prop1 = $prop1;
    }
    public function setProp2($prop2)
    {
        $this->prop2 = $prop2;
    }
    public function setProp3($prop3)
    {
        $this->prop3 = $prop3;
    }

    public function concatenateProps($prop1, $prop2, $prop3)
    {
        $this->setProp1($prop1);
        $this->setProp2($prop2);
        $this->setProp3($prop3);

        return $this->getProp1() . " " . $this->getProp2() . " " . $this->getProp3();
    }

}
