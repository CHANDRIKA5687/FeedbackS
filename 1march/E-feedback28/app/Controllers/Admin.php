<?php

namespace App\Controllers;

use App\Models\FacultyModel;
use \App\Models\StudentModel;
use \App\Models\SubjectModel;
use \App\Models\FeedbackModel;
use \App\Models\FeedbackModel1;
use \App\Models\HomeModel;
use \App\Models\CourseAllocationModel;
use DeepCopy\Filter\Doctrine\DoctrineEmptyCollectionFilter;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }
    // public function add_faculty()
    // {
    //     return view('Admin/add_faculty');
    // }
    public function showFaculty()
    {
        $facultymodel = new FacultyModel();
       $data['faculty']= $facultymodel->getData();
   
        return view('Admin/showFaculty',$data);
    }
    public function showStudent()
    {
        $studentmodel = new StudentModel();
       $data['student']= $studentmodel->getData();
   
        return view('Admin/showStudent',$data);
    }
	public function showSubject()
    {
        $subjectmodel = new SubjectModel();
        $data['course']= $subjectmodel->getData();
        return view('Admin/showSubject',$data);
    }
    public function addFaculty()
    {
        return view('Admin/addFaculty');
    }
    public function saveFaculty()
    {
        $fid	= $this->request->getPost('facultyId');
		$fname	= $this->request->getPost('fname');
		$mname		= $this->request->getPost('mname');
        $lname		= $this->request->getPost('lname');
		$address		= $this->request->getPost('address');
		$phone_no		= $this->request->getPost('mobile_no');
        $email		= $this->request->getPost('email');
		$password		= $this->request->getPost('cpass');
		$qualification		= $this->request->getPost('qualification');
		$exp		= $this->request->getPost('experience');
		$jod		= $this->request->getPost('joiningDate');
		$dob		= $this->request->getPost('dob');
        $gender		= $this->request->getPost('gender');
		$designation = $this->request->getPost('designation');

        $data = [
            'id' => $fid,
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'address' => $address,
            'mobile_no' => $phone_no,
            'email' => $email,
            'password' => $password,
            'highest_qualification' => $qualification,
            'experience' => $exp,
            'joining_date' => $jod,
            'dateOfBirth' => $dob,
            'gender' => $gender,
            'designation' => $designation
        ];
        $facultymodel = new FacultyModel();
        $result = $facultymodel->addFaculty($data);
		if($result) {
					session()->setFlashdata('success', 'Faculty Added Succesfully');
					return redirect()->to('addFaculty');
					
		} 
        else {
			session()->setFlashdata('error', 'What Wrong With');
            return redirect()->to('addFaculty');
		}
    }
	public function updateFaculty()
	{
		{
			$fid	= $this->request->getPost('facultyId');
			$fname	= $this->request->getPost('fname');
			$mname		= $this->request->getPost('mname');
			$lname		= $this->request->getPost('lname');
			$address		= $this->request->getPost('address');
			$phone_no		= $this->request->getPost('mobile_no');
			$email		= $this->request->getPost('email');
			$password		= $this->request->getPost('cpass');
			$qualification		= $this->request->getPost('qualification');
			$exp		= $this->request->getPost('experience');
			$jod		= $this->request->getPost('joiningDate');
			$dob		= $this->request->getPost('dob');
			$gender		= $this->request->getPost('gender');
			$designation = $this->request->getPost('designation');
	
			$data = [
				'id' => $fid,
				'fname' => $fname,
				'mname' => $mname,
				'lname' => $lname,
				'address' => $address,
				'mobile_no' => $phone_no,
				'email' => $email,
				'password' => $password,
				'highest_qualification' => $qualification,
				'experience' => $exp,
				'joining_date' => $jod,
				'dateOfBirth' => $dob,
				'gender' => $gender,
				'designation' => $designation
			];
			$facultymodel = new FacultyModel();
			$result = $facultymodel->updateFaculty($data,$fid);
			if($result) {
						session()->setFlashdata('success', $fid.' Faculty Updated Succesfully');
						return redirect()->to('showFaculty');			
			} 
			else {
				session()->setFlashdata('error', 'What Wrong With');
				return redirect()->to('admin');
			}
		}
	}
	public function saveStudent1() 
    {
		// echo "<script type='text/javascript'>alert('Heelo');</script>";
		$fname	= $this->request->getPost('fname');
		$mname		= $this->request->getPost('mname');
        $lname		= $this->request->getPost('lname');
        $email		= $this->request->getPost('email');
		$password		= $this->request->getPost('cpass');
        $phone_no		= $this->request->getPost('mobile_no');
		$prnNo		= $this->request->getPost('prnNo');
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
            'prn_no'		=> $prnNo,
            'gender'		=> $gender,
            'dob'		=> $dob,
            'branch'    => $branch,
            'class'     => $class
            
        ];
		$studentmodel = new StudentModel();
		$result = $studentmodel->register($data);
		 if($result) {
			session()->setFlashdata('success', 'Student Added Succesfully');
			return redirect()->to('addStudent');
			
		} 
		else {
			session()->setFlashdata('error', 'What Wrong With');
			return redirect()->to('addStudent');
		}
	}
    public function addStudent()
    {
        return view('Admin/addStudent');
    }
	public function addSubject()
    {
        return view('Admin/addcourse');
    }
	public function addCourse()
    {
        $branch	= $this->request->getPost('branch');
		$class		= $this->request->getPost('class');
        $semester		= $this->request->getPost('semester');
        $courseId		= $this->request->getPost('courseid');
		$fullForm		= $this->request->getPost('fForm');
        $shortForm		= $this->request->getPost('sForm');
		$weightage		= $this->request->getPost('weightage');
        $theory		= $this->request->getPost('theory');
        $practical		= $this->request->getPost('practical');
			
		$data = [
			'subject_id'		=> $courseId,
			'fullForm'		=> $fullForm,
			'shortForm'		=> $shortForm,
            'semester'			=> $semester,
            'totalWeightage'		=> $weightage,
            'branch'    => $branch,
            'class'     => $class,
			'theory'	=> $theory,
			'practical'	=> $practical
            
        ];
		$subjectmodel = new SubjectModel();
		$result = $subjectmodel->register($data);
		 if($result) {
			session()->setFlashdata('success', 'Subject Added Succesfully');
			return redirect()->to('addSubject');
			
		} 
		else {
			session()->setFlashdata('error', 'What Wrong With');
			return redirect()->to('addSubject');
		}
    }
	public function allocateCourse()
    {
		$coursemodel =new SubjectModel();
		$subject['subject']=$coursemodel->getData();

		$facultymodel =new FacultyModel();
		$faculty['faculty']=$facultymodel->getData();
		// var_dump($data);
		$data=$subject+$faculty;
		// ['subject'=>$subject,'faculty'=>$faculty]
        return view('Admin/allocateCourse',$data);
    }
	public function allocateCourse1()
    {
		// $branch	= $this->request->getPost('branch');
		// $class		= $this->request->getPost('class');
        $semester		= $this->request->getPost('semester');
        $courseId		= $this->request->getPost('courseId');
		$facultyId		= $this->request->getPost('facultyId');
		// $fullForm		= $this->request->getPost('fForm');
        // $shortForm		= $this->request->getPost('sForm');
		// $weightage		= $this->request->getPost('weightage');
        // $theory		= $this->request->getPost('theory');
        // $practical		= $this->request->getPost('practical');
			
		$data = [
			'course_id'		=> $courseId,
			'faculty_id'		=> $facultyId,
			// 'shortForm'		=> $shortForm,
            'academic_id'			=> $semester,
            
            
        ];
		$courseAllocationmodel = new CourseAllocationModel();
		$result = $courseAllocationmodel->allocate($data);
		 if($result) {
			session()->setFlashdata('success', 'Subject Allocated Succesfully');
			return redirect()->to('allcateCourse');
			
		} 
		else {
			session()->setFlashdata('error', 'What Wrong With');
			return redirect()->to('allcateCourse');
		}
    }
	public function addMultipleStudent()
    {
        return view('Admin/addMultipleStudent');
    }
	public function addMultipleFaculty()
    {
        return view('Admin/addMultipleFaculty');
    }
	public function spreadsheet_import()
	{
		// echo "<script>alert('simport');</script>";
		$upload_file=$_FILES['upload_file']['name'];
		$extension=pathinfo($upload_file,PATHINFO_EXTENSION);
		if($extension=='csv')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else if($extension=='xls')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
		$sheetdata=$spreadsheet->getActiveSheet()->toArray();
		// echo '<pre>';
		// print_r($sheetdata);
		$sheetcount=count($sheetdata);
		// echo "<script>alert('$sheetcount');</script>";
		if($sheetcount>=1)
		{
			// echo "<script>alert('simport1');</script>";
			$data=array();
			for ($i=1; $i < $sheetcount; $i++) { 
				$fname=$sheetdata[$i][0];
				// echo "<script>alert($fname);</script>";
				$mname=$sheetdata[$i][1];
				// echo "<script>alert('simport1');</script>";
				$lname=$sheetdata[$i][2];
				// echo "<script>alert('simport1');</script>";
				$email=$sheetdata[$i][3];
				// echo "<script>alert('simport1');</script>";
				$password=$sheetdata[$i][4];
				// echo "<script>alert('simport1');</script>";
				$mobile_no=$sheetdata[$i][5];
				// echo "<script>alert('simport1');</script>";
				$prn_no=$sheetdata[$i][6];
				// echo "<script>alert('simport1');</script>";
				$gender=$sheetdata[$i][7];
				// echo "<script>alert('simport1');</script>";
				$branch=$sheetdata[$i][8];
				// echo "<script>alert('simport1');</script>";
				$class=$sheetdata[$i][9];
				// echo "<script>alert('simport1');</script>";
				$dob=$sheetdata[$i][10];
				// echo "<script>alert('simport1');</script>";

				$data=array(
					'fname'=>$fname,
					'mname'=>$mname,
					'lname'=>$lname,
					'email'=>$email,
					'password'=>$password,
					'mobile_no'=>$mobile_no,
					'prn_no'=>$prn_no,
					'gender'=>$gender,
					'branch'=>$branch,
					'class'=>$class,
					'dob'=>$dob
					
				);
				// echo "<script>alert('simport4');</script>";
			 $studentmodel = new StudentModel(); 
			//  var_dump($data);
			$inserdata=$studentmodel->insert_batch($data);
				// echo "<script>alert('simport3');</script>";
			}
			if($inserdata)
			{
				session()->setFlashdata('message','<div class="alert alert-success">Successfully Added.</div>');
				redirect('addStudent');
			} else {
				session()->setFlashdata('message','<div class="alert alert-danger">Data Not uploaded. Please Try Again.</div>');
				redirect('addMultipleFaculty');
			}
		}
	}
	public function spreadsheet_importFaculty()
	{
		echo "<script>alert('simport');</script>";
		$upload_file=$_FILES['upload_file']['name'];
		$extension=pathinfo($upload_file,PATHINFO_EXTENSION);
		if($extension=='csv')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else if($extension=='xls')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
		$sheetdata=$spreadsheet->getActiveSheet()->toArray();
		//  echo '<pre>';
		//  print_r($sheetdata);
		$sheetcount=count($sheetdata);

		 echo "<script>alert('$sheetcount');</script>";
		if($sheetcount>=1)
		{
		// 	echo "<script>alert('simport1');</script>";
			$data=array();
			for ($i=0; $i < $sheetcount; $i++) 
			{ 
				$id=$sheetdata[$i][0];
				$fname=$sheetdata[$i][1];
				// echo "<script>alert($fname);</script>";
				$mname=$sheetdata[$i][2];
				// echo "<script>alert('simport1');</script>";
				$lname=$sheetdata[$i][3];
				// echo "<script>alert('simport1');</script>";
				$address=$sheetdata[$i][4];
				// echo "<script>alert('simport1');</script>";
				$mobile_no=$sheetdata[$i][5];
				// echo "<script>alert('simport1');</script>";
				$email=$sheetdata[$i][6];
				// echo "<script>alert('simport1');</script>";
				$password=$sheetdata[$i][7];
				// echo "<script>alert('simport1');</script>";
				$highest_qualification=$sheetdata[$i][8];
				// echo "<script>alert('simport1');</script>";
				$experience=$sheetdata[$i][9];
				// echo "<script>alert('simport1');</script>";
				$joining_date=$sheetdata[$i][10];
				// echo "<script>alert('simport1');</script>";
				$dateOfBirth=$sheetdata[$i][11];
				//  echo "<script>alert('simport1');</script>";
				$gender=$sheetdata[$i][12];
				$designation=$sheetdata[$i][13];

				$data=array(
					'id'=>$id,
					'fname'=>$fname,
					'mname'=>$mname,
					'lname'=>$lname,
					'address'=>$address,
					'mobile_no'=>$mobile_no,
					'email'=>$email,
					'password'=>$password,
					'highest_qualification'=>$highest_qualification,
					'experience'=>$experience,
					'joining_date'=>$joining_date,
					'dateOfBirth'=>$dateOfBirth,
					'gender'=>$gender,
					'designation'=>$designation
				);
				$facultymodel = new FacultyModel(); 
				// //  var_dump($data);
				$inserdata=$facultymodel->insert_batch($data);

		// 		echo "<script>alert('simport3');</script>";
			}
			
			if($inserdata)
			{
				session()->setFlashdata('success','<div class="alert alert-success">Successfully Added.</div>');
				return redirect()->to('addMultipleFaculty');
			} else {
				session()->setFlashdata('error','<div class="alert alert-danger">Data Not uploaded. Please Try Again.</div>');
				return redirect()->to('addMultipleFaculty');
			}
			
			// var_dump($data);
		}
	}

    public function editFaculty($id)
	{
		$facultyModel = new  FacultyModel();
		$data['faculty'] = $facultyModel->editFaculty($id);	
		// var_dump($data);
		return view('Admin/edit_faculty',$data);
	}
	
	// public function updateFaculty($id)
	// {
	// 	$fid	= $this->request->getPost('facultyId');
	// 	$fname	= $this->request->getPost('fname');
	// 	$mname		= $this->request->getPost('mname');
    //     $lname		= $this->request->getPost('lname');
	// 	$address		= $this->request->getPost('address');
	// 	$phone_no		= $this->request->getPost('phone');
    //     $email		= $this->request->getPost('email');
	// 	$password		= $this->request->getPost('password');
	// 	$qualification		= $this->request->getPost('qualification');
	// 	$exp		= $this->request->getPost('experience');
	// 	$jod		= $this->request->getPost('joiningDate');
	// 	$dob		= $this->request->getPost('dob');
    //     $gender		= $this->request->getPost('gender');
	// 	$designation = $this->request->getPost('designation');
	
	// 	$data = [
	// 		'id'		=> $fid,
	// 		'fname'		=> $fname,
	// 		'mname'		=> $mname,
	// 		'lname'		=> $lname,
	// 		'address'		=> $address,
	// 		'mobile_no'		=> $phone_no,
    //         'email'			=> $email,
	// 		'password'			=> $password,
	// 		'highest_qualification'			=> $qualification,
	// 		'experience'			=> $exp,
	// 		'joining_date'		=> $jod,
	// 		'dateOfBirth'		=> $dob,
    //         'gender'		=> $gender,
    //         'designation'		=> $designation
    //     ];

	// 	$facultyModel = new  FacultyModel();
	// 	$facultyModel->updateFaculty($data,$id);
	// 		session()->setFlashdata('success', 'Faculty Updated Succesfully');
	// 		return redirect()->to('addFaculty');
	// }
    public function deleteFaculty($id)
	{
		$db = \Config\Database::connect();
		$query = $db->table('faculty')->delete(['id' => $id]);	
		// session_start();
				session()->setFlashdata('status', 'Faculty Deleted Succesfully');
				return redirect()->to('showFaculty');
			// echo '<script>alert('Are you confirm')';
	}
	public function deleteStudent($id)
	{
		$db = \Config\Database::connect();
		$query = $db->table('student')->delete(['id' => $id]);	
		// session_start();
				session()->setFlashdata('status', 'student Deleted Succesfully');
				return redirect()->to('showStudent');
			// echo '<script>alert('Are you confirm')';
	}
	public function deleteSubject($id)
	{
		$db = \Config\Database::connect();
		$query = $db->table('course')->delete(['id' => $id]);	
		// session_start();
				session()->setFlashdata('status', 'subject Deleted Succesfully');
				return redirect()->to('showSubject');
			// echo '<script>alert('Are you confirm')';
	}

	public function editStudent($id)
	{
		$studentModel = new  StudentModel();
		$data['student'] = $studentModel->editStudent($id);	
		// var_dump($data);
		return view('Admin/edit_student',$data);
	}
	public function saveStudent($id)
	{
		$fid	= $this->request->getPost('id');
		$fname	= $this->request->getPost('fname');
		$mname		= $this->request->getPost('mname');
        $lname		= $this->request->getPost('lname');
		$email		= $this->request->getPost('email');
		$mobile_no		= $this->request->getPost('mobile_no');
		$roll_no		= $this->request->getPost('roll_no');
		$dob		= $this->request->getPost('dob');
		$pass		= $this->request->getPost('cpass');
		echo "<script type='text/javascript'>alert('Hello');</script>";
        $gender		= $this->request->getPost('gender');
		$data = [
			'id'		=> $id,
			'fname'		=> $fname,
			'mname'		=> $mname,
			'lname'		=> $lname,
            'email'			=> $email,
			'mobile_no'		=> $mobile_no,
			'roll_no'		=> $roll_no,
			'gender' => $gender,
			'password' => $pass,
			'dob'	=> $dob
        ];

		$studentModel = new  StudentModel();
		$studentModel->updateStudent($data,$id);
			session()->setFlashdata('success', 'Student added Succesfully');
			return redirect()->to('addStudent');
		
	}

	public function updateStudent($id)
	{
		$fid	= $this->request->getPost('id');
		$fname	= $this->request->getPost('fname');
		$mname		= $this->request->getPost('mname');
        $lname		= $this->request->getPost('lname');
		$email		= $this->request->getPost('email');
		$mobile_no		= $this->request->getPost('mobile_no');
		$roll_no		= $this->request->getPost('roll_no');
		// $dob		= $this->request->getPost('dob');
        $gender		= $this->request->getPost('gender');
		$data = [
			'id'		=> $id,
			'fname'		=> $fname,
			'mname'		=> $mname,
			'lname'		=> $lname,
            'email'			=> $email,
			'mobile_no'		=> $mobile_no,
			'roll_no'		=> $roll_no,
			'gender' => $gender
        ];

		$studentModel = new  StudentModel();
		$studentModel->updateStudent($data,$id);
			session()->setFlashdata('success', 'Student updated Succesfully');
			return redirect()->to('addStudent');
		
	}


	public function editCourse($id)
	{
		echo "<script type='text/javascript'>alert('EditCourse');</script>";
		$subjectModel = new  SubjectModel();
		$data['course'] = $subjectModel->editCourse($id);	
		// var_dump($data);
		return view('Admin/edit_course',$data);
	}
	// public function addCourse()
    // {
    //     $branch	= $this->request->getPost('branch');
	// 	$class		= $this->request->getPost('class');
    //     $semester		= $this->request->getPost('semester');
    //     $courseId		= $this->request->getPost('courseid');
	// 	$fullForm		= $this->request->getPost('fForm');
    //     $shortForm		= $this->request->getPost('sForm');
	// 	$weightage		= $this->request->getPost('weightage');
    //     $theory		= $this->request->getPost('theory');
    //     $practical		= $this->request->getPost('practical');
			
	// 	$data = [
	// 		'subject_id'		=> $courseId,
	// 		'fullForm'		=> $fullForm,
	// 		'shortForm'		=> $shortForm,
    //         'semester'			=> $semester,
    //         'totalWeightage'		=> $weightage,
    //         'branch'    => $branch,
    //         'class'     => $class,
	// 		'theory'	=> $theory,
	// 		'practical'	=> $practical
            
    //     ];
	// 	$subjectmodel = new SubjectModel();
	// 	$result = $subjectmodel->register($data);
	// 	 if($result) {
	// 		session()->setFlashdata('success', 'S Added Succesfully');
	// 		return redirect()->to('addStudent');
			
	// 	} 
	// 	else {
	// 		session()->setFlashdata('error', 'What Wrong With');
	// 		return redirect()->to('addStudent');
	// 	}
    // }
	
	public function updateCourse($id)
    {
		echo "<script type='text/javascript'>alert('UpdateCourse'.$id);</script>";
        $branch	= $this->request->getPost('branch');
		$class		= $this->request->getPost('class');
        $semester		= $this->request->getPost('semester');
        $courseId		= $this->request->getPost('courseid');
		$fullForm		= $this->request->getPost('fForm');
        $shortForm		= $this->request->getPost('sForm');
		$weightage		= $this->request->getPost('weightage');
        $theory		= $this->request->getPost('theory');
        $practical		= $this->request->getPost('practical');
			
		echo "<script type='text/javascript>'>alert($branch);</script>";
		$data = [
			'subject_id'		=> $courseId,
			'fullForm'		=> $fullForm,
			'shortForm'		=> $shortForm,
            'semester'			=> $semester,
            'totalWeightage'		=> $weightage,
            'branch'    => $branch,
            'class'     => $class,
			'theory'	=> $theory,
			'practical'	=> $practical
            
        ];
		$subjectmodel = new SubjectModel();
	
		$subjectModel = new  SubjectModel();
		$subjectModel->updateCourse($data,$id);
			session()->setFlashdata('success', 'Subject updated Succesfully');
			return redirect()->to('addSubject');
    }

	public function questionAverage()
    {
		$subjectmodel = new SubjectModel();
        $data['subject'] = $subjectmodel->getData();
        //    var_dump($data);		
		// // var_dump($data);
		// // // '<pre>';
		// // // print_r($previousEntry);
         return view('Admin/questionAverage',$data);
		
    }
	public function getReport()
	{
		$subjectName	= $this->request->getPost('subjectName');

		echo $subjectName;
		
		// $fullForm= 'Database Engineering';
		$feedbackmodel=new FeedbackModel();
		$previousEntry = $feedbackmodel->where('lowVoice',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfLV =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfLV;


		$previousEntry = $feedbackmodel->where('impBoard',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfImpBoard =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfImpBoard;

		$previousEntry = $feedbackmodel->where('FastSyllabus',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOFastSyllabus =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOFastSyllabus;

		$previousEntry = $feedbackmodel->where('pEnglish',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfPEnglish =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfPEnglish;

		$previousEntry = $feedbackmodel->where('pPreparation',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfpPreparation =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfpPreparation;


		$previousEntry = $feedbackmodel->where('lSyllabus',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOflSyllabus =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOflSyllabus;




		$previousEntry = $feedbackmodel->where('lackInteraction',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOflackInteraction =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOflackInteraction;


		$previousEntry = $feedbackmodel->where('wrongPro',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfwrongPro =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfwrongPro;



		$previousEntry = $feedbackmodel->where('doubtNotClear',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOfdoubtNotClear =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfdoubtNotClear;



		$previousEntry = $feedbackmodel->where('lessExplanation',1)
									 ->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		// echo count($previousEntry);
		$avgOflessExplanation =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOflessExplanation;


		$previousEntry = $feedbackmodel->where('FastSpeaking',1)
		->where('subjectName',$subjectName)->find();
		// count($previousEntry);
		$countsub = $feedbackmodel->where('subjectName',$subjectName)->findall();
		// echo count($countsub);
		$p = count($countsub);
		// echo count($previousEntry);
		$avgOfFastSpeaking =100-((count($previousEntry)/count($countsub))*100);
		// echo $avgOfFastSpeaking;
		// echo "<script type='text/javascript'>alert();</script>";

		$data['average']=[
			'lowVoice'=>$avgOfLV,
			'impBoard'=>$avgOfImpBoard,
			'FastSyllabus'=>$avgOFastSyllabus,
			'PoorEnglish'=>$avgOfPEnglish,
			'PoorPre'=>$avgOfpPreparation,
			'LessSyllabus'=>$avgOflSyllabus,
			'LackInteraction'=>$avgOflackInteraction,
			'WrongPro'=>$avgOfwrongPro,
			'DoubtNot'=>$avgOfdoubtNotClear,
			'LessExpla'=>$avgOflessExplanation,
			'FastSpeaking'=>$avgOfFastSpeaking
		];
		return view('Admin/questionAverage1',$data);
	}
	
	public function theoryReport()
    {
		// $courseAllocationModel = new CourseAllocationModel();
		// $data['subject']= $courseAllocationModel->getData();

		// $studentModel = new StudentModel();
		// $data2['student']= $studentModel->getData();
		// $cnt = count($data2['student']);
		// var_dump($data1);
		// echo "<script type='text/javascript'>alert($cnt);</script>";
		// $data=$data1=$data2;
		// var_dump($data);
		// <tr>
        //         <td>No Problem Percentage</td>
        //         <?php  foreach($np as $row): 
         //         <td class="">
			# echo $npp= ($d/$np1)*100 ;</td> -->
        //        
    
        return view('Admin/theoryReport');
    }
	
	public function practicalReport()
    {
		// $courseAllocationModel = new CourseAllocationModel();
		// $data['subject']= $courseAllocationModel->getData();

		// $studentModel = new StudentModel();
		// $data2['student']= $studentModel->getData();
		// $cnt = count($data2['student']);
		// var_dump($data1);
		// echo "<script type='text/javascript'>alert($cnt);</script>";
		// $data=$data1=$data2;
		// var_dump($data);
		// <tr>
        //         <td>No Problem Percentage</td>
        //         <?php  foreach($np as $row): 
         //         <td class="">
			# echo $npp= ($d/$np1)*100 ;</td> -->
        //        
    
        return view('Admin/practicalReport');
    }
	
	public function theoryReport1()
	{
		$academic_id	= $this->request->getPost('class');
		// echo $academic_id;
		$studentmodel=new StudentModel();
		$totalStudents = $studentmodel->where('academic_id',$academic_id)->find();
		// echo count($totalStudents);
		// $data3['count']=[$totalStudents];
		$courseAllocationModel = new CourseAllocationModel();
		$data2['subject']= $courseAllocationModel->getSubject();
		
		// $subject = $data["subject"];
		// $subject_name = $subject[2]["fullForm"];
		// $subject = $data["subject"];
		// echo $subject_name; 
		// var_dump($data2);
		$subject = $data2["subject"];
		// $np['noProblem']=array();
		$feedbackmodel=new FeedbackModel();
		$data1['feedback'] = $feedbackmodel->getData();
		$cnt=count($subject);
		$subjectTotalfeedback[] = array();
		$subjectNoProblem["noProblem"] = array();
		$subjectLowVoice["lowVoice"] = array();
		$subjectimpBoard['impBoard'] =array();
		$subjectFastSyllabus['fastSyllabus'] = array();
		$subjectFastSpeaking['fastSpeaking']=array();
		$subjectPEnglish['pEnglish']=array();
		$subjectPPreparation['pPreparation']=array();
		$subjectLSyllabus['lSyllabus']=array();
		$subjectLackInteraction['lackInteraction']=array();
		$subjectWrongPro['wrongPro']=array();
		$subjectDoubtNotClear['doubnt']=array();
		$subjectLessExplanation['lessExplanation']	=array();

		for ($i = 0; $i <$cnt; $i++) 
		{
			$subject_name = $subject[$i]["fullForm"];

			$totalfeedback[] = $feedbackmodel->where('subjectName',$subject_name)->find();
			// echo count($totalfeedback);
			// $subjectTotalfeedback[] = $totalfeedback;
			// echo count($subjectTotalfeedback);
			$noProblem = $feedbackmodel->where('noProblem', 1)
										->where('subjectName', $subject_name)
										->find();
			$subjectNoProblem[] = $noProblem;


			$lowVoice = $feedbackmodel->where('lowVoice',1)
									 ->where('subjectName',$subject_name)->find();
			$subjectLowVoice[] = $lowVoice;

			$impBoard = $feedbackmodel->where('impBoard',1)
										->where('subjectName',$subject_name)->find();
										$subjectimpBoard[] = $impBoard;

			$FastSyllabus = $feedbackmodel->where('FastSyllabus',1)
										->where('subjectName',$subject_name)->find();
										$subjectFastSyllabus[] = $FastSyllabus;

			$FastSpeaking = $feedbackmodel->where('FastSpeaking',1)
											->where('subjectName',$subject_name)->find();							
										$subjectFastSpeaking[]=$FastSpeaking;
			
			
			$pEnglish = $feedbackmodel->where('pEnglish',1)
								->where('subjectName',$subject_name)->find();							
								$subjectPEnglish[]=$pEnglish;

			$pPreparation = $feedbackmodel->where('pPreparation',1)
											->where('subjectName',$subject_name)->find();
								$subjectPPreparation[]=$pPreparation;

			$lSyllabus = $feedbackmodel->where('lSyllabus',1)
											->where('subjectName',$subject_name)->find();
											$subjectLSyllabus[]=$lSyllabus;							
			
			$lackInteraction = $feedbackmodel->where('lackInteraction',1)
											->where('subjectName',$subject_name)->find();
											$subjectLackInteraction[]=$lackInteraction;							
			
			$wrongPro = $feedbackmodel->where('wrongPro',1)
										->where('subjectName',$subject_name)->find();
										$subjectWrongPro[]=$wrongPro;							
		
			$doubtNotClear = $feedbackmodel->where('doubtNotClear',1)
										->where('subjectName',$subject_name)->find();
										$subjectDoubtNotClear[]=$doubtNotClear;							
		
			$lessExplanation = $feedbackmodel->where('lessExplanation',1)
										->where('subjectName',$subject_name)->find();	
										$subjectLessExplanation[]	=$lessExplanation;					
			// echo "<script type='text/javascript'>alert('P');</script>";
			 		
		}

		for ($i = 0; $i <$cnt; $i++) 
		{
			$feedback1[] = count($totalfeedback[$i]);
			$np[]= count($subjectNoProblem[$i]);
			$lv[]= count($subjectLowVoice[$i]);
			$impbw[]=count($subjectimpBoard[$i]);
			$FastSylb[]=count($subjectFastSyllabus[$i]);
			$Fs1[]=count($subjectFastSpeaking[$i]);
			$pe[]=count($subjectPEnglish[$i]);
			$pp[]=count($subjectPPreparation[$i]);
			$ls[]=count($subjectLSyllabus[$i]);
			$li[]=count($subjectLackInteraction[$i]);
			$wp[]=count($subjectWrongPro[$i]);
			$dnc[]=count($subjectDoubtNotClear[$i]);
			$le[]=count($subjectLessExplanation[$i]);
			// echo "<script type='text/javascript'>alert(count($subjectTotalfeedback[$i]););</script>";
			// echo count($subjectTotalfeedback[$i]);
			$fp[]=(count($totalfeedback[$i])/count($totalStudents))*100;
		}
		

		return view('Admin/theoryReport1', ['totalStudents'=>$totalStudents,'feedback'=>$feedback1,'np' => $np, 'lv' => $lv,'impbw'=>$impbw,
											'FastSylb'=>$FastSylb,'Fs1'=>$Fs1,'pe'=>$pe,
											'pp'=>$pp,'ls'=>$ls,'li'=>$li,'wp'=>$wp,'dnc'=>$dnc,'le'=>$le,'subject'=>$subject,'feedper'=>$fp]);
			// return view('Admin/theoryReport1',$allCounts);

	}
	public function practicalReport1()
	{
		$academic_id	= $this->request->getPost('class');
		// echo $academic_id;
		$studentmodel=new StudentModel();
		$totalStudents = $studentmodel->where('academic_id',$academic_id)->find();
		// echo count($totalStudents);
		// $data3['count']=[$totalStudents];
		$courseAllocationModel = new CourseAllocationModel();
		$data2['subject']= $courseAllocationModel->getSubject();
		
		// $subject = $data["subject"];
		// $subject_name = $subject[2]["fullForm"];
		// $subject = $data["subject"];
		// echo $subject_name; 
		// var_dump($data2);
		$subject = $data2["subject"];
		// $np['noProblem']=array();
		$feedbackmodel=new FeedbackModel();
		$data1['feedback'] = $feedbackmodel->getData();
		$cnt=count($subject);
		$subjectTotalfeedback[] = array();
		$subjectNoProblem["noProblem"] = array();
		$subjectLowVoice["lowVoice"] = array();
		$subjectimpBoard['impBoard'] =array();
		$subjectFastSyllabus['fastSyllabus'] = array();
		$subjectFastSpeaking['fastSpeaking']=array();
		$subjectPEnglish['pEnglish']=array();
		$subjectPPreparation['pPreparation']=array();
		$subjectLSyllabus['lSyllabus']=array();
		$subjectLackInteraction['lackInteraction']=array();
		$subjectWrongPro['wrongPro']=array();
		$subjectDoubtNotClear['doubnt']=array();
		$subjectLessExplanation['lessExplanation']	=array();

	}}