<?php



class abstract Employee {

    private $funcionario;
    private $shore;
    private $source;
    private $salary;

    function __construct($funcionario, $shore, $source, $salary) {
        $this->funcionario = $funcionario;
        $this->shore = $shore;
        $this->source = $source;
        $this->salary = $salary;
    }

    public static function getInstance($funcionario, $shore, $source, $salary) {
        return New Employee($funcionario, $shore, $source, $salary);
    }

    function setFuncionario($funcionario) {
        $this->funcionario;
        return $this;
    }

    function setShore($shore) {
        $this->shore = $shore;
        return $this;
    }

    function setSource($source) {
        $this->source = $source;
        return $this;
    }

    function setSalary($salary) {
        $this->salary = $salary;
        return $this;
    }

    function getFuncionario() {
        return $this->funcionario;
    }

    function getShore() {
        return $this->shore;
    }

    function getSource() {
        return $this->source;
    }

    function getSalary() {
        return $this->salary;
    }

    

}