<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function saveStudent() 
    {
		$fname	= $this->request->getPost('fname');
		$mname		= $this->request->getPost('mname');
        $lname		= $this->request->getPost('lname');
        $email		= $this->request->getPost('email');
		$password		= $this->request->getPost('conpass');
        $phone_no		= $this->request->getPost('mobno');
		$rollNo		= $this->request->getPost('prnno');
        $dob		= $this->request->getPost('dob');
        $gender		= $this->request->getPost('gender');
        $branch     = $this->request->getPost('branch');
        $class     = $this->request->getPost('class');
			
		$data = [
			'fname'		=> $fname,
			'mname'		=> $mname,
			'lname'		=> $lname,
            'email'			=> $email,
			'password'		=> $password,
            'mobile_no'		=> $phone_no,
            'prn_no'		=> $rollNo,
            'gender'		=> $gender,
            'dob'		=> $dob,
            'branch'    => $branch,
            'class'     => $class
            
        ];
         $studentmodel = new StudentModel();
		$result = $studentmodel->register($data);
		if($result) {
            return redirect()->to('login');
		} 
        else {
			session()->setFlashdata('error', 'What Wrong With');
            return redirect()->to('register');
		}
	}
    public function forgetPassword()
    {
        return view('forgetPassword');
    }
}
