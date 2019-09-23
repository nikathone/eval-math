<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license BSD 2.0
 */

namespace SergeR\Util\EvalMath;


use SergeR\Util\EvalMath\Methods\AbstractMethod;

class MethodsRegistry
{
    protected $methods = [];

    public function set(AbstractMethod $method)
    {
        $this->methods[$method->getName()] = $method;
        return $this;
    }

    public function unsetByName($name)
    {
        unset($this->methods[$name]);
        return $this;
    }

    public function findByName($name)
    {
        return (isset($this->methods[$name]) and $this->methods[$name] instanceof AbstractMethod) ? $this->methods[$name] : null;
    }
}