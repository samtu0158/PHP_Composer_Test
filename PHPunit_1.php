<?php

require_once('PHPunit_o_1.php');
require 'vendor/autoload.php';

class Mystacktest extends PHPUnit_Framework_TestCase
{
   public function testPushAndPop()
   {
     $stack1 = new Mystack();
     $this->assertEquals(0, $stack1->MyCount());

     $stack1->push('foo');
     $this->assertEquals(1, $stack1->MyCount());

     $stack1->pop();
     $this->assertEquals(0, $stack1->MyCount());

   }
}

?>
