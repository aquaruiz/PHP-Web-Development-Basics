<?php

namespace Core;

interface DataBinderInterface
{
    public function bind(array $form, string $className);
}