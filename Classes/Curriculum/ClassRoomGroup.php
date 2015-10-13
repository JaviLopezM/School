<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 20:11
 */

namespace Com\Iesebre\Dam2\javilopez\Curriculum;

use Com\Iesebre\Dam2\javilopez\Persons\Student;
class ClassRoomGroup
{
    public $students = array();

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @param $Student
     */
    public function addStudent(Student $student)
    {
    array_push($this->students,$students);

    }
    public function addCourse(Course,$student)
    {
        array_push($this->Course,$students);

    }