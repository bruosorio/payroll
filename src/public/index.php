<?php 

require __DIR__ . "/vendor/autoload.php";

use Payroll;

$a = New Payroll\Employee();

$a->name = "Bruno";
$a->last = "111Osorio";

print($a->last);
