<?php

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Worker Trait
{
    use Worker;

    public $classRoomGroup;
    public function __construct($dual=null)
    {
        if ($dual !=null){
            $this->dual =$dual;
        }
    }

    public function render()
    {
        if($this->dual){

        }

    }

}