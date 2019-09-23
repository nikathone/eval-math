<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license
 */

namespace SergeR\Util\EvalMath;

/**
 * Class EvalMathFuncs
 * @package SergeR\Util\EvalMath
 */
class EvalMathFuncs
{
    public static function iif($condition, $then, $else)
    {
        return $condition ? $then : $else;
    }

    public static function max(...$args)
    {
        return max($args);
    }
}