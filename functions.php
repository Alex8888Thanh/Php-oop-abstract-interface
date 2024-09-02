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

