<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class StudentModel extends Model {
	
	protected $db;
	protected $table = 'student';
	protected $returnType = 'array';
	// public function __construct(ConnectionInterface &$db) {
	// 	$this->db =& $db;
	// }

	function register($data) {
		return $this->db
                        ->table('student')
                        ->insert($data);

	}
	function getData(){
		$db = \Config\Database::connect();
        $builder = $db->table('student');
        // $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
	function editStudent($id)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('student');
        $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
	function updateStudent($data,$id)
	{
		// echo "<script type='text/javascript'>alert('Hello');</script>";
		// return $this->db->update('faculty',$data,['id'=>$id]);
		$db = \Config\Database::connect();
        $builder = $db->table('student');
		$builder->where('id', $id);
		$builder->update($data);
		return;
	}
	public function __construct() {
		parent::__construct();
	}
	public function insert_batch($data)
    {
		return $this->db
                        ->table('student')
                        ->insert($data);
		// echo "<script>alert('pd');</script>";
		// var_dump($data);
		// return $this->db->table($this->table)->insertBatch($data);
	               
    }
	 


}