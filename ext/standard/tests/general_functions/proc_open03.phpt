--TEST--
proc_open
--SKIPIF--
<?php
if (!function_exists("proc_open")) echo "skip proc_open() is not available";
?>
--FILE--
<?php
$descriptor = array();
$pipes = array();
$cwd = dirname(__FILE__);
$env = array('foo' => 'abc', 'bar' => '');
$process = proc_open("php -f ./proc_open03.inc", $descriptor, $pipes, $cwd, $env);
proc_close($process);
?>
--EXPECT--
string(3) "abc"
string(0) ""
