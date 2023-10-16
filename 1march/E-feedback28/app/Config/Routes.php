<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/logout', 'Auth::logout');
$routes->post('/Userlogin', 'Auth::loginUser');
$routes->get('/register', 'Home::register');
$routes->post('/saveStudent', 'Home::saveStudent');
$routes->get('/forgetPassword', 'Home::forgetPassword');
$routes->post('/forgot/send', 'Forgot::sendEmail');


$routes->get('resetpassword/:token', 'ResetPassword::index/$1');
$routes->post('resetpassword/reset', 'ResetPasswordController::reset');




// Admin Routes
$routes->get('/admin', 'Admin::index');
$routes->get('/addStudent', 'Admin::addStudent');
$routes->get('/addFaculty', 'Admin::addFaculty');
$routes->post('/saveFaculty', 'Admin::saveFaculty');
$routes->post('/updateFaculty', 'Admin::updateFaculty');
$routes->post('/saveStudent1', 'Admin::saveStudent1');
$routes->add('import', 'Home/import');
$routes->get('/addMultipleFaculty', 'Admin::addMultipleFaculty');
$routes->get('/addMultipleStudent', 'Admin::addMultipleStudent');
$routes->get('/showFaculty', 'Admin::showFaculty');
$routes->get('/showStudent', 'Admin::showStudent');
$routes->post('/spreadsheet_import', 'Admin::spreadsheet_import');
$routes->post('/spreadsheet_importFaculty', 'Admin::spreadsheet_importFaculty');
$routes->get('/faculty/edit/(:any)','Admin::editFaculty/$1');
$routes->post('/faculty/update/(:any)','Admin::updateFaculty/$1');
$routes->get('/student/edit/(:any)','Admin::editStudent/$1');
$routes->post('/student/update/(:any)','Admin::updateStudent/$1');
$routes->get('/faculty/delete/(:any)','Admin::deleteFaculty/$1');
$routes->get('/student/delete/(:any)','Admin::deleteStudent/$1');
$routes->get('/addSubject', 'Admin::addSubject');
$routes->post('/addCourse', 'Admin::addCourse');
$routes->get('/showSubject', 'Admin::showSubject');
$routes->get('/allocateCourse', 'Admin::allocateCourse');
$routes->post('/allocateCourse1', 'Admin::allocateCourse1');


$routes->get('/questionAverage', 'Admin::questionAverage');
$routes->post('/getReport', 'Admin::getReport');
$routes->get('/theoryReport', 'Admin::theoryReport');
$routes->POST('/theoryReport1', 'Admin::theoryReport1');

// $routes->get('ajax/classes', 'AjaxController::getClasses');


// Student  Routes
$routes->get('/student', 'Student::index');
$routes->get('/theoryFeedback', 'Student::theoryFeedback');
$routes->post('/saveFeedback', 'Student::saveFeedback');
$routes->post('/savePracticalFeedback', 'Student::savePracticalFeedback');
$routes->get('/practicalFeedback', 'Student::practicalFeedback');
// $routes->post('/saveFeedback', 'Student::saveFeedback');




//subject routes
$routes->get('/course/edit/(:any)','Admin::editCourse/$1');
$routes->post('/course/update/(:any)','Admin::updateCourse/$1');
$routes->get('/course/delete/(:any)','Admin::deleteCourse/$1');


// Faculty Routes
$routes->get('/faculty', 'Faculty::index');
$routes->get('/facultyThReport', 'Faculty::facultyThReport');
$routes->post('/getReportFacultyWise', 'Faculty::getReportFacultyWise');

$routes->get('profile', 'Student::profile');
$routes->get('profile/edit', 'Profile::edit');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
