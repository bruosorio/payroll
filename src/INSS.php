<?php


class INSS {

    private $list;
    private $employee;
    const RATE = 0.28;

    function __construct(Employee $object) {
        $this->employee = $object;
    }
    //INSS sobre 13 salário
    function dec_ter_salario() {
        return $this->employee->getSalary() / 12 * self::RATE;
    }

    //INSS Mensal sobre salário
    function salario() {
        return $this->employee->getSalary() * self::RATE;
    }

}