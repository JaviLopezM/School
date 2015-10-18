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
    public $specialization;
    public function __construct($dual)
    {
        parent::__construct();
        if ($dual != null) {
            $this->dual = $dual;
        }
    }
    public function render()
    {
        $this->type = "estudiant";
        if($this->dual){
            parent::render() . " i cobra" . $this->salary;
        } else {
            parent::render();
        }
        parent::render();
    }
}