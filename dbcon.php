<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
$factory = (new Factory)
    ->withServiceAccount('venari-151de-firebase-adminsdk-ituw1-d4bedfd029.json')
    ->withDatabaseUri('https://venari-151de-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>