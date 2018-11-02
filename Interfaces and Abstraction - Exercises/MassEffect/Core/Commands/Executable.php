<?php


namespace Core\Commands;


interface Executable
{
    public function execute(array $args = []): string;
}