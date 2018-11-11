<?php

namespace Database;


interface ResultSetInterface
{
    public function fetchAll(?string $className = null) : \Generator;
}