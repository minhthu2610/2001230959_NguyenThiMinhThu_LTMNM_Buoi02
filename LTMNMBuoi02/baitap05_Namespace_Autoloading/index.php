<?php
require 'autoload.php';

use app\Models\User;

$user = new User();
$user->sayHello();
