<?php

namespace App\Data;

class ControllerDTO
{
    /**
     * @var int
     */
    private $controllerId;
    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getControllerId(): int
    {
        return $this->controllerId;
    }

    /**
     * @param int $controllerId
     */
    public function setControllerId(int $controllerId): void
    {
        $this->controllerId = $controllerId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}