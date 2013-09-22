--TEST--
Tests the \PHP\Depend\Util\MathUtil::mul() method with a disabled bcmul() function.
--INI--
disable_functions=bcmul
--FILE--
<?php
require_once 'PHP/Depend/Util/MathUtil.php';
var_dump(\PHP\Depend\Util\MathUtil::mul(1000, 1000));
var_dump(\PHP\Depend\Util\MathUtil::mul(10000, 10000));
var_dump(\PHP\Depend\Util\MathUtil::mul(100000, 100000));
?>
--EXPECTREGEX--
string\(7\) ["\']1000000["\']
string\(9\) ["\']100000000["\']
string\(11\) ["\']10000000000["\']
