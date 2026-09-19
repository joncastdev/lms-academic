<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');

$routes->get('/register', 'Login::register');

$routes->post('/create', 'Login::create');

$routes->post('/logearse', 'Login::sign');

$routes->get('/logout', 'Login::out');

$routes->get('/activation', 'Login::activation');

// $routes->get('/activation/(:any)', 'Login::activation/$1');

$routes->get('/recover', 'Login::recover_password');

$routes->post('/recoverpass', 'Login::recover_action');

$routes->get('/emailpass', 'Login::email_password');

$routes->get('/dashboard', 'Dashboard::index');


// $routes->get('/countrys', 'Countrys::index');

// $routes->get('/select', 'Countrys::select');

// $routes->get('/states', 'States::index');


$routes->get('/users/table', 'Users::table');

$routes->get('/users/total', 'Users::total');

$routes->get('/users/orders', 'Users::orders');

$routes->get('/orders/table', 'Users::orders_table');

$routes->get('/users/promo', 'Users::email_promo_users');
$routes->get('/users/promo/guest', 'Users::email_promo_guest');

$routes->resource('users');

$routes->get('/panel', 'Panel::index');
$routes->get('/panel/profile', 'Panel::profile');
$routes->post('/change', 'Panel::change');
$routes->get('/panel/certificates', 'Panel::certificateUsers');
$routes->get('/panel/info', 'Panel::info');
$routes->post('/changeinfo', 'Panel::changeinfo');
$routes->get('/panel/countrys', 'Panel::countrys');


$routes->get('/courses', 'Courses::index');

$routes->get('/courses/(.*)', 'Courses::show/$1');

$routes->get('/videos/(.*)', 'Courses::videos/$1');

$routes->get('/checkout/(.*)', 'Courses::checkout/$1');

$routes->get('/notify', 'Courses::notify');

// rutas certificados
$routes->get('/certificates', 'Certificates::index');
$routes->get('/number', 'Certificates::number');
$routes->get('/pdfnumber/(.*)', 'Certificates::pdfNumber/$1');

// rutas certificados guest test
$routes->get('/certificates/exams', 'CertificatesGuest::index');
$routes->get('/number/exam', 'CertificatesGuest::number');
$routes->get('/pdfnumberexam/(.*)', 'CertificatesGuest::pdfNumber/$1');

// rutas de graduados
$routes->get('/graduates', 'Graduates::index');
// $routes->get('/select', 'Graduates::select');
$routes->get('/graduates/mapall', 'Graduates::mapall');

// rutas pdf pensum free
$routes->get('/pdfsymfonyseis', 'Home::pdfSymfonySeis');
$routes->get('/pdfcodeignitercuatro', 'Home::pdfCodeigniterCuatro');
$routes->get('/pdflaraveldiez', 'Home::pdfLaravelDiez');
$routes->get('/pdfsymfonycinco', 'Home::pdfSymfonyCinco');
$routes->get('/pdfyiidos', 'Home::pdfYiiDos');
$routes->get('/pdfcakephpcuatro', 'Home::pdfCakeCuatro');

// rutas tutoriales free youtube
$routes->get('/tutorials', 'Tutorials::index');
$routes->get('/tutorials/show/(.*)', 'Tutorials::show/$1');

// rutas para descargar proyectos
$routes->get('/proyecto/codeigniter', 'Courses::descargarCodeigniter');
$routes->get('/proyecto/symfony', 'Courses::descargarSymfony');
$routes->get('/proyecto/sym', 'Courses::descargarSym');
$routes->get('/proyecto/yii', 'Courses::descargarYii');
$routes->get('/proyecto/laravel', 'Courses::descargarLaravel');
$routes->get('/proyecto/cake', 'Courses::descargarCake');

// rutas articulos
$routes->get('/como-aprender-a-programar', 'Home::learn');

// rutas examenes
$routes->get('/test-de-codeigniter', 'Exams::index');
$routes->post('/start', 'Exams::start');
$routes->get('/questions', 'Exams::question');
$routes->post('/evaluation', 'Exams::evaluation');
// $routes->get('/questions/(.*)', 'exams::show/$1');

// rutas examen symfony
$routes->get('/test-de-symfony', 'Exams::examSym');
$routes->post('/startsym', 'Exams::startsym');
$routes->get('/questionssym', 'Exams::questionsym');
$routes->post('/evaluationsym', 'Exams::evaluationsym');



// rutas free cursos
$routes->get('/courses-free/(.*)', 'Home::show/$1');
$routes->get('/videos-free/(.*)', 'Home::videos/$1');

// $routes->post('/notify', 'Courses::notify');

// $routes->post('/notify)', 'Courses::notify');

// $routes->get('/notify/(:any)', 'Courses::notify/$1');

// $routes->get('/success)', 'Courses::success');

// $routes->get('/success/(:any)', 'Courses::success/$1');

$routes->get('/success', 'Courses::success');

$routes->get('/cancel', 'Courses::cancel');




