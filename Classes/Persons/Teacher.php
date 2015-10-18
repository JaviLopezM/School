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
    /**
     * Especializacion
     * @var
     */
    public $specialization;
    /**
     * Teacher constructor.
     */
    public function __construct()
    {
    }
    /**
     * Imprimim el nom del professor.
     */
    public function render()
    {
        $this->type = "professor";
        parent::render();
    }
    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }
    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }
}