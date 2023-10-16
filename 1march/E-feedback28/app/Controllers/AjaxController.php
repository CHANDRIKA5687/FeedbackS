<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AjaxController extends Controller
{
    public function getClasses()
    {
        $branch = $this->request->getGet('branch');
        $db = \Config\Database::connect();
        $classes = $db->query("SELECT DISTINCT class FROM course WHERE branch = '$branch'")->getResult();
        echo json_encode($classes);
    }
}
