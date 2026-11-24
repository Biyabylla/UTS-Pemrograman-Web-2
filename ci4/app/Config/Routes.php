<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

//login
$routes->get('login', 'Auth::index');
$routes->post('login/proses', 'Auth::proses');
$routes->get('logout', 'Auth::logout');

//halaman utama
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('profile', 'Home::profile');
    $routes->get('about', 'Home::about');
    $routes->get('portofolio', 'Home::portofolio');
    $routes->get('artikel', 'Home::artikel');
    $routes->addRedirect('article', 'artikel');
});

//project 3,4,5,6
$routes->get('project3/first', 'Project3::first');
$routes->get('project3/biodata', 'Project3::biodata');
$routes->get('project3/ketiga', 'Project3::ketiga');
$routes->get('project3/tugas', 'Project3::tugas');

$routes->get('project4/perulangan', 'Project4::perulangan');
$routes->get('project4/tugas_1', 'Project4::tugas1');
$routes->get('project4/tugas_2', 'Project4::tugas2');
$routes->get('project4/tugas_3', 'Project4::tugas3');

$routes->get('project5/array1', 'Project5::array1');
$routes->get('project5/array2', 'Project5::array2');
$routes->get('project5/array3', 'Project5::array3');
$routes->get('project5/tugas', 'Project5::tugas');

$routes->get('project6/login', 'Project6::login');
$routes->post('project6/cek_login', 'Project6::cekLogin');
$routes->get('project6/biodata', 'Project6::biodata');
$routes->post('project6/simpan', 'Project6::simpan');
$routes->get('project6/form_upload', 'Project6::formUpload');
$routes->post('project6/proses_upload', 'Project6::prosesUpload');

// project1 & project2 = HTML statis, langsung dilayani dari public/Project1 dan public/Project2
