<?php

/**
 * Namespaces
 * namespace 아래는 구역
 * namespace는 파일당 1개가 권장
 */
namespace A
{
    const MESSAGE = __NAMESPACE__;

    class A 
    {
        public function foo()
        {
            return __METHOD__;
        }
    }

    function foo()
    {
        return __FUNCTION__;
    }
}

// 자식 네임스페이스
namespace A\B
{
    class A
    {
        function foo()
        {
            return __FUNCTION__;
        }   
    }

}

// 어떤 요소사용하고자할떄

namespace
{
    use A\A;
    use function A\foo;
    use const A\MESSAGE;

    $a = new A();
    var_dump(MESSAGE);

}