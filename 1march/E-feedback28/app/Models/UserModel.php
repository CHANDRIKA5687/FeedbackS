<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UserModel extends Model {
	
	protected $db;
    protected $table='users';
	

	public function getUser($email, $password)
    {
    //    echo "<script type='text/javascript'>alert('$password');</script>";
       
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where(['email' => $email, 'password' => $password]);
        $builder->select("*");
        $query = $builder->get();
        $query = $query->getResultArray();
        return $query;
    }
}