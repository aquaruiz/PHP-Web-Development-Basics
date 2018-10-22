<?php
/**
 * 
 */
class Worker extends Human
{
	private $weekSalary;
	private $workHoursPerDay;
	private $salaryPerHour;

	public function __construct(string $firstName, string $lastName, float $weekSalary, int $workHoursPerDay)
	{
		parent::__construct($firstName, $lastName);
		$this->setWeekSalary($weekSalary);
		$this->setWorkHoursPerDay($workHoursPerDay);
		$this->calcMoneyPerHour();
	}

	protected function setLastName(string $lastName){
		if (strlen($lastName) <= 3) {
			throw new Exception("Expected length more than 3 symbols!Argument: lastName");
		}

		parent::setLastName($lastName);
	}

	protected function setWeekSalary(float $weekSalary){
		if ($weekSalary <= 10) {
			throw new Exception("Expected value mismatch!Argument: weekSalary");
		}

		$this->weekSalary = $weekSalary;
	}

	protected function setWorkHoursPerDay(int $workHoursPerDay){
		if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
			throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
		}

		$this->workHoursPerDay = $workHoursPerDay;
	}

	protected function calcMoneyPerHour() {
		$salaryPerHour = $this->weekSalary / 7 / $this->workHoursPerDay;
		$this->salaryPerHour = $salaryPerHour;
	}

	public function __toString(){
		$fname = parent::getFirstName();
		$lname = parent::getLastName();
		return "First Name: {$fname}\nLast Name: {$lname}\nWeek Salary: ". number_format($this->weekSalary, 2, ".", "") . "\nHours per day: " . number_format($this->workHoursPerDay, 2, ".", "") . "\nSalary per hour: " .number_format($this->salaryPerHour, 2, ".", "");
	}
}
?>