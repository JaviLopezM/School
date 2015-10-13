<?php namespace Com\Iesebre\Dam2\javilopez\Persons;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{
    use Worker;
    public $dual = false;
    public $classroomGroup;
    public function __construct($dual = null)
    {
        $this->type = "estudiant";
        if ($dual != null)
            $this->$dual;
    }
    public function render()
    {
        if ($this->dual == true) {
            echo parent::render() . ", i cobra " . $this->salary;
        } else
            parent::render();
    }
}
