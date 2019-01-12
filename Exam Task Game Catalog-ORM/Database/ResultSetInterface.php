<?php

namespace Database;

interface ResultSetInterface
{
    public function fetch(string $className) : \Generator;
    public function getOne(string $className);

}