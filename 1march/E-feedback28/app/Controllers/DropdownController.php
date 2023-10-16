<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DropdownController extends BaseController
{
    public function get_branches()
    {
        // Fetch all branches from the database
        $branches = $this->db->distinct()->select('branch')->get('course')->result_array();

        // Return the data as JSON
        return $this->response->setJSON($branches);
    }

    public function get_classes()
    {
        $branch = $this->request->getPost('branch');

        // Fetch all classes for the selected branch from the database
        $classes = $this->db->distinct()->select('standard')->where('branch', $branch)->get('course')->result_array();

        // Return the data as JSON
        return $this->response->setJSON($classes);
    }

    public function get_subjects()
    {
        $branch = $this->request->getPost('branch');
        $class = $this->request->getPost('standard');

        // Fetch all subjects for the selected branch and class from the database
        $subjects = $this->db->distinct()->select('fullForm')->where('branch', $branch)->where('standard', $class)->get('course')->result_array();

        // Return the data as JSON
        return $this->response->setJSON($subjects);
    }

}