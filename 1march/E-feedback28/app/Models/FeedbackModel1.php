<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Controller\Admin;
use CodeIgniter\Database\ConnectionInterface;

class FeedbackModel1 extends Model {
	
	protected $db;
	protected $table = 'practicalFeedback';
	protected $primarykey='id';
	// protected $allowedFields = 

	function add_feedback($data) {
		return $this->db
                        ->table('practicalFeedback')
                        ->insert($data);
	}
}