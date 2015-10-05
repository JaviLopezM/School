<?php namespace Com\Iesebre\Dam2\javilopez\Persons;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 17:50
 */
class Teacher extends Person
{
    use Worker;

    public $specialization;

    public function render()
    {
        parent::render();
    }

}