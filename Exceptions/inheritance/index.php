<?php

/**
 * Exception extends
 * Exception 클래스를 상속받기
 */

class MyException extends Exception 
{

}

try {
    throw new MyException('Hello world');
} catch(MyException $e) {
    var_dump(MyException::class);
} catch(Exception $e) {
    var_dump($e->getMessage());
}