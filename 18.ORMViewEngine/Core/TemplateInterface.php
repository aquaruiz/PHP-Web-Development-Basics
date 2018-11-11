<?php

namespace Core;


interface TemplateInterface
{
    public function render($templateName, $data = null);
}