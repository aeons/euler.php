<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem7 implements IProblem
{
    public function solve()
    {
        return array_values(Util::sieve(104744))[10000];
    }
}
