
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

<?php

// functions.php

function dd($value) {

echo '<pre>'; // respect line spaces in the $value

var_dump($value);

echo '</pre>';

die();

}

function basePath($path) {

return BASE_PATH . $path;

}

<?php

// public/index.php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

require basePath('Lib/Person.php');

$person = new Person("Danny");

$person->speak();

