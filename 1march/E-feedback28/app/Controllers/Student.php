<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;
use App\Models\FeedbackModel;
use App\Models\FeedbackModel1;

class Student extends BaseController
{
    public function __construct() 
    {
		$db = db_connect();
		// $this->userModel = new UserModel($db);
	}
    public function index()
    {
        return view('Student/index');
    }
	public function profile()
    {
		$email = session()->get('user_id');
		$student = new StudentModel();
		$studentData['std'] = $student->where('email',$email)->find();
        return view('Student/profile',$studentData);
    }
    public function theoryFeedback()
    {
        $email = session()->get('user_id');
        $subjectmodel = new SubjectModel();
        $data['subject'] = $subjectmodel->getSubject($email);
        //   var_dump($data);
           $data1['ses_email'] =$email;
       
         return view('Student/theoryFeedback',$data,$data1);
    }
     public function saveFeedback()
	{
        // echo "<script type='text/javascript'>alert('Hello');</script>";
		$fullForm	= $this->request->getPost('fullForm');

		$c1	= $this->request->getPost('feedback');
		// $np = $this->request->getPOst('np');
		$np=0;
		$lowVoice=0;
		$impBoard=0;
        $fastSyllabus=0;
        $pEnglish=0;
		$pPreparation=0;
		$lSyllabus=0;
		$lackInteraction=0;
		$wrongPro=0;
		$doubtNotClear=0;
		$lessExplination=0;
        $fastSpeaking=0;
        $comment	= $this->request->getPost('comment');
        $email	= $this->request->getPost('email');
        //   var_dump($c1);
		//  print_r($c1[1]);
				
		for($i=0;$i<sizeof($c1);$i++)
		{
			if($c1[$i]=="np")
				$np=1;	
			if($c1[$i]=="lowVoice")
				$lowVoice=1;	
			if($c1[$i]=="impBoard")
				$impBoard=1;
			if($c1[$i]=="fastSyllabus")
				$fastSyllabus=1;
			if($c1[$i]=="pEnglish")
				$pEnglish=1;
			if($c1[$i]=="pPreparation")
				$pPreparation=1;
			if($c1[$i]=="lSyllabus")
				$lSyllabus=1;
			if($c1[$i]=="lackInteraction")
				$lackInteraction=1;
			if($c1[$i]=="wrongPro")
				$wrongPro=1;
			if($c1[$i]=="doubtNotClear")
				$doubtNotClear=1;
			if($c1[$i]=="lessExplination")
				$lessExplination=1;
            if($c1[$i]=="fastSpeaking")
				$fastSpeaking=1;			
		}
         $email = session()->get('user_id');
        //  echo "<script type='text/javascript'>alert($email)</script>";

		$data = [
			'subjectName'				=> $fullForm,
             'emailId'                     => $email,
			'lowVoice'					=> $lowVoice,
			'noProblem'					=> $np,
			'impBoard'	                => $impBoard,
			'FastSyllabus'				=> $fastSyllabus,
			'pEnglish'				    => $pEnglish,
			'pPreparation'			    => $pPreparation,
            'lSyllabus'				    => $lSyllabus,
			'lackInteraction'		    => $lackInteraction,
			'wrongPro'		            => $wrongPro,
			'doubtNotClear'			    => $doubtNotClear,
            'lessExplanation'			=> $lessExplination,
            'FastSpeaking'              => $fastSpeaking,
			'comment'              => $comment
		];
		$feedbackmodel=new FeedbackModel();
		$previousEntry = $feedbackmodel->where('emailId', $email)
									->where('subjectName',$fullForm)->findAll();
		if ($previousEntry) {
			session()->setFlashdata('error','You Have Already Given Feedback For '.$fullForm);
			return redirect()->to('theoryFeedback');
		} else {
			$result = $feedbackmodel->add_feedback($data);
		if($result) {
			session()->setFlashdata('success', 'Feedback Submitted Successfully For '.$fullForm);
			return redirect()->to('theoryFeedback');
		}
		else {
			session()->setFlashdata('error', $fullForm.' Feedback not Submitted');
			return redirect()->to('theoryFeedback');
		}
	
		}

	}
	public function practicalFeedback()
	{
		$email = session()->get('user_id');
        $subjectmodel = new SubjectModel();
        $data['subject'] = $subjectmodel->getSubject($email);
        //   var_dump($data);
           $data1['ses_email'] =$email;
		return view('Student/practicalFeedback',$data);
	}
	public function savePracticalFeedback()
	{
		$fullForm	= $this->request->getPost('fullForm');
		$comment	= $this->request->getPost('comment');
		$email = session()->get('user_id');
		$data=[
			'emailId'	=>$email,
			'subjectName' =>$fullForm,
			'comment'  =>$comment
		];

		$feedbackmodel1=new FeedbackModel1();
		$previousEntry = $feedbackmodel1->where('emailId', $email)
									->where('subjectName',$fullForm)->findAll();
		if ($previousEntry)
		{
			session()->setFlashdata('error','You Have Already Given Feedback For '.$fullForm);
			return redirect()->to('practicalFeedback');
		} 
		else 
		{
			$result = $feedbackmodel1->add_feedback($data);
			if($result) 
			{
				session()->setFlashdata('success', 'Feedback Submitted Successfully For '.$fullForm);
				return redirect()->to('practicalFeedback');
			}
			else
			{
				session()->setFlashdata('error', $fullForm.' Feedback not Submitted');
				return redirect()->to('practicalFeedback');
			}
		}

    
	}
}
?>