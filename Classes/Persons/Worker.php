<?php namespace Com\Iesebre\Dam2\javilopez\Persons;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 18:26
 */
trait Worker
{
    /**
     * @var
     */
    public $salary;
    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }
    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}