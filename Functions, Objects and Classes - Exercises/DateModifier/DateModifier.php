<?php

class DateModifier
{
    private $date;

    /**
     * DateModifier constructor.
     * @param $date
     */
    public function __construct($date)
    {
        $this->setDate($date);
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(string $date)
    {
        $date = strtotime(implode("-", explode(" ", $date)));
        $this->date = $date;
    }

    public function calcDiff($nextDate){
        $datediff = abs($this->getDate() - $nextDate->getDate());
        return round($datediff / (60 * 60 * 24));
    }
}