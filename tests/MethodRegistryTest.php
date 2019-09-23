<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license BSD 2.0
 */

namespace SergeR\Util\EvalMath\Tests;


use PHPUnit\Framework\TestCase;
use SergeR\Util\EvalMath\Methods\Maximum;
use SergeR\Util\EvalMath\MethodsRegistry;

class MethodRegistryTest extends TestCase
{
    private $registry;

    protected function setUp()
    {
        $this->registry = new MethodsRegistry();
    }

    public function testSetFindUnset()
    {
        $r = $this->registry->set(new Maximum);
        $this->assertInstanceOf(MethodsRegistry::class, $r);

        $c = $this->registry->findByName('max');
        $this->assertInstanceOf(Maximum::class, $c);

        $r = $this->registry->unsetByName('max');
        $this->assertInstanceOf(MethodsRegistry::class, $r);
    }

}