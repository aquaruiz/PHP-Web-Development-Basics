<?php

namespace Core;

class DataBinder implements DataBinderInterface
{

    public function bind(array $form, string $className)
    {
        $object = new $className;

        foreach ($form as $key => $value) {
            $methodName = 'set'
                . implode('',
                    array_map(function($element){
                        return ucfirst($element);
                    }, explode('_',$key))
                );

            if(method_exists($object, $methodName)){
                $object->$methodName($value);
            }
        }

        return $object;
    }
}