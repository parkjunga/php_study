<?php

class A 
{
    private $msg;

    public function __isset($name)
    {
        return isset($this->name);
    }

    public function __unset($name)
    {
        unset($this->name);
    }

    // 프로퍼티를 위한 셋터
    public function __set($name, $value)
    {
        return $this->name = $value;
    }
    
    // 프로퍼티를 위한 겟터
    public function __get($name)
    {
        return $this->name;
    }

    // public function setMesgge;
    // public function getMesgge;
}



$a = new A();
$a->msg = 'TEST';
