<?php


namespace Entites\Enhancements;


abstract class EnhancementAbstract implements EnhancementInterface
{
    public function __toString()
    {
        return basename(get_class($this));
    }
}