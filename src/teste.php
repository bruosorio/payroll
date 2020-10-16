<?php


include_once __DIR__ . '/Employee.php';

$list = array(
    "Funcionario1", "Offshore","Local",1000.00
);

$a = New Employee(...$list);

var_dump($a);