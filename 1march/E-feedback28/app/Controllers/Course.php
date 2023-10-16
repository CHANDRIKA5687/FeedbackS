<?php

namespace App\Controllers;

use App\Models\SubjectModel;
use CodeIgniter\Controller;

class Course extends Controller
{
    // Initialize the CourseModel
    protected $courseModel;

    public function __construct()
    {
        $this->courseModel = new SubjectModel();
    }

    // Method to get branches
    public function getBranches()
    {
        $branches = $this->courseModel->getBranches();
        return $this->response->setJSON($branches);
    }

    // Method to get standards based on the selected branch
    public function getStandards($branchId)
    {
        $standards = $this->courseModel->getStandards($branchId);
        return $this->response->setJSON($standards);
    }

    // Method to get subjects based on the selected standard
    public function getSubjects($standardId)
    {
        $subjects = $this->courseModel->getSubjects($standardId);
        return $this->response->setJSON($subjects);
    }

    // // Method to load the view
    // public function index()
    // {
    //     return view('course_view');
    // }
}
