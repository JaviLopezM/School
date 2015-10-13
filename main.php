<?php namespace Com\Iesebre\Dam2\javilopez\Persons;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 18:13
 */

require __DIR__ . "/vendor/autoload.php";


use Com\Iesebre\Dam2\javilopez\Persons\Person;

$person = new Person();
$person->type = "senyoreta";
$person->setGivenName("Pepita palotes\n");
$person->render();;

