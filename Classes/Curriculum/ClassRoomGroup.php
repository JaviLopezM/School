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
    /**
     * Matriu d'estudiants.
     * @var array
     */
    public $students = array();
    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }
    /**
     * @param Student $student
     */
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