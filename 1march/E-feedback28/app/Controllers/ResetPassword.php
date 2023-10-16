<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\ResetPasswordModel;


class ResetPassword extends Controller
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        echo $request;
        echo "<script type='text/javascript'>alert('index of Reset Password');</script>";
        $token = $request->getVar('token');
        $reset_password = new ResetPasswordModel();
        $user = $reset_password->getUserByToken($token);
        
        if ($user) {
            return view('reset_password', [
                'token' => $token
            ]);
        } else {
            return view('reset_password', [
                'error' => 'Invalid token'
            ]);
        }
    }
    
    public function reset(RequestInterface $request, ResponseInterface $response)
    {
        $token = $request->getVar('token');
        $password = $request->getVar('password');
        $confirmPassword = $request->getVar('confirm_password');
        
        if ($password === $confirmPassword) {
            $reset_password = new ResetPasswordModel();
            $user = $reset_password->getUserByToken($token);
            
            if ($user) {
                $data = [
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                
                $reset_password->updateUser($user['id'], $data);
                return view('reset_password', [
                    'success' => 'Password has been reset successfully'
                ]);
            } else {
                return view('reset_password', [
                    'error' => 'Invalid token'
                ]);
            }
        } else {
            return view('reset_password', [
                'error' => 'Passwords do not match'
            ]);
        }
    }
}
