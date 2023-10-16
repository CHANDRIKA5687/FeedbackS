<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Controller\Student;
use CodeIgniter\Database\ConnectionInterface;

class FeedbackModel extends Model {
	
	protected $db;
	protected $table = 'theoryfeedback';

    function add_feedback($data) {
		return $this->db
                        ->table('theoryfeedback')
                        ->insert($data);
	}
	public function getData()
	{
		$db = \Config\Database::connect();
        $builder = $db->table('theoryfeedback');
        // $builder->where(['id' => $id]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
	}

}