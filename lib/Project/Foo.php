<?php
namespace Project;

class Foo
{
	public function Math($a, $b)
	{
        if(is_int($b)) {
            throw new Exception\Alarm('Integer');
        }
        if(is_bool($b)) {
            throw new Exception\Alarm('Boolean');
        }
		$Ex = $a / $b;
		return $Ex;
	}
}