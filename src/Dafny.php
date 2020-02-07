<?php
declare(strict_types=1);
namespace Dafny\Runtime;

/**
 * Class Dafny
 * @package Dafny\Runtime
 */
class Dafny
{
    /**
     * @param string|bool|int|float|null|array|object $expr
     * @return string
     */
    public static function toString($expr): string
    {
        if (is_null($expr)) {
            return 'null';
        }
        if (is_bool($expr)) {
            return $expr ? 'true' : 'false';
        }
        if (is_array($expr)) {
            return var_export($expr, true);
        }
        if (is_object($expr)) {
            return var_export($expr, true);
        }
        if (is_string($expr)) {
            return $expr;
        }
        return (string) $expr;
    }
}
