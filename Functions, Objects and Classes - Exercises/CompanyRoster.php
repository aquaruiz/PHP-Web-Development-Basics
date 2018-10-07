<?php
$n = intval(readline());
$employees = [];
$departments = [];

require "Employee.php";

for($i = 0; $i < $n; $i++){
    $input = explode(" ", readline());

    $name = array_shift($input);
    $salary = floatval(array_shift($input));
    $position = array_shift($input);
    $department = array_shift($input);

    $employees[$i] = new Employee($name, $salary, $position, $department);

    if(!array_key_exists($department, $departments)){
        $departments[$department] = [];
    }

    $departments[$department][]= $salary;

    if(count($input) > 0){
        for($j = 0; $j < count($input); $j++){
            if(is_numeric($input[$j])){
                $age = intval($input[$j]);
            } else {
                $email = $input[$j];
            }
        }
    }

    if(isset($age)){
        $employees[$i]->setAge($age);
    }

    unset($age);

    if(isset($email)){
        $employees[$i]->setEmail($email);
    }

    unset($email);
}

//for($i = 0; $i < count($employees); $i++){
//    $employees['totalSalary'] = $employees['totalSalary'] / ()
//}

$avgSalaries = [];

foreach ($departments as $key=>$department) {
//    var_dump(count($department));
    $sumSalaries = array_sum($department);
    $avgSalary =  $sumSalaries / count($department);
    $avgSalaries[$key]= $avgSalary;
}

arsort($avgSalaries);
$richestDepartment = array_keys($avgSalaries)[0];
echo "Highest Average Salary: " . $richestDepartment . PHP_EOL;

$output = array_filter($employees, function (Employee $a) use ($richestDepartment){
    return $a->getDepartment() == $richestDepartment;
});

usort($output, function (Employee $a, Employee $b) {
    return $b->getSalary() <=> $a->getSalary();
});

foreach ($output as $employee) {
    echo $employee->getName() . " " . $employee->getSalary() . " " . $employee->getEmail() . " " . $employee->getAge() . " " . PHP_EOL;
}
//var_dump($output);
//var_dump($employees);
?>