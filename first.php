<?php
/**
 * 初始化swoole_server服务
 */
$serv = new swoole_server("127.0.0.1", 9501, SWOOLE_BASE, SWOOLE_SOCK_TCP);

/**
 * 设置服务的参数
 */
$serv->set(array(
    'worker_num' => 4,
    'daemonize' => true,
    'backlog' => 128,
));

