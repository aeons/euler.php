<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem10 implements IProblem
{
    public function solve()
    {
        return Util::sum(Util::sieve(2000000));
    }
}
