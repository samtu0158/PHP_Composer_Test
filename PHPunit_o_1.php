<?php

class Mystack
{
   public $stack = array();

   function push($push_item){
      array_push($this->stack,$push_item);
   }

   function pop(){
      array_pop($this->stack);
   }

   function MyCount(){
      return count($this->stack);
   }
}

?>
