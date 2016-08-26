<?php

require __DIR__ . '/vendor/autoload.php';

use Embed\Embed;

//Load any url:
$info = Embed::create('https://www.youtube.com/watch?v=WCSeiSOaHxY');
var_dump($info);