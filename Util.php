<?php
namespace Euler;

class Util
{
    public static function even($item)
    {
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

    public static function sieve($limit)
    {
        $primes = range(2, $limit);
        for ($prime = 2; $prime < sqrt($limit); $prime++) {
            if (isset($primes[$prime])) {
                for ($i = $prime*$prime; $i < $limit; $i += $prime) {
                    unset($primes[$i]);
                }
            }
        }
        return $primes;
    }

    public static function sum($arr)
    {
        return array_reduce(
            $arr,
            function ($acc, $x) { return $acc + $x; },
            0
        );
    }
}
