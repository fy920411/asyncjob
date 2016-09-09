<?php
/**
 * Created by PhpStorm.
 * User: yu.fu
 * Date: 2016/9/8
 * Time: 15:21
 */
include('../src/server.php');
include('../src/strconst.php');
use src\server;

class demoserver extends server {
    public function __construct($ip, $port) {
        parent::__construct($ip, $port);
        $this->configure(['worker_num' => 2, 'task_worker_num' => 2]);
        $this->start();
    }
}

$a = new demoserver('127.0.0.1', 9501);
