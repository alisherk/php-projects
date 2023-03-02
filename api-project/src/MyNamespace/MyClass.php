<?php
namespace MyNamespace;

use MyNamespace\MyClass2;


class MyClass {
    public function __construct(private string $my_var) {
        echo "calling $my_var";
    }
}

new MyClass2();


?>