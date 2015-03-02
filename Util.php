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

    public static function product($arr)
    {
        return array_reduce(
            $arr,
            function ($acc, $x) { return $acc * $x; },
            1
        );
    }

    public static function sieve($limit)
    {
        $primes = range(0, $limit);
        unset($primes[0]);
        unset($primes[1]);
        for ($prime = current($primes); $prime < sqrt($limit); $prime = next($primes)) {
            for ($i = $prime*$prime; $i <= $limit; $i += $prime) {
                unset($primes[$i]);
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
