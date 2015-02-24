<?php
namespace Euler;

class Util
{
    public static function sum($arr) {
        return array_reduce(
            $arr,
            function ($acc, $x) { return $acc + $x; },
            0
        );
    }

    public static function even($item) {
        return ($item % 2) == 0;
    }

    public static function fib($n, $max = 0)
    {
        $a = 1;
        $b = 2;
        for (; $n > 0; $n--) {
            yield $a;
            $b += $a;
            $a = $b - $a;
            if ($max > 0 && $a > $max) {
                return;
            }
        }
    }
}
