<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// frontend
$route['default_controller'] = 'public/home';
$route['contact'] = 'public/contact';
$route['home'] = 'public/home';
$route['about'] = 'public/about';
$route['fasilitas-layanan'] = 'public/fasilitas_layanan';
$route['fasilitas-layanan/igd'] = 'public/fasilitas_layanan/igd';
$route['fasilitas-layanan/poliklinik-specialis'] = 'public/fasilitas_layanan/poli_specialis';
$route['fasilitas-layanan/poliklinik-specialis/(:num)'] = 'public/fasilitas_layanan/poli_specialis_by_id/$1';
$route['fasilitas-layanan/penunjang-medis'] = 'public/fasilitas_layanan/penunjang_medis';
$route['fasilitas-layanan/penunjang-medis/(:num)'] = 'public/fasilitas_layanan/penunjang_medis_by_id/$1';
$route['fasilitas-layanan/fasilitas-lainya'] = 'public/fasilitas_layanan/fasilitas_lainya';
$route['fasilitas-layanan/fasilitas-lainya/(:num)'] = 'public/fasilitas_layanan/fasilitas_lainya_by_id/$1';
$route['jadwal-dokter'] = 'public/jadwal_dokter';
$route['jadwal-dokter/search'] = 'public/jadwal_dokter/search';
$route['jadwal-dokter/index/(:num)'] = 'public/jadwal_dokter/index/$1';
$route['jadwal-dokter/index'] = 'public/jadwal_dokter/index/';
$route['jadwal-dokter/custom/(:num)'] = 'public/jadwal_dokter/custom/$1';
$route['indikator-mutu'] = 'public/indikator_mutu';
$route['indikator-mutu'] = 'public/indikator_mutu';
$route['indikator-mutu/detail/(:num)'] = 'public/indikator_mutu/detail/$1';
$route['location'] = 'public/location';
$route['room'] = 'public/room/presidental_suites';
$route['room/detail/(:num)'] = 'public/room/detail/$1';
$route['room/presidental-suites'] = 'public/room/presidental_suites';
$route['room/vvip'] = 'public/room/vvip';
$route['room/vip'] = 'public/room/vip';
$route['room/kelas1'] = 'public/room/kelas1';
$route['room/kelas2'] = 'public/room/kelas2';
$route['room/kelas3'] = 'public/room/kelas3';
$route['contact/sendMessage'] = 'public/contact/sendMessage';
// end frontend

// backend
$route['cms'] = 'cms/auth';
$route['cms/users'] = 'cms/users';
$route['cms/users/create-user'] = 'cms/users/create_user';
$route['cms/users/edit/(:num)']  = 'cms/users/edit_user/$1';
$route['cms/contact']  = 'cms/contact';
$route['cms/profile']  = 'cms/profile';
$route['cms/profile/update']  = 'cms/profile/update';
$route['cms/ckeditor']  = 'cms/ckeditor';
$route['cms/testupload']  = 'cms/testUpload';
// end backend

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
