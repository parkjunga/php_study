<?php

/**
 * 생성자 - 객체가 생성될 떄 
 * 소명자 - 객체가 사라질 때
 */

 class A 
 {
    // __ 매직메서드
    public function __construnct()
    {
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        var_dump(__METHOD__);
    }
 }

 $a = new A();
 unset($a); // 먼저 해제하면 Hello 출력전에 해제됨
 var_dump('Hello');

 class B
 {
    public $msg;

    public function __construnct()
    {
        $this->msg = $msg;
    }
 }

 $b = new B('HEllo');

 class C extends A 
 {
    public function __construnct()
    {
        parent::__construnct();
    }

    public function __destruct()
    {
        parent::__destruct();
    }
 }

 # c가 생성자가 없으면 a가 출력됨
