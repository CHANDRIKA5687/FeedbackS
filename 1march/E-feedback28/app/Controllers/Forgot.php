<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ResetPasswordModel;
use CodeIgniter\I18n\Time;
use Config\Services;
use CodeIgniter\Helpers\StringHelper;

class Forgot extends Controller
{
    public function index()
    {
        return view('forgetPassword');
    }

    public function sendEmail()
    {
        // helper(['form']);
        
        $model = new UserModel();
        
        $email = $this->request->getVar('email');
        $user = $model->where('email', $email)->first();
        
        // var_dump($user);
        if (!$user) {
            return view('forgetPassword', ['error' => 'User not found']);
        }
        
        $reset_password = new ResetPasswordModel();
        // $reset_password->where('user_id', $user['id'])->delete();

        // $reset_password = new ResetPasswordModel();
        // $reset_password->user_id = $user['id'];
        $token = bin2hex(random_bytes(16));
        $created_at = Time::now();
        // helper('string');
        // $token = random_string('alnum', 16);
        // echo $date = Time::now();
        
        $data = [
            'email' => $email,
            'token' => $token,
            'created_at' => $created_at->toDateTimeString(),
        ];
        
          $reset_password->insertToken($data);
        
        $email = \Config\Services::email();
        $email->setFrom('prashanthatekar5585@gmail.com', 'Prashant Shahaji Hatekar');
        $email->setTo($user['email']);
        $email->setSubject('Reset Password');
        $email->setMessage("Click the link to reset your password: " . base_url("resetpassword/$token"));
        echo base_url("resetpassword/$token");
        if ($email->send()) {
            echo "Success";
            // return view('forgetPassword', ['success' => 'An email has been sent to you']);
        } else {
            echo "Not Success";
            // return view('forgetPassword', ['error' => 'Failed to send email']);
        }
    }
}
