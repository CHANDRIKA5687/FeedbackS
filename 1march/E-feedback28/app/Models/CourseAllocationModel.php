<?php 
namespace App\Models;
use CodeIgniter\Controller;
use CodeIgniter\Database\BaseConnection;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class CourseAllocationModel extends Model {
	
	protected $db;
    protected $table='courseallocation';
	

    // function getSubject($email) 
    // {
    //     // // echo "<script type='text/javascript'>alert('Model');</script>";
    //     // $db = \Config\Database::connect();
	// 	// $query = $db->query("SELECT course.fullForm FROM student LEFT JOIN academic ON academic.academic_id = student.academic_id Left JOIN course ON course.semester = academic.semester and course.courseId=academic.courseId WHERE student.email = '$email'");  
        
    //     // return $query->getResultArray();

    //     $builder = $this->db->table('student')
    //         ->select('course.fullForm')
    //         ->join('academic', 'academic.academic_id = student.academic_id', 'left')
    //         ->join('course', 'course.semester = academic.semester AND course.courseId = academic.courseId', 'left')
    //         ->where('student.email', $email);
    //         $builder->distinct();
    //     return $builder->get()->getResultArray();
	// }
	public function getSubject()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('course');
        // $builder->where(['id' => $id]);
        $builder->select("fullForm");
        $query = $builder->get();
        $query = $query->getResultArray();

        // return $this->response->setJSON($data);
        return $query;
       
    }
    function getData(){
		$db = \Config\Database::connect();
        $builder = $db->table('course');
        // $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();

        // return $this->response->setJSON($data);
        return $query;
        
        // $db = \Config\Database::connect();

        // $query = $db->query("SELECT branch FROM course");
        // $data = $query->getResultArray();
        // $this->response = service('response');
        // return $this->response->setJSON($data);
  
	}
    function allocate($data)
    {
        return $this->db
                        ->table('courseallocation')
                        ->insert($data);
    }
}