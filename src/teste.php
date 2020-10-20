<?php


include_once __DIR__ . '/Employee.php';
include_once __DIR__ . '/INSS.php';

$list = array(
    "Funcionario1", "Offshore","Local",1000.00
);

$employee = New Employee(...$list);
$inss = New INSS($employee);


echo $employee->getSalary() . PHP_EOL;
echo $inss->salario();