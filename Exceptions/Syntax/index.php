<?php

// 스크립트를 실행중에 예외가 일어난다
try {
    throw new Exception('Hello, world');
} catch(Exception $e) {
    var_dump($e->getMessage());
} finally { // 반드시 실행
    var_dump('Finally');
}

// 에러도 예외로 간주해서 처리하려면 
set_error_handler(function ($errno, $errstr) {
    throw new ErrorException($errstr, $errno);
});

set_exception_handler(fn (Exception $e) => var_dump($e->getMessage()));

/**
 * Error
 * Fatal 에러같은 경우엔 에러 클래스를 통해 잡을수 있다.
 */
try {
    new Myclass();
} catch (Error $e) {
    var_dump($e->getMessage());
}
