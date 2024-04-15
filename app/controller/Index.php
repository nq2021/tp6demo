<?php
namespace app\controller;

use app\BaseController;
use ReflectionClass;


// class Bar
// {
// }
// class Foo 
// {
//     public function __construct(Bar $bar)
//     {
//         echo 'Foo2';
//     }
// }
// $reflect=new ReflectionClass('app\controller\Foo');
// $constructor = $reflect->getConstructor();
// $params = $constructor->getParameters();


// foreach ($params as $param) {
//     $reflectionType = $param->getType();
//     dump($reflectionType->getName());
// }

// dump($reflect);


// $bar = new Bar(); 
// $foo = new Foo($bar);

class Index extends BaseController
{
    public function index(Foo $foo)
    {
        // 读取配置文件
        // $bar = new Bar(); 
        // $foo = new Foo($bar);
        // $foo = invoke('app\controller\Foo');
        dump($foo);
        return '';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
