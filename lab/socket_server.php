<?php
$socket = stream_socket_server("tcp://0.0.0.0:8183", $errno, $errstr);

$response = <<<EOF
HTTP/1.1 200 OK
Server: Apache
Content-Length: 5
Content-Type: text/html

Hello
EOF;

while($connection = stream_socket_accept($socket)) {
    fwrite($connection, $response);
    fclose($connection);
}