<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$address = '192.168.1.8';
$port = 9000;
$sock = socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, $address, $port) or die('Unable to bind');
socket_listen($sock);
$client = socket_accept($sock);
echo "connection established: $client";
socket_close($client);
socket_close($sock);
?>