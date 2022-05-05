<?php
require_once 'classes1.php';
require_once 'student.php';

$person = new Person();
$person->name = 'vaksa';
    echo '<br>';
    var_dump($person);
    echo '/<br>';
    die();

echo $person->hello();
$person2 = new Person('misho','cicisha');
echo $person2->hello();

$person->setAge(27);
echo $person->getAge(). '<br>';
$person2->setAge(29);
echo $person2->getAge(). '<br>';

?>
