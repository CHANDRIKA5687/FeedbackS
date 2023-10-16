<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\BaseModel;
use CodeIgniter\HTTP\URI;
use Config\Services;
// use CodeIgniter\Security\Random;


class ResetPasswordModel extends Model
{
    protected $table = 'reset_password';
    protected $primaryKey = 'id';
    // echo "<script type='text/javascript'>alert('Hello Chandrika');</script>";
    protected $allowedFields = [
        'user_id',
        'token',
        'created_at'
    ];
    public function insertToken($data): bool
    {
		return $this->db
                        ->table('reset_password')
                        ->insert($data);
    }

    // public function processForgotPassword(string $email)
    // {
    //     // Your code to check if the email exists in the database goes here
    //     // echo "<script type='text/javascript'>alert('Hello Chandrika');</script>";
    //     echo "<script type='text/javascript'>alert($email);</script>";
    //     // Generate a unique token
    //     // $token = Services::random()->token(32);
    //     $random = new Random();
    //     $token = $random->token(32);

    //     // Your code to store the email and token in the database goes here

    //     return $token;
    // }

    protected $useTimestamps = false;
}
