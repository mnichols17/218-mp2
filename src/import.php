<?php
function autoloader($class) {
    include $class . '.php';
}
spl_autoload_register('autoloader');
$file = new File();
$array = $file::readCSVtoArray("../data/data.csv");
$obj = new CreateSQLTable();
$obj->createTaskTable($array[1],$array[0]);