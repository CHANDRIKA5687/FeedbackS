<?php
namespace App\Controllers;
use App\Models\FacultyModel;
use App\Models\UserModel;
use App\Models\CourseAllocationModel;
use App\Models\SubjectModel;
use App\Models\FeedbackModel;

class Faculty extends BaseController
{
    public function __construct() 
    {
		$db = db_connect();
		$this->userModel = new UserModel($db);
	}
	public function index()
	{
		return view('Faculty/index');
	}
	public function getBranches()
    {
        $branches = $this->courseModel->getBranches();
        return $this->response->setJSON($branches);
    }
	public function facultyThReport()
	{
		$email = session()->get('user_id');
		$faculty = new FacultyModel();
		$facultyData = $faculty->where('email',$email)->find();

		$fac_id= $facultyData[0]['id'];
		$courseAllocationmodel = new CourseAllocationModel();

		$subj = $courseAllocationmodel->where('faculty_id',$fac_id)->find();
		$subject_id['subject'] = $subj[0]["course_id"];

		$subjectmodel = new SubjectModel();
		$fullForm = $subjectmodel->where('courseId',$subject_id)->find();
		// var_dump($fullForm);
		$subCount = count($fullForm);
		for($i=0;$i<$subCount;$i++)
		{
			$subName["fullForm"]=$fullForm[$i]["fullForm"];
		}
	
		return view('Faculty/facultyThReport',$subName);
	}
	public function getReportFacultyWise()
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
		return view('Faculty/questionAverage1',$data);
	}
    
}