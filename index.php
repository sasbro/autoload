<?php
require_once 'lib/autoloader.class.php';

spl_autoload_register(array(
    'Autoloader',
    'load'
));

$class_x = new ClassX();