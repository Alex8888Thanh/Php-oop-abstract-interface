<?php

// public/index.php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

require basePath('Lib/Person.php');

$person = new Person("Danny");

$person->speak();

