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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['auth/login'] = 'backend/auth/login';
$route['auth/register'] = 'backend/auth/register';
$route['auth/logout'] = 'backend/auth/logout';

$route['myprofil'] = 'backend/profil/index';

$route['admin'] = 'backend/admin/index';
$route['admin/edit'] = 'backend/admin/edit';
$route['admin/hapus'] = 'backend/admin/hapus';

$route['kategori'] = 'backend/k_berita/index';
$route['kategori/tambah'] = 'backend/k_berita/tambah';
$route['kategori/edit'] = 'backend/k_berita/edit';
$route['kategori/hapus'] = 'backend/k_berita/hapus';

$route['berita'] = 'backend/berita/index';
$route['berita/tambah'] = 'backend/berita/tambah';
$route['berita/edit'] = 'backend/berita/edit';
$route['berita/hapus'] = 'backend/berita/hapus';

$route['dashboard'] = 'backend/dashboard/index';

$route['katalog'] = 'backend/katalog/index';
$route['katalog/tambah'] = 'backend/katalog/tambah';
$route['katalog/edit'] = 'backend/katalog/edit';
$route['katalog/hapus'] = 'backend/katalog/hapus';





