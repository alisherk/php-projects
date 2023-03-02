<?php
function foo() {
    $num_args = func_num_args();
    $args = func_get_args();
  
    for ($i = 0; $i < $num_args; $i++) {
      echo $args[$i] . "\n";
    }
  }
  
  foo(1, 2, 3, 4);
  
?>