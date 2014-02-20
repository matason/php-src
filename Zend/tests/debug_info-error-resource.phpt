--TEST--
Testing __debugInfo() magic method with bad returns RESOURCE
--FILE--
<?php

class C {
  public $val;
  public function __debugInfo() {
    return $this->val;
  }
  public function __construct($val) {
    $this->val = $val;
  }
}

$c = new C(fopen("data:text/plain,Foo", 'r'));
var_dump($c);
--EXPECTF--
Fatal error: __debuginfo() must return an array in %s/Zend/tests/debug_info-error-resource.php on line %d