<?php

define('HOSTNAME', 'localhost');
define('HOSTUSER', 'root');
define('HOSTPASSWORD', '');
define('DATABASENAME', 'lista');

$conexao = mysqli_connect(HOSTNAME, HOSTUSER, HOSTPASSWORD, DATABASENAME);
