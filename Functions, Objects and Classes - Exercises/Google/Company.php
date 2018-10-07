<?php

class Company
{
    private $name;
    private $department;
    private $salary;

    /**
     * Company constructor.
     * @param $name
     * @param $department
     * @param $salary
     */
    public function __construct($name, $department, $salary)
    {
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getSalary(): string
    {
        return number_format($this->salary, 2, ".", "");
    }

    public function __toString(): string
    {
        return "{$this->getName()} {$this->getDepartment()} {$this->getSalary()}";
    }


}