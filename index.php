<?php

spl_autoload_register();
include 'functions/debug.php';

use classes\Mage;

$michel = new Mage(100, 1, 10, 100, 0, 0);
debug($michel);

