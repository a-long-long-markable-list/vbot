<?php
/**
 * Created by PhpStorm.
 * User: HanSon
 * Date: 2016/12/7
 * Time: 16:33
 */

require_once __DIR__ . './../vendor/autoload.php';

$robot = new \Hanson\Robot\Robot([
    'tmp' => realpath('./tmp') . '/',
    'debug' => true,
    'tuling' => true,
    'tuling_key' => ''
]);

//$robot->run();

$robot = new \Hanson\Robot\Foundation\Robot([
    'tmp' => realpath('./tmp') . '/',
    'debug' => true,
    'tuling' => true,
    'tuling_key' => ''
]);


$robot->server->setMessageHandler(function($message){
//    if($message->type === 'text'){
//
//    }elseif ($message->type === 'location'){
//        return Message::make();
//    }
//
//    if($message->FromUserName === ''){
//        # do something;
//    }

});
$robot->server->run();