<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Controller\Admin;
use CodeIgniter\Database\ConnectionInterface;

class FacultyModel extends Model {
	
	protected $db;
	protected $table = 'faculty';
	protected $primarykey='id';
	// protected $allowedFields = [
	// 	'fname',
	// 	'designation',
	// 	'experience',
	// 	'email',
	// 	'phone'
	// ];
	// protected $returnType = 'array';
	// public function __construct(ConnectionInterface &$db) {
	// 	$this->db =& $db;
	// }

	function addFaculty($data) 
	{
		// echo "<script type='text/javascript'>alert('Hello');</script>";
		return $this->db
                        ->table('faculty')
                        ->insert($data);
	}
	function getData(){
		$db = \Config\Database::connect();
        $builder = $db->table('faculty');
        // $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
	function editFaculty($id)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('faculty');
        $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}
	function updateFaculty($data,$fid)
	{
		echo "<script type='text/javascript'>alert('Hello');</script>";
		// return 
		$db = \Config\Database::connect();
        $builder = $db->table('faculty');
		$builder->where('id', $fid);
		return $builder->update($data);
		// return $builder->update('faculty',$data,['id'=>$fid]);;
	}
	public function delete($id = null, bool $purge = false)
    {
        // Your delete logic goes here
    // }
	// function delete($id=null)
	// {
		// echo "<script type='text/javascript'>alert('Hello');</script>";
		// return $this->db->update('faculty',$data,['id'=>$id]);
		$db = \Config\Database::connect();
        $builder = $db->table('faculty');
		$builder->where('id', $id);
		$builder->delete();
		return;
	}
	public function insert_batch($data)
    {
		echo "<script>alert('pd');</script>";
		return $this->db
                        ->table('faculty')
                        ->insert($data);
		 //
		// var_dump($data);
		// return $this->db->table($this->table)->insertBatch($data);
		
                     
    }
}