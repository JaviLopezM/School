<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 5/10/15
 * Time: 20:11
 */

namespace Com\Iesebre\Dam2\javilopez\Curriculum;

use Com\Iesebre\Dam2\javilopez\Persons\Student;

class ClassroomGroup
{
    public $students = array();
    function __construct(array $students)
    {
        $this->students = $students;
    }
    public function addStudent(Student $student)
    {
        array_push($this->students, $student);
    }
    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }
    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }
}