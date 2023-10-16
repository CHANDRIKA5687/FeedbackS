<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
	protected $db='feedbackSystem';
	public function _construct()
	{
		
	}
	public function loginUser()
	{
		// $session = \Config\Services::session();
		$session=session();
		// $this->load->library('session');
		// Check if form has been submitted
	
			// Validate email and password
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
            $usermodel = new UserModel();
			// Check if user exists in database
			$data = $usermodel->getUser($email, $password);
			
			//   var_dump($data);
			// echo "<script type='text/javascript'>alert('$user_role');</script>";
			 if($data)
			 {
				// session_start();
				$role=$data[0];
				$user_role = $role['user_role'];

				if($user_role=='3')
				 {
 
					// session_start();
					 session()->set('user_id', $role['email']);
					// session()->setFlashdata('success', 'Login successfully for student');
					return redirect()->to('student');
					// session_destroy();
				 }
				else if($user_role=='2')
				{
					// session_start();
					 session()->set('user_id', $role['email']);
					 
					// session()->setFlashdata('success', 'Login successfully for student');
					return redirect()->to('faculty');
					// session_destroy();
				 }
				 else if($user_role=='1')
				{
					// session_start();
					// echo "<script type='text/javascript'>alert('Hello');</script>";
					 session()->set('user_id', $role['email']);
					//   session_start();
					// session()->setFlashdata('success', 'Login successfully for student');
					// session_destroy();
					return redirect()->to('admin');
				 }	 
			}
			else
			{
				session()->setFlashdata('error', 'Invalid email or password');
				return redirect()->to('login');
			}
	}
	public function logout()
    {
		// session_start();
        // session_destroy();
        // return redirect()->to('login');
		session()->remove([
            'logged_in',
            'user_id'
        ]);

        // Redirect to the login page
        return redirect()->to(base_url('login'));
    }
}