<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem3 implements IProblem
{
    public function solve()
    {
        $num = 600851475143;
        $primes = Util::sieve(sqrt($num));
        foreach (array_reverse($primes) as $prime) {
            if ($num % $prime == 0) {
                return $prime;
            }
        }
    }
}

