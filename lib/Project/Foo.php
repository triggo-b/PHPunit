<?php
namespace Project;

class Foo
{
	public function Math($a, $b)
	{
        if(is_int($b)) {
            throw new Exception\Alarm('Integer');
        }
		$Ex = $a / $b;
		return $Ex;
	}
}