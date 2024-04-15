<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

require __DIR__ . '/../vendor/autoload.php';

// 自定义用哪个环境变量文件
// 读取.envconfig文件，中的env配置,
$env = parse_ini_file(__DIR__ . '/../.envconfig');
$envvalue = $env['env'];

// 执行HTTP应用并响应
if($envvalue){
    $http = (new App())->setEnvName($envvalue)->http;
}else{
    $http = (new App())->http;
}


$response = $http->run();

$response->send();

$http->end($response);
