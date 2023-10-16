<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class SubjectModel extends Model {
	
	protected $db;
    protected $table='course';
	

	function getSubject($email) 
    {
        // // echo "<script type='text/javascript'>alert('Model');</script>";
        // $db = \Config\Database::connect();
		// $query = $db->query("SELECT course.fullForm FROM student LEFT JOIN academic ON academic.academic_id = student.academic_id Left JOIN course ON course.semester = academic.semester and course.courseId=academic.courseId WHERE student.email = '$email'");  
        
        // return $query->getResultArray();

        $builder = $this->db->table('student')
            ->select('course.fullForm')
            ->join('academic', 'academic.academic_id = student.academic_id', 'left')
            ->join('course', 'course.semester = academic.semester AND course.courseId = academic.courseId', 'left')
            ->where('student.email', $email);
            $builder->distinct();
        return $builder->get()->getResultArray();
	}
    function getData(){
		$db = \Config\Database::connect();
        $builder = $db->table('course');
        // $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
    function register($data) {
		return $this->db
                        ->table('course')
                        ->insert($data);

	}
    function editCourse($id)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('course');
        $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
    // protected $table = 'course';

    // Method to get all branches
    public function getBranches()
    {
        $query = $this->db->query('SELECT DISTINCT branch FROM course');
        return $query->getResultArray();
    }

    // Method to get standards based on the selected branch
    public function getStandards($branchId)
    {
        $query = $this->db->query('SELECT DISTINCT standard FROM course WHERE branch = "'.$branchId.'"');
        return $query->getResultArray();
    }

    // Method to get subjects based on the selected standard
    public function getSubjects($standardId)
    {
        $query = $this->db->query('SELECT fullForm FROM course WHERE standard = "'.$standardId.'"');
        return $query->getResultArray();
    }
}