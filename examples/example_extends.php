<?php

/**
 * Copyright (c) 2020 Jorge Patricio Castro Castillo MIT License.
 */

use eftec\bladeone\BladeOne;

include __DIR__."/../lib/BladeOne.php";

$title='It is a title';
$content='Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
 exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
 dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
  mollit anim id est laborum.';

$countries=['Chile','Canada','China','Cape Verde'];


$bladeOne=new BladeOne(__DIR__.'/views', __DIR__.'/compiles');
$bladeOne->setMode(BladeOne::MODE_DEBUG);

// This example uses the next files

// views/layout/mylayout.blade.php
// views/exampleextends/example.blade.php

echo $bladeOne->run('exampleextends.example', ['title'=>$title,'content'=>$content,'countries'=>$countries]);



