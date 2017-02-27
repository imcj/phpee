<?php
function sig_handler($signo)
{
    print($signo);
}

$r = fopen("php://stdin", "r");
$w = fopen("php://stdout", "w");

pcntl_signal(SIGHUP,  "sig_handler");
pcntl_signal(SIGQUIT,  "sig_handler");
pcntl_signal(SIGINT,  "sig_handler");
pcntl_signal(SIGTERM,  "sig_handler");
pcntl_signal(SIGTTIN,  "sig_handler");
// pcntl_signal(SIGTTOUT,  "sig_handler");
pcntl_signal(SIGUSR1,  "sig_handler");
pcntl_signal(SIGUSR2,  "sig_handler");
pcntl_signal(SIGWINCH,  "sig_handler");

$child = pcntl_fork();

print($child . "\n");
print (posix_getppid(). "\n");

$except = NULL;

// TODO: 主进程保持
// TODO: 子进程使用主进程文件描述符

// $reads = array($r);
// $writes = array($w);
// $ready = stream_select($reads, $writes, $e, 0);
// $recv = fread($r, 1);