<?php

// Lib/Person.php

class Person {

public function __construct(

private string $name

) {

}

public function speak() {

echo "Hi, my name is $this->name";

}

}

