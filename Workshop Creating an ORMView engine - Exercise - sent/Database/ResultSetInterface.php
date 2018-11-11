<?php

namespace Database;


interface ResultSetInterface
{
    public function fetchAll(?string $className = null): \Generator;

    public function getOne(?string $className = null);
}