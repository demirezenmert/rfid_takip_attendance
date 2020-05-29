<?php

require 'Medoo.php';


use Medoo\Medoo;

//Finally make a connection to our database and store it in our $database variable.
//Modify these settings to match your own configuration.
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'takipsistemi',
    'server'        => 'localhost',
    'username'      => 'takipadmin',
    'password'      => 'demirezen'
]);
